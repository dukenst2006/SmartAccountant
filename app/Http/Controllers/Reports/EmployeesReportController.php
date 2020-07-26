<?php

namespace App\Http\Controllers\Reports;
use App\Charts\EmployeeChart;
use App\Http\Controllers\AppBaseController;
use App\Models\Employee;
use App\Repositories\EmployeeRepository;

class EmployeesReportController extends AppBaseController
{
    private $employeeRepository;
    /** @var  EmployeeRepository */



    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepository = $employeeRepo;
    }
    public function index()
    {
        $employeechart = new  EmployeeChart();
       $employees=  $this->employeeRepository->all()->take(10);


        $employeechart->labels($employees->pluck('user.Name'));
        $employeechart->dataset('الموظفين', 'bar',[16000, 20000,30000,40000,50000,10000,30000,40000,70000,60000,65000,85000])->backgroundcolor("rgb(236, 201, 75)")->color("rgb(236, 201, 75)");

        //
        $from = $_GET['from'] == null ? '1970/12/12' : $_GET['from'] ;
        $to   = $_GET['to']   == null ? '3000/12/12' : $_GET['to']   ;
        $market  = $_GET['marketID'] ?? null;
        $employeesTable = Employee::all()->where('created_at','>=',$from)
            ->where('created_at','<=',$to);
        if ($market > 0){
            $employeesTable = Employee::all()->where('created_at','>=',$from)
                ->where('created_at','<=',$to)
                ->where('MarketPlaceID','=',$market);
        }
        return view('admin.Reports.employees',compact('employeechart','employeesTable'));
    }

}
