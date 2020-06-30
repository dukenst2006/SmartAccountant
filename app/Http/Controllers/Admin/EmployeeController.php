<?php

namespace App\Http\Controllers\Admin;

use App\Brench;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Employee::all();
        return view('admin.employees.index',compact('emps'));
    }
    public function stoned()
    {
        $emps = Employee::all()->where('status','stoned');
        return view('admin.employees.index',compact('emps'));
    }
    public function active()
    {
        $emps = Employee::all()->where('status','active');
        return view('admin.employees.index',compact('emps'));
    }
    public function byBrench(Request $request)
    {
        $brench = Brench::find($request->get('brench_id'));
        $emps = $brench->employees;
        return view('admin.employees.index',compact('emps','brench'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
            'image' =>'required',
            'nation' =>'required',
            'job' =>'required',
            'identity_number' =>'required',
            'identity_img' =>'required',
            'contract_img' =>'required',
            'phone' =>'required',
            'bank_account' =>'required',
            'sex' =>'required',
            'salary' =>'required',
            'brench_id' =>'required',
        ]);
        if ($request->hasFile('image')){
            $data['image'] = Storage::disk('public')
                ->putFile('images',$request->file('image'));
        }
        if ($request->hasFile('identity_img')){
            $data['identity_img'] = Storage::disk('public')
                ->putFile('images',$request->file('identity_img'));
        }
        if ($request->hasFile('contract_img')){
            $data['contract_img'] = Storage::disk('public')
                ->putFile('images',$request->file('contract_img'));
        }
        $employee = Employee::create($data);
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
    public function edit(Employee $employee)
    {
        return view('admin.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $request->except('_token','_method');
        if ($request->hasFile('image')){
            $data['image'] = Storage::disk('public')
                ->putFile('images',$request->file('image'));
        }
        if ($request->hasFile('identity_img')){
            $data['identity_img'] = Storage::disk('public')
                ->putFile('images',$request->file('identity_img'));
        }
        if ($request->hasFile('contract_img')){
            $data['contract_img'] = Storage::disk('public')
                ->putFile('images',$request->file('contract_img'));
        }
        $employee->update($data);
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
        $employee->delete();
        return Redirect::route('admin.employees.index');
    }
    public function stoning(Employee $employee)
    {
        $employee->status = "stoned";
        $employee->save();
        return Redirect::back();
    }
    public function activating(Employee $employee)
    {
        $employee->status = "active";
        $employee->save();
        return Redirect::back();
    }
}
