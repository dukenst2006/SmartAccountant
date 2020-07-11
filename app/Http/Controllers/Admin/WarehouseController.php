<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductDataTable;
use App\Http\Requests\CreateWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;
use App\Repositories\WarehouseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Flash;
use Illuminate\View\View;
use Response;

class WarehouseController extends AppBaseController
{
    /** @var  WarehouseRepository */
    private $warehouseRepository;

    public function __construct(WarehouseRepository $warehouseRepo)
    {
        $this->warehouseRepository = $warehouseRepo;
    }

    /**
     * Display a listing of the Warehouse.
     *
     * @param  ProductDataTable  $productDataTable
     * @return Factory|View
     */
    public function index(ProductDataTable $productDataTable)
    {
    $warehouse = $this->warehouseRepository->allQuery()->withCount(['products'])->get()->first();

        return $productDataTable->render('admin.warehouses.index');

        return view('admin.warehouses.index')
            ->with('warehouse', $warehouse);
    }

    /**
     * Show the form for creating a new Warehouse.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.warehouses.create');
    }

    /**
     * Store a newly created Warehouse in storage.
     *
     * @param CreateWarehouseRequest $request
     *
     * @return Response
     */
    public function store(CreateWarehouseRequest $request)
    {
        $input = $request->all();

        $warehouse = $this->warehouseRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/warehouses.singular')]));

        return redirect(route('warehouses.index'));
    }

    /**
     * Display the specified Warehouse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $warehouse = $this->warehouseRepository->find($id);

        if (empty($warehouse)) {
            Flash::error(__('messages.not_found', ['model' => __('models/warehouses.singular')]));

            return redirect(route('warehouses.index'));
        }

        return view('admin.warehouses.show')->with('warehouse', $warehouse);
    }

    /**
     * Show the form for editing the specified Warehouse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $warehouse = $this->warehouseRepository->find($id);

        if (empty($warehouse)) {
            Flash::error(__('messages.not_found', ['model' => __('models/warehouses.singular')]));

            return redirect(route('warehouses.index'));
        }

        return view('admin.warehouses.edit')->with('warehouse', $warehouse);
    }

    /**
     * Update the specified Warehouse in storage.
     *
     * @param int $id
     * @param UpdateWarehouseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWarehouseRequest $request)
    {
        $warehouse = $this->warehouseRepository->find($id);

        if (empty($warehouse)) {
            Flash::error(__('messages.not_found', ['model' => __('models/warehouses.singular')]));

            return redirect(route('warehouses.index'));
        }

        $warehouse = $this->warehouseRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/warehouses.singular')]));

        return redirect(route('warehouses.index'));
    }

    /**
     * Remove the specified Warehouse from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $warehouse = $this->warehouseRepository->find($id);

        if (empty($warehouse)) {
            Flash::error(__('messages.not_found', ['model' => __('models/warehouses.singular')]));

            return redirect(route('warehouses.index'));
        }

        $this->warehouseRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/warehouses.singular')]));

        return redirect(route('warehouses.index'));
    }
}
