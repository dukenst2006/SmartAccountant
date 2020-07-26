<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SupplierDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSupplierRequest;
use App\Http\Requests\Admin\UpdateSupplierRequest;
use App\Repositories\Admin\SupplierRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SupplierController extends AppBaseController
{
    /** @var  SupplierRepository */
    private $supplierRepository;

    public function __construct(SupplierRepository $supplierRepo)
    {
        $this->supplierRepository = $supplierRepo;
    }

    /**
     * Display a listing of the Supplier.
     *
     * @param SupplierDataTable $supplierDataTable
     * @return Response
     */
    public function index(SupplierDataTable $supplierDataTable)
    {
        return $supplierDataTable->render('admin.suppliers.index');
    }

    /**
     * Show the form for creating a new Supplier.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.suppliers.create')->with('companies',$this->supplierRepository->GetDataForSelect('companies','MarketplaceOwnerID'));
    }

    /**
     * Store a newly created Supplier in storage.
     *
     * @param CreateSupplierRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierRequest $request)
    {
        $input = $request->all();

        $supplier = $this->supplierRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/suppliers.singular')]));

        return redirect(route('admin.suppliers.index'));
    }

    /**
     * Display the specified Supplier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error(__('models/suppliers.singular').' '.__('messages.not_found'));

            return redirect(route('admin.suppliers.index'));
        }

        return view('admin.suppliers.show')->with('supplier', $supplier);
    }

    /**
     * Show the form for editing the specified Supplier.
     *
     * @param  int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suppliers.singular')]));

            return redirect(route('admin.suppliers.index'));
        }

        return view('admin.suppliers.edit')->with(['supplier'=> $supplier,'companies'=>$this->supplierRepository->GetDataForSelect('companies','UserID')]) ;
    }

    /**
     * Update the specified Supplier in storage.
     *
     * @param  int              $id
     * @param UpdateSupplierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierRequest $request)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suppliers.singular')]));

            return redirect(route('admin.suppliers.index'));
        }

        $supplier = $this->supplierRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/suppliers.singular')]));

        return redirect(route('admin.suppliers.index'));
    }

    /**
     * Remove the specified Supplier from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suppliers.singular')]));

            return redirect(route('admin.suppliers.index'));
        }

        $this->supplierRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/suppliers.singular')]));

        return redirect(route('admin.suppliers.index'));
    }
}
