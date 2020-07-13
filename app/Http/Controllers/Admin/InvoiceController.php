<?php

namespace App\Http\Controllers;

use App\DataTables\InvoiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Repositories\InvoiceRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */
    private $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }




    public  function sale(){

        return view('admin.Invoices.createSale')->with(['paymenttypes'=>$this->invoiceRepository->GetDataForSelect('payment_types')]);
    }

    public  function StoreSaleInvoice( ) {

        $input = request()->all();



        return auth()->user()->id;



    }

    public  function raw(){
        return view('admin.Invoices.createRaw');
    }
}
