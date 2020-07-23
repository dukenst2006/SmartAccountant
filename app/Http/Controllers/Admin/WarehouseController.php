<?php

namespace App\Http\Controllers\Admin;
use App\Charts\WarehouseChart;
use App\DataTables\Admin\ProductDataTable;
use App\Repositories\ProductRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
use Flash;
use Illuminate\View\View;
use Response;

class WarehouseController extends AppBaseController
{
    /** @var  WarehouseRepository */
    /** @var  ProductRepository */
    private $warehouseRepository;
    private $productRepository;

    public function __construct(WarehouseRepository $warehouseRepo , ProductRepository $productRepo)
    {
        $this->warehouseRepository = $warehouseRepo;
        $this->productRepository = $productRepo;
    }


    /**
     * Display a listing of the Warehouse.
     *
     * @param  ProductDataTable  $productDataTable
     * @return Factory|View
     */
    public function index(ProductDataTable $productDataTable)
    {

      $product=  $this ->productRepository->GetTop10InWarehouse();
        $chart = new WarehouseChart();


        $chart->labels($product->pluck('Name'));
        $chart->dataset('المنتجات', 'pie',$product->pluck('Quantity')  )->backgroundcolor($chart->backgroundColor);


        $warehouse = $this->warehouseRepository->allQuery()->withCount(['products'])->get()->first();
        return $productDataTable->render('admin.warehouses.index', ['warehouse' => $warehouse, 'chart' => $chart]);

    }

}
