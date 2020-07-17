<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Models\Marketplace;
use App\Models\PaymentType;
use App\Repositories\Admin\AxiosRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AxiosRequestController extends Controller
{
    protected $repository;
    public function __construct(AxiosRepository $baseRepository)
    {
        $this->repository = $baseRepository;
    }
    public function GetAllMarketPlaces(){
        $markets = $this->repository->GetDataForSelect('marketplaces');
        return $markets;
    }
    public function GetInvoices(Request $request){
        $marketplace = Marketplace::query()->find($request->get('ID'));
        return InvoiceResource::collection($marketplace->invoices
            ->where('created_at','<',$request['to'])
            ->where('created_at','>',$request['from']));
//
    }
    public function LastInvoiceNow(Request $request){
        $invoices = Invoice::all()->sortDesc();
        $paymentTypes = PaymentType::all();
        $counter = 0;
        $invs = array();
        foreach ($paymentTypes as $p){
            foreach ($invoices as $i){
                if (Carbon::parse($i->created_at)->diffInHours()  < 2 && $i->MarketplaceID == $request['ID']&& $p->id == $i->PaymentTypeID){
                    $invs[$counter] = $i;
                    $counter++;
                    break;
                }
            }
        }
        return InvoiceResource::collection($invs);
    }
    public function LastInvoice(Request $request){
        $invoices = Invoice::all()->sortDesc();
        $paymentTypes = PaymentType::all();
        $counter = 0;
        $invs = array();
        foreach ($paymentTypes as $p){
            foreach ($invoices as $i){
                if ($i->created_at->format('d') + 1 ==  Carbon::now()->format('d') && $i->MarketplaceID == $request->get('ID') && $p->id == $i->PaymentTypeID){
                    $invs[$counter] = $i;
                    $counter++;
                    break;
                }
            }
        }
        return InvoiceResource::collection($invs);
    }
}
