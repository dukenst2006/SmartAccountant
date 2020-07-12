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


class FinicalReportsController extends AppBaseController
{

    public function __construct()
    {

    }

    public  function index(){
        return view('admin.Reports.product');
    }



}
