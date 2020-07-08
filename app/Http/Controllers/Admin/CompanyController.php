<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CompanyDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Repositories\CompanyRepository;
use Flash;
use Response;

class CompanyController extends AppBaseController
{
    /** @var  CompanyRepository */
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepository = $companyRepo;
    }

    /**
     * Display a listing of the Company.
     *
     * @param CompanyDataTable $companyDataTable
     * @return Response
     */
    public function index(CompanyDataTable $companyDataTable)
    {
        return $companyDataTable->render('admin.companies.index');
    }

    /**
     * Show the form for creating a new Company.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param CreateCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $input = $request->all();

        $company = $this->companyRepository->create($input);
        $company->UserID=auth()->user()->id;

        Flash::success(__('messages.saved', ['model' => __('models/companies.singular')]));

        return redirect(route('admin.companies.index'));
    }

    /**
     * Display the specified Company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error(__('models/companies.singular').' '.__('messages.not_found'));

            return redirect(route('admin.companies.index'));
        }

        return view('admin.companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified Company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error(__('messages.not_found', ['model' => __('models/companies.singular')]));

            return redirect(route('admin.companies.index'));
        }

        return view('admin.companies.edit')->with('company', $company);
    }

    /**
     * Update the specified Company in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyRequest $request)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error(__('messages.not_found', ['model' => __('models/companies.singular')]));

            return redirect(route('admin.companies.index'));
        }

        $company = $this->companyRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/companies.singular')]));

        return redirect(route('admin.companies.index'));
    }

    /**
     * Remove the specified Company from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error(__('messages.not_found', ['model' => __('models/companies.singular')]));

            return redirect(route('admin.companies.index'));
        }

        $this->companyRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/companies.singular')]));

        return redirect(route('admin.companies.index'));
    }
}
