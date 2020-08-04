<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateEmployeeSalaryInfoRequest;
use App\Http\Requests\UpdateEmployeeSalaryInfoRequest;
use App\Models\EmployeeSalaryInfo;
use App\Repositories\EmployeeSalaryInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmployeeSalaryInfoController extends AppBaseController
{
    /** @var  EmployeeSalaryInfoRepository */
    private $employeeSalaryInfoRepository;

    public function __construct(EmployeeSalaryInfoRepository $employeeSalaryInfoRepo)
    {
        $this->employeeSalaryInfoRepository = $employeeSalaryInfoRepo;
    }

    /**
     * Display a listing of the EmployeeSalaryInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeeSalaryInfos = $this->employeeSalaryInfoRepository->all();

        return view('admin.employee_salary_infos.index')
            ->with('employeeSalaryInfos', $employeeSalaryInfos);

    }
    public function store(Request $request){
        $request->validate([
            'Description'   =>  'required',
        ]);
        $input = $request->except('_token');
        $empSal = new EmployeeSalaryInfo($input);
        $empSal->save();
        alert('',__('Success'),'success');
        return redirect()->back();
    }
    public function update(Request $request,EmployeeSalaryInfo $employeeSalaryInfo){
        $request->validate([
            'Description'   =>  'required',
        ]);
        $input = $request->except('_token','_method');
        $employeeSalaryInfo->update($input);
        alert('',__('Success'),'success');
        return redirect()->back();
    }
    public function destroy(EmployeeSalaryInfo $employeeSalaryInfo){
        $employeeSalaryInfo->delete();
        alert('',__('Success'),'success');
        return redirect()->back();
    }
    public function edit(EmployeeSalaryInfo $employeeSalaryInfo){
        return view('admin.employee_salary_infos.edit',compact('employeeSalaryInfo'));
    }


    public function updatePresenceAndDevotion(Request $request,EmployeeSalaryInfo $employeeSalaryInfo){

        if($employeeSalaryInfo->created_at->addHour(8) > \Carbon\Carbon::now()) {
            return response()->json([
                'status' => 400,
                'success' => false,
                'message' => 'انهت المدة الخاصة بتعديل غياب الموظف'
            ], 200);
        }


        if($request->PresenceAndDevotion != 'Present') {
            $this->calcEmployeeSalaryAfterDiscount($request, $employeeSalaryInfo->employee);
        }

        $input = $request->except('_token','_method');
        $employeeSalaryInfo->update($input);

        return response()->json([
            'status' => 200,
            'success' => true,
            'message' => 'تم التعديل بنجاح'
        ], 200);
    }

    private function calcEmployeeSalaryAfterDiscount($request, $employee)
    {
        $AbsenceDiscount = auth()->user()->settings;
        $employeeSalary = $employee->Salary;

        if($request->PresenceAndDevotion == 'Late') {
            if($AbsenceDiscount->AbsenceDiscountType == 'Value') {
                $employee->update([
                    'Salary' => $employeeSalary - $AbsenceDiscount->AbsenceDiscountValue 
                ]);
            }

            if($AbsenceDiscount->AbsenceDiscountType == 'Rate') {
                $employee->update([
                    'Salary' => ($AbsenceDiscount->AbsenceDiscountValue/100) - $employeeSalary
                ]);
            }

            return true;
        }

        if($request->PresenceAndDevotion == 'Late') {
            if($AbsenceDiscount->AbsenceDiscountType == 'Value') {
                $employee->update([
                    'Salary' => $employeeSalary - ($AbsenceDiscount->AbsenceDiscountValue/2) 
                ]);
            }

            if($AbsenceDiscount->AbsenceDiscountType == 'Rate') {
                $employee->update([
                    'Salary' => (($AbsenceDiscount->AbsenceDiscountValue/2)/100) - $employeeSalary
                ]);
            }

            return true;
        }
    }
}
