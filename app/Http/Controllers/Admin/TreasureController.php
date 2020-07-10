<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Expense;
use App\Models\Invoice;
use App\Models\Marketplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreasureController extends Controller
{
    public function index(){
        $markets = Marketplace::query()->paginate(7);

        $invoices = Invoice::all();

        $expenses = Expense::all();

        return view('admin.treasure.index',compact('markets','invoices','expenses'));
    }
}
