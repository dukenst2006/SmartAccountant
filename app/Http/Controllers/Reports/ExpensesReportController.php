<?php
namespace App\Http\Controllers\Reports;
use App\Charts\ExpenseChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Expense;
use App\Repositories\Admin\ExpenseRepository;

class ExpensesReportController extends AppBaseController
{
    private $expenseRepository;
    /** @var  ExpenseRepository */
    private $userRepository;


    public function __construct(ExpenseRepository $expenseRepo)
    {
        $this->expenseRepository = $expenseRepo;
    }
    public function index()
    {


        $Expensechart = new ExpenseChart() ;
        $expenses = $this->expenseRepository->all()->take(40);

        $Expensechart->labels(['18th', '20th', '22nd', '24th', '26th', '28th', '30th']);

            $Expensechart->dataset('حركه المصروفات', 'line',$expenses->pluck('Price'))->color("rgb(153, 102, 255)")->backgroundcolor("rgb(255, 99, 132)");
        $from   = $_GET['from'] ?? null;
        $to     = $_GET['to'] ?? null;
        $marketID     = $_GET['MarketPlaceID'] ?? null;
        $expensesTable = Expense::query()->where('MarketplaceID',$marketID == null ?'like':'=',$marketID == null ?'%%':$_GET['MarketPlaceID'])
            ->where('Date','>=',$from == null? '1970/12/12':$from)
            ->where('Date','<=',$to == null? '3000/12/12':$to)->paginate(10);
        return view('admin.Reports.expenses',compact('expensesTable'))->with(['expensechart'=>$Expensechart,'expenses',$expenses]);
    }

}
