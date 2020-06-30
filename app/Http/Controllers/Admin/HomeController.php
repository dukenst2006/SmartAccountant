<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\Http\Controllers\Controller;
use App\Http\Resources\BillResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        $rest = 0;
        $lose = 0;
        foreach ($bills as $b){
            $temp = 0;
            $temp = $b->paid - $b->products->sum('buying_price');
            $rest += $temp > 0 ? $temp : 0;
            $lose += $temp < 0 ? abs($temp) : 0;
        }
        return view('admin.home',compact('rest','lose'));
    }
}
