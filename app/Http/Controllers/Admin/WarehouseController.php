<?php

namespace App\Http\Controllers\Admin;
use App\DataTables\Admin\ProductDataTable;
use App\Repositories\WarehouseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
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
        return $productDataTable->render('admin.warehouses.index',['warehouse'=>$warehouse]);

    }

}
