<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\EmployeeRepository;
use App\Repositories\InvoiceRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;

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

      dd( $this->invoiceRepository
                ->allQuery()->with('invoiceItems')
                ->whereYear('created_at', '=', now()->year)
                ->whereMonth('created_at', '=', now()->month)
                ->get()->pluck('invoiceItems')->flatten()->groupBy('ProductID')->flatMap(function ($items) {

              $quantity = $items->sum('Quantity');

              return $items->map(function ($item) use ($quantity) {

                  $item->quantity = $quantity;

                  return $item;

              });

          }));

//
//    whereYear('created_at', '=', $year)
//        ->whereMonth('created_at', '=', $month)
//


        $productchart = new ProductChart ;
        $productchart->labels(['pr1','pr1','pr1','pr1','pr1','pr1','pr1',]);
        $productchart->dataset('المنتجات', 'bar',[10000, 9000,8000,7000,6000,5000,4000,3000,2000,1000])->backgroundcolor("rgb(153, 102, 255)")->color("rgb(153, 102, 255)");

        return view('admin.Reports.product')->with(['productchart'=>$productchart]);
    }


}
