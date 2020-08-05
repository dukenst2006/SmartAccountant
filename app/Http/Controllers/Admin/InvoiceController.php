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
    EmployeeRepository,
    ProductCategory
};
class InvoiceController extends AppBaseController
{


    //'<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('INVOICE ID ', 'C39+',3,50) . '" alt="barcode"   />'

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
        $ProductCategory = \App\Models\ProductCategory::query()->with(['productSubCategories', 'productSubCategories.products', 'products'])->where("MarketplaceOwnerID", $this->productRepository->GetMyOwner())->where("favourite",true)->get();
        return view('admin.Invoices.createSale')
            ->with(['payment_types'=>$this->invoiceRepository->GetDataForSelect('payment_types'),
                    'products'=> $this->productRepository->GetTop10InWarehouse(),
                    'ProductCategory' => $ProductCategory
            ]);
    }

    public function StoreSaleInvoice()
    {
        $this->invoiceRepository->createNewSaleInvoice(request()->all());

        return response()->json(['success' => 'Sale Invoice Stored Successfully'], 200);
    }


    public function editSaleInvoice($id)
    {
        $invoice = $this->invoiceRepository->find($id);
        return view('admin.Invoices.createSale')
            ->with(['payment_types'=>$this->invoiceRepository->GetDataForSelect('payment_types'),
                    'products'=> $this->productRepository->GetTop10InWarehouse(),
                    'invoice' => $invoice
            ]);
    }

    public function updateSaleInvoice(int $id)
    {
        $rawInvoice = $this->invoiceRepository->find($id);

        if(empty($rawInvoice)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suppliers.singular')]));
            return redirect(route('admin.suppliers.index'));
        }

        $rawInvoice = $this->invoiceRepository->update(request()->all(), $id);

        Flash::success(__('messages.saved', ['model' => __('Models/SupplierInvoices.CraeteNewSupplierInvoice')]));

        return redirect(route('admin.invoice.invoicerawall'));
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

    public function rawInvoicesShow(Invoice $invoice)
    {
        return view('admin.Invoices.show_raw_invoice_details', compact('invoice'));
    }

    public function editRawInvoice($id)
    {
        $marketplaces = $this->employeeRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');
        $payment_types = $this->invoiceRepository->GetDataForSelect('payment_types');
        $invoice = $this->invoiceRepository->find($id);
        return view('admin.Invoices.edit_raw_invoice', compact('invoice', 'marketplaces', 'payment_types'));

    }

    public function updateRawInvoice(int $id)
    {
        $rawInvoice = $this->invoiceRepository->find($id);

        if(empty($rawInvoice)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suppliers.singular')]));
            return redirect(route('admin.suppliers.index'));
        }

        $rawInvoice = $this->invoiceRepository->update(request()->all(), $id);

        Flash::success(__('messages.saved', ['model' => __('Models/SupplierInvoices.CraeteNewSupplierInvoice')]));

        return redirect(route('admin.invoice.invoicerawall'));
    }

    public function deleterRawInvoice($id)
    {
        $this->invoiceRepository->deleteRawInvoice($id);

        alert()->success('Raw Invoice Stored Successfully');

        return redirect(route('admin.invoice.invoicerawall'));
    }

    public function deleterSaleInvoice($id)
    {
        $this->invoiceRepository->delete($id);

        alert()->success('Sale Invoice Stored Successfully');

        return redirect(route('admin.invoice.all'));
    }
}
