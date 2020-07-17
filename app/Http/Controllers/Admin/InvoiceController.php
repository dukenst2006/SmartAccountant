<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\InvoiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Repositories\InvoiceRepository;
use App\Repositories\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */
    private $invoiceRepository;
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(InvoiceRepository $invoiceRepo ,  ProductRepository $productRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
        $this->productRepository = $productRepo;
    }




    public  function sale(){

        return view('admin.Invoices.createSale')
            ->with(['paymenttypes'=>$this->invoiceRepository->GetDataForSelect('payment_types'),
                    'products'=> $this->productRepository->GetTop10InWarehouse()
            ]);
    }

    public  function StoreSaleInvoice( ) {

        $input = request()->all();



        return auth()->user()->id;



    }

    public  function raw(){
        return view('admin.Invoices.createRaw');
    }
}
