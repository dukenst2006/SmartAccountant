<?php

namespace App\Http\Controllers\Admin;

use App\EmployeeSalary;
use App\Http\Controllers\Controller;
use App\Models\Marketplace;
use App\Repositories\EmployeeSalaryRepository;
use Illuminate\Http\Request;
class EmployeeSalaryController extends Controller
{
    protected $SalaryRepository;
    public function __construct(EmployeeSalaryRepository $employeeSalaryRepository)
    {
        $this->SalaryRepository = $employeeSalaryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EmployeeSalaries = EmployeeSalary::all();
        $MarketPlaces  = $this->SalaryRepository->GetDataForSelect('marketplaces');
        return view('admin.employee_salaries.index',compact('MarketPlaces','EmployeeSalaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $input['File']  =   $this->SalaryRepository->StoreFile($request->file('File'),'');
        if (strtoupper($request->file('File')->extension()) == "PDF"){
            $input['IsPDF'] = 1;
        }else{
            $input['IsPDF'] = 0;
        }
        $this->SalaryRepository->create($input);
        alert('','تم الاضافة','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function show($employeeSalary)
    {
        $salary = EmployeeSalary::query()->find($employeeSalary);
        return response()->file('storage/'.$salary->File);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy($employeeSalary)
    {
        $salary = EmployeeSalary::find($employeeSalary);
        $salary->delete();
        alert('','تم','success');
        return redirect()->back();
    }
}
