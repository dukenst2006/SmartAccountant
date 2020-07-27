<?php

namespace App\Http\Controllers\Admin;

use App\Charts\DashboardChart;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Expense;
use App\Models\Invoice;
use App\Models\Marketplace;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {

        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];


        $usersChart = new  DashboardChart;
        $settings = auth()->user()->settings;
        $totalPaid = Invoice::query()->sum('Paid');
        $gains  =   Expense::query()->sum('Price') - Invoice::query()->sum('Paid');
        $lose  =   Expense::query()->sum('Price') - Invoice::query()->sum('Paid') ;
        $lose  =   Expense::query()->sum('Price') - Invoice::query()->sum('Paid') ;
        $markets = Marketplace::count();
        $employees = Employee::count();
        $products = Product::count();

        $usersChart->labels(['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر']);
        $usersChart->dataset('المبيعات', 'bar',[16000, 20000,30000,40000,50000,10000,30000,40000,70000,60000,65000,85000])->backgroundcolor("rgb(236, 201, 75)")->color("rgb(236, 201, 75)");
        $usersChart->dataset('حركات المخزن',  'bar',[11000, 8000,5000,6000,8000,10000,12000,20000,30000,15000,10000,50000])->backgroundcolor("rgb(66, 153, 225)")->color("rgb(66, 153, 225)");
        $usersChart->dataset('الخسائر',  'bar',[800, 12000,13000,14000,18000,19000,20000,25000,26000,8000,7000,6000])->backgroundcolor("rgb(225, 0, 38)")->color("rgb(225, 0, 38)");


        return view('admin.home',compact('usersChart','settings','totalPaid','gains','lose','markets','employees','products'));

    }
}
