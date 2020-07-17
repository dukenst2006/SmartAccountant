<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Invoice;
use App\Models\MarketplaceOwner;
use App\Repositories\InvoiceRepository;

class MarketplacesReportController extends AppBaseController
{
    private $invoiceRepository;
    /** @var  InvoiceRepository */



    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    public function index()
    {

        $marketplaces=  $this->invoiceRepository->GetOwnerMarketplaces();

        $invoices =  Invoice::whereIn('MarketplacesID' , $marketplaces->pluck('id'))->where('IsRaw',false)->get();
             $invoices->sum('Total');

        $chart = new ProductChart ;
        $chart->labels(['pr1','pr1','pr1','pr1','pr1','pr1','pr1',]);
        $chart->dataset('المنتجات', 'line',[10000, 9000,8000,7000,6000,5000,4000,3000,2000,1000])->backgroundcolor("rgba(0, 0, 0, 0.1)")->color("rgb(153, 102, 255)")->fill(false);


        return view('admin.Reports.marketplaces')->with(['chart'=>$chart]);
    }


}
