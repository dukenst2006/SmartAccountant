<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Invoice;
use App\Models\Marketplace;
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


// Last Year

// LastMonth
        $marketplaces=  $this->invoiceRepository->GetOwnerMarketplaces();

        $invoices =  Invoice::whereIn('MarketplacesID' , $marketplaces->pluck('id'))->where('IsRaw',false)
            ->whereYear('created_at', '=', now()->year)
            ->whereMonth('created_at', '=', now()->month)->get();
             $invoices->sum('Total');

        $chart = new ProductChart ;
       $chart->labels(['18th', '20th', '22nd', '24th', '26th', '28th', '30th']);



       foreach ($marketplaces as $marketplace)
        $chart->dataset($marketplace->Name, 'line',[100, 120, 170, 167, 180, 177, 160])->color("rgb(153, 102, 255)");

     //   $chart->dataset('2', 'line',[60, 80, 70, 67, 80, 77, 100])->color("rgb(153, 100, 255)");
        $from = ($_GET['from'] ?? null) == null ? '1970/12/12' : $_GET['from'] ;
        $to   = ($_GET['to'] ?? null)   == null ? '3000/12/12' : $_GET['to']   ;
        $marketplaceID = ($_GET['MarketPlaceID'] ?? null) == null?0:$_GET['MarketPlaceID'];
        $invoices = Invoice::query()->where('created_at','<=',$to)
            ->where('created_at','>=',$from)->paginate(10);
        if ($marketplaceID > 0){
            $invoices = Invoice::query()->where('created_at','<=',$to)
                ->where('created_at','>=',$from)
                ->where('MarketPlaceID','=',$marketplaceID)
                ->paginate(10);
        }
        return view('admin.Reports.marketplaces',compact('invoices'))->with(['chart'=>$chart]);
    }


}
