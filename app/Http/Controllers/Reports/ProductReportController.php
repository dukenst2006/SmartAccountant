<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Product;
use App\Repositories\Admin\EmployeeRepository;
use App\Repositories\InvoiceRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Integer;

class ProductReportController extends AppBaseController
{
    private $invoiceRepository;
    /** @var  InvoiceRepository */
    private $userRepository;


    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    public function index()
    {

        $products=   $this->invoiceRepository
        ->allQuery()->with('invoiceItems')
        ->whereYear('created_at', '=', now()->year)
        ->whereMonth('created_at', '=', now()->month)
        ->get()->pluck('invoiceItems')->flatten()->groupBy('ProductID')->Map(function ($items) {
        $quantity = $items->sum('Quantity');
        return [ 'Quantity'=>$quantity   , 'Name'=>$items->first()->product->name];
        })->SortByDesc('Quantity')->take(10);

        $productchart = new ProductChart ;


        foreach ($products  as $product){
        $productchart->dataset($product['Name'], 'bar',[$product['Quantity']])->backgroundcolor("rgb(153, 102, 255)")->color("rgb(153, 102, 255)");
        }
        $products = Product::query()->paginate(10);
        return view('admin.Reports.product',compact('products'))->with(['productchart'=>$productchart]);
    }


}
