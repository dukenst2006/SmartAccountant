<?php

namespace App\Http\Controllers\Reports;
use App\Charts\ProductChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Product;
use App\Repositories\Admin\EmployeeRepository;
use App\Repositories\InvoiceRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Integer;

class ProductMovementReportController extends AppBaseController
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


        return view('product_movements.index');
    }


}
