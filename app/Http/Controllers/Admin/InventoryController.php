<?php

namespace App\Http\Controllers\Admin;

use App\Charts\InventoryChart;
use App\Http\Requests\CreateInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Repositories\InventoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Flash;
use Illuminate\View\View;
use Response;

class InventoryController extends AppBaseController
{
    /** @var  InventoryRepository */
    private $inventoryRepository;

    public function __construct(InventoryRepository $inventoryRepo)
    {
        $this->inventoryRepository = $inventoryRepo;
    }

    /**
     * Display a listing of the Inventory.
     *
     * @param  Request  $request
     *
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $inventories = $this->inventoryRepository->paginate(25);

        $inventoriesCharts = new  InventoryChart;

        $backgroundColor =  [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 206, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(111, 223, 252)',
        'rgb(201, 158, 62)',
        'rgb(55, 28, 53)',
        'rgb(57, 136, 191)',
        'rgb(145, 35, 14)',
        'rgb(43, 2, 96)',
        'rgb(201, 24, 86)',
        'rgb(227, 3, 210)',
    ];


        $inventoriesCharts->labels(collect($inventories->items())->pluck(['marketplace'])->collect()->pluck('Name'));
            $inventoriesCharts->dataset('الخسائر', 'pie', collect($inventories->items())->pluck('products_count'))->backgroundcolor($backgroundColor);




        return view('admin.inventories.index')
            ->with(['inventories' => $inventories, 'inventoriesCharts' => $inventoriesCharts]);
    }

    /**
     * Show the form for creating a new Inventory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.inventories.create');
    }

    /**
     * Store a newly created Inventory in storage.
     *
     * @param  CreateInventoryRequest  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateInventoryRequest $request)
    {
        $input = $request->all();

        $inventory = $this->inventoryRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/inventories.singular')]));

        return redirect(route('inventories.index'));
    }

    /**
     * Display the specified Inventory.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inventories.singular')]));

            return redirect(route('inventories.index'));
        }

        return view('admin.inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified Inventory.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inventories.singular')]));

            return redirect(route('inventories.index'));
        }

        return view('admin.inventories.edit')->with('inventory', $inventory);
    }

    /**
     * Update the specified Inventory in storage.
     *
     * @param  int  $id
     * @param  UpdateInventoryRequest  $request
     *
     * @return Response
     */
    public function update($id, UpdateInventoryRequest $request)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inventories.singular')]));

            return redirect(route('inventories.index'));
        }

        $inventory = $this->inventoryRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/inventories.singular')]));

        return redirect(route('inventories.index'));
    }

    /**
     * Remove the specified Inventory from storage.
     *
     * @param  int  $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        $inventory = $this->inventoryRepository->find($id);

        if (empty($inventory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/inventories.singular')]));

            return redirect(route('inventories.index'));
        }

        $this->inventoryRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/inventories.singular')]));

        return redirect(route('inventories.index'));
    }
}
