<?php

namespace App\Http\Controllers\Admin;

use Flash;
use App\Http\Controllers\AppBaseController;
use Response;


class BondsController extends AppBaseController
{


    public function BondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }




    public function CreateBondVoucher()
    {

        return view('admin.Bonds.createbondvoucher');

    }

    public function storebondvoucher()
    {

dd(request());

    }
}
