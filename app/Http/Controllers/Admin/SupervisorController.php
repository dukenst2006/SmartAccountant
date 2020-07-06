<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SupervisorDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSupervisorRequest;
use App\Http\Requests\Admin\UpdateSupervisorRequest;
use App\Repositories\Admin\SupervisorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SupervisorController extends AppBaseController
{
    /** @var  SupervisorRepository */
    private $supervisorRepository;

    public function __construct(SupervisorRepository $supervisorRepo)
    {
        $this->supervisorRepository = $supervisorRepo;
    }

    /**
     * Display a listing of the Supervisor.
     *
     * @param SupervisorDataTable $supervisorDataTable
     * @return Response
     */
    public function index(SupervisorDataTable $supervisorDataTable)
    {
        return $supervisorDataTable->render('admin.supervisors.index');
    }

    /**
     * Show the form for creating a new Supervisor.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.supervisors.create');
    }

    /**
     * Store a newly created Supervisor in storage.
     *
     * @param CreateSupervisorRequest $request
     *
     * @return Response
     */
    public function store(CreateSupervisorRequest $request)
    {
        $input = $request->all();

        $supervisor = $this->supervisorRepository->create($input);

        Flash::success('Supervisor saved successfully.');

        return redirect(route('admin.supervisors.index'));
    }

    /**
     * Display the specified Supervisor.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $supervisor = $this->supervisorRepository->find($ID );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        return view('admin.supervisors.show')->with('supervisor', $supervisor);
    }

    /**
     * Show the form for editing the specified Supervisor.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $supervisor = $this->supervisorRepository->find($ID );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        return view('admin.supervisors.edit')->with('supervisor', $supervisor);
    }

    /**
     * Update the specified Supervisor in storage.
     *
     * @param  int              $ID
     * @param UpdateSupervisorRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateSupervisorRequest $request)
    {
        $supervisor = $this->supervisorRepository->find($ID );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        $supervisor = $this->supervisorRepository->update($request->all(), $ID );

        Flash::success('Supervisor updated successfully.');

        return redirect(route('admin.supervisors.index'));
    }

    /**
     * Remove the specified Supervisor from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $supervisor = $this->supervisorRepository->find($ID );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        $this->supervisorRepository->delete($ID );

        Flash::success('Supervisor deleted successfully.');

        return redirect(route('admin.supervisors.index'));
    }
}
