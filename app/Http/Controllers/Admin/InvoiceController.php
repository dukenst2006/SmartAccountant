<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\InvoiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Repositories\{
    InvoiceRepository,
    ProductRepository,
    Admin\EmployeeRepository
};

class InvoiceController extends AppBaseController
{
    /**
     * @var  InvoiceRepository
     */
    private $invoiceRepository;

    /**
     * @var  ProductRepository
     */

    private $productRepository;

    /**
     * @var  RawInvoiceRepository
    */
    private $employeeRepository;

    public function __construct(InvoiceRepository $invoiceRepo ,  ProductRepository $productRepo, EmployeeRepository $employeeRepository)
    {
        $this->invoiceRepository = $invoiceRepo;
        $this->productRepository = $productRepo;
        $this->employeeRepository = $employeeRepository;
    }




    public  function sale(){

        return view('admin.Invoices.createSale')
            ->with(['paymenttypes'=>$this->invoiceRepository->GetDataForSelect('payment_types'),
                    'products'=> $this->productRepository->GetTop10InWarehouse()
            ]);
    }

    public function StoreSaleInvoice()
    {

        $input = request()->all();

        return auth()->user()->id;
    }

    public  function raw(){
        $marketplaces = $this->employeeRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');
        $payment_types = $this->invoiceRepository->GetDataForSelect('payment_types');
        
        return view('admin.Invoices.createRaw', compact('marketplaces', 'payment_types'));
    }

    public  function StoreRawInvoice()
    {
        
        $this->invoiceRepository->createNewRawInvoice(request()->all());

        alert()->success('Raw Invoice Stored Successfully');

        return back();
    }
}
