<?php
namespace App\Http\Controllers\Reports;
use App\Charts\ExpenseChart;
use App\Http\Controllers\AppBaseController;
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
        $expenses = $this->expenseRepository->paginate(10);


        return view('admin.Reports.expenses')->with(['expensechart'=>$Expensechart,'expenses',$expenses]);
    }

}
