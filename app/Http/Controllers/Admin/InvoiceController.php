<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\InvoiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Invoice;
use App\Repositories\{
    InvoiceRepository,
    ProductRepository,
    EmployeeRepository
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

    public function saleInvoicesIndex()
    {
        $sale_invoices = $this->invoiceRepository->getAllInvoicesWhere(false)->get();
        return view('admin.Invoices.sale_invoices_index', compact('sale_invoices'));   
    }

    public function showsaleInvoicesDetails(Invoice $invoice)
    {
        return view('admin.Invoices.receipt', compact('invoice'));
    }

    public function showRawInvoices()
    {
        $rawInvoices = $this->invoiceRepository->getAllRawInvoices()->get();
        return view('admin.Invoices.index', compact('rawInvoices'));
    }


    public  function sale(){

        return view('admin.Invoices.createSale')
            ->with(['payment_types'=>$this->invoiceRepository->GetDataForSelect('payment_types'),
                    'products'=> $this->productRepository->GetTop10InWarehouse()
            ]);
    }

    public function StoreSaleInvoice()
    {
        $this->invoiceRepository->createNewSaleInvoice(request()->all());

        return response()->json(['success' => 'Sale Invoice Stored Successfully'], 200);
    }

    public  function raw(){
        $marketplaces = $this->employeeRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');
        $payment_types = $this->invoiceRepository->GetDataForSelect('payment_types');
        return view('admin.Invoices.createRaw', compact('marketplaces', 'payment_types'));
    }

    public function StoreRawInvoice()
    {
        $this->invoiceRepository->createNewRawInvoice(request()->all());

        alert()->success('Raw Invoice Stored Successfully');

        return redirect(route('admin.invoice.invoicerawall'));
    }

    public function deleterRawInvoice($id)
    {
        $this->invoiceRepository->deleteRawInvoice($id);

        alert()->success('Raw Invoice Stored Successfully');

        return redirect(route('admin.invoice.invoicerawall'));
    }
}
