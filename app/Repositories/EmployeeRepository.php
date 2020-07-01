<?php


namespace App\Repositories;


use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Marketplace;

class EmployeeRepository implements EmployeeRepositoryInterface
{


    public function All()
    {
      return Employee::all();
    }

    public function Stoned()
    {
        return  Employee::all()->where('status','stoned');
    }

    public function Active()
    {
        return  Employee::all()->where('status','active');
    }


    public function GetEmployeeByMarketplace($MarketplaceID)
    {

        $marketplace =  Marketplace::query()->find($MarketplaceID);
        $emps = $marketplace->employees;
        return view('admin.employees.index',compact('emps','brench'));
    }


}
