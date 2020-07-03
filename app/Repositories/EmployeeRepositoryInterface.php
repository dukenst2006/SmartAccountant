<?php


namespace App\Repositories;


use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;


interface EmployeeRepositoryInterface
{

    public function All();  //Getting All Employees
    public function Stoned();//all employees stoned
    public function Active();//all employees activated
    public function GetEmployeeStatics();
    public function Create(EmployeeRequest $request);
    public function Update(Employee $employee,Request $request);
    public function StoneEmployee(Employee $emp);
    public function ActiveEmployee(Employee $emp);
}
