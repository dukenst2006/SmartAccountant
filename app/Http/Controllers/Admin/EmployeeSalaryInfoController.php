<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateEmployeeSalaryInfoRequest;
use App\Http\Requests\UpdateEmployeeSalaryInfoRequest;
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

}
