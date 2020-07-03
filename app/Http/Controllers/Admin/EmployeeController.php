<?php

namespace App\Http\Controllers\Admin;

use App\Brench;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Marketplace;
use App\Models\MarketplaceOwner;
use App\Repositories\EmployeeRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{

protected $employeerepository;
    public function __construct(EmployeeRepositoryInterface $employeerepository)
    {
       $this->employeerepository= $employeerepository;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

       $emps= $this->employeerepository->All();



        return view('admin.employees.index',compact('emps'));
    }
    public function stoned()
    {
        $emps = $this->employeerepository->Stoned();
        return view('admin.employees.index',compact('emps'));
    }
    public function active()
    {
        $emps = $this->employeerepository->Active();
        return view('admin.employees.index',compact('emps'));
    }
//    public function byBrench(Request $request)
//    {
//
//        return view('admin.employees.index',compact('emps','brench'));
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MarketPlaces = Marketplace::all();
        $MarketPlaceOwners = MarketplaceOwner::all();
        return view('admin.employees.create',compact('MarketPlaces','MarketPlaceOwners'));
    }

    /**
    * Store a newly created resource in storage.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    */

    public function store(EmployeeRequest $request)
    {
        $this->employeerepository->Create($request);
        return Redirect::route('admin.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($empid)
    {
        $employee = Employee::query()->find($empid);
        return view('admin.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $employee)
    {
        $emp = Employee::query()->find($employee);
        $this->employeerepository->Update($emp,$request);
        return Redirect::route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Employee $employee)
    {
        $employee->query()->delete();
        return Redirect::route('admin.employees.index');
    }
    public function stoning(Employee $employee)
    {
        $this->employeerepository->StoneEmployee($employee);
        return Redirect::back();
    }
    public function activating(Employee $employee)
    {
        $this->employeerepository->ActiveEmployee($employee);
        return Redirect::back();
    }
}
