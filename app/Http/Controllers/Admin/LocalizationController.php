<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index()
    {

        if (request()->Language == "en") {
            Session::put('locale', request()->Language);
        } elseif (request()->Language == "ar") {
            Session::put('locale', request()->Language);
        }

        //dd(request()->Language);

       // return redirect()->back();

    }
}
