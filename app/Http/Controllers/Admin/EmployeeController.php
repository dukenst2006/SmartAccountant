<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\EmployeeDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateEmployeeRequest;
use App\Http\Requests\Admin\UpdateEmployeeRequest;
use App\Models\Admin\Marketplace;
use App\Models\MarketplaceOwner;
use App\Repositories\Admin\EmployeeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

class EmployeeController extends AppBaseController
{
    /** @var  EmployeeRepository */
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepository = $employeeRepo;
    }

    /**
     * Display a listing of the Employee.
     *
     * @param EmployeeDataTable $employeeDataTable
     * @return Response
     */
    public function index(EmployeeDataTable $employeeDataTable)
    {
        return $employeeDataTable->render('admin.employees.index');
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        $marketplaces = $this->employeeRepository->GetDataForSelect('marketplaces');
        $marketplace_owners = $this->employeeRepository->GetAllMarketPlaceOwners();
        return view('admin.employees.create',compact('marketplaces','marketplace_owners'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();
        $input['UserID']   = 1;
        $input['ProfileImage'] = $this->employeeRepository->StoreFile($request->file('ProfileImage'),'');
        $input['IdentityImage'] = $this->employeeRepository->StoreFile($request->file('IdentityImage'),'');
        $input['EmploymentContractImage'] = $this->employeeRepository->StoreFile($request->file('EmploymentContractImage'),'');

        $employee = $this->employeeRepository->create($input);

        Flash::success('Employee saved successfully.');

        return redirect(route('admin.employees.index'));
    }

    /**
     * Display the specified Employee.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $employee = $this->employeeRepository->find($ID );

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('admin.employees.index'));
        }

        return view('admin.employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $employee = $this->employeeRepository->find($ID );

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('admin.employees.index'));
        }

        return view('admin.employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  int              $ID
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateEmployeeRequest $request)
    {
        $employee = $this->employeeRepository->find($ID );
        $input = $request->all();
        $input['ProfileImage'] = $this->employeeRepository
            ->StoreFile($request->file('ProfileImage'),$employee['ProfileImage']);
        $input['IdentityImage'] = $this->employeeRepository
            ->StoreFile($request->file('IdentityImage'),$employee['IdentityImage']);
        $input['EmploymentContractImage'] = $this->employeeRepository
            ->StoreFile($request->file('EmploymentContractImage'),$employee['EmploymentContractImage']);
        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('admin.employees.index'));
        }

        $employee = $this->employeeRepository->update($input, $ID );

        Flash::success('Employee updated successfully.');

        return redirect(route('admin.employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $employee = $this->employeeRepository->find($ID );

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('admin.employees.index'));
        }

        $this->employeeRepository->delete($ID );

        Flash::success('Employee deleted successfully.');

        return redirect(route('admin.employees.index'));
    }

}
