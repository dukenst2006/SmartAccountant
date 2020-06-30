<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\Http\Controllers\Controller;
use App\Http\Resources\BillResource;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index(){
        return view('admin.money.index');
    }
    public function get(Request $request){
        $from       = $request->get('from');
        $to         = $request->get('to');
        $branch     = $request->get('branch');
        if ($branch == "all"){
            $bills  = Bill::all()
                ->where('created_at','>',Carbon::parse($from))
                ->where('created_at','<',Carbon::parse($to));
        }else{
            $bills  = Bill::all()
                ->where('created_at','>',Carbon::parse($from))
                ->where('created_at','<',Carbon::parse($to))
                ->where('brench_id','=',$branch);
        }
        return BillResource::collection($bills);
    }
}
