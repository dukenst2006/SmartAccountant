<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductDataTable;
use App\Exports\ProductsExport;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Imports\ProductsImport;
use App\Models\Marketplace;
use App\Models\Product;
use App\Models\Warehouse;
use App\Repositories\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class ProductMovesController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }


    public function index()
    {

        $marketplaces = $this->productRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');

        return view('admin.ProductsMoves.index')->with(['marketplaces'=>$marketplaces]);
    }



    public function move( )
    {
           //Move
    }



}
