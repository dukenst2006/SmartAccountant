<?php

namespace App\Http\Controllers\Reports;
use App\Http\Controllers\AppBaseController;

class BondsReportController extends AppBaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('admin.Reports.product');
    }

}
