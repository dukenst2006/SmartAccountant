<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;

class MarketplacesReportController extends AppBaseController
{

    public function __construct()
    {

    }

    public function index()
    {


        $productchart = new ProductChart ;
        $productchart->labels(['pr1','pr1','pr1','pr1','pr1','pr1','pr1',]);
        $productchart->dataset('المنتجات', 'bar',[10000, 9000,8000,7000,6000,5000,4000,3000,2000,1000])->backgroundcolor("rgb(153, 102, 255)")->color("rgb(153, 102, 255)");

        return view('admin.Reports.marketplaces')->with(['productchart'=>$productchart]);
    }


}
