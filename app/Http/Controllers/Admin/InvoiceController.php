<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\EmployeeDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateEmployeeRequest;
use App\Http\Requests\Admin\UpdateEmployeeRequest;
use App\Models\Marketplace;
use \App\Models\MarketplaceOwner;
use App\Repositories\Admin\EmployeeRepository;
use App\Repositories\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

class InvoiceController extends AppBaseController
{
    public  function sale(){
        return view('admin.Invoices.createSale');
    }

    public  function raw(){
        return view('admin.Invoices.createRaw');
    }
}
