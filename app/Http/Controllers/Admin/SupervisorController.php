<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SupervisorDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSupervisorRequest;
use App\Http\Requests\Admin\UpdateSupervisorRequest;
use App\Repositories\Admin\SupervisorRepository;
use App\Repositories\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SupervisorController extends AppBaseController
{
    /** @var  SupervisorRepository */
    private $supervisorRepository;
    /** @var  \App\Repositories\UserRepository */
    private $userRepository;
    public function __construct(SupervisorRepository $supervisorRepo , UserRepository $userRepo)
    {
        $this->supervisorRepository = $supervisorRepo;
        $this->userRepository = $userRepo;

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

        return view('admin.supervisors.create')->with(['marketplaces'=>$this->supervisorRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID')]);
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
        $user=  $this->userRepository->create($input);

        $input['UserID']   = $user->id;
        $supervisor = $this->supervisorRepository->create($input);

        Flash::success('Supervisor saved successfully.');

        return redirect(route('admin.supervisors.index'));
    }

    /**
     * Display the specified Supervisor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id )
    {
        $supervisor = $this->supervisorRepository->find($id );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        return view('admin.supervisors.show')->with('supervisor', $supervisor);
    }

    /**
     * Show the form for editing the specified Supervisor.
     *
     * @param  int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id )
    {
        $supervisor = $this->supervisorRepository->find($id );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }
        $marketplaces = $this->supervisorRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID');

        return view('admin.supervisors.edit')->with(['supervisor'=> $supervisor,'marketplaces'=>$marketplaces]);
    }

    /**
     * Update the specified Supervisor in storage.
     *
     * @param  int              $id
     * @param UpdateSupervisorRequest $request
     *
     * @return Response
     */
    public function update($id , UpdateSupervisorRequest $request)
    {
        $supervisor = $this->supervisorRepository->find($id );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        $supervisor = $this->supervisorRepository->update($request->all(), $id );

        Flash::success('Supervisor updated successfully.');

        return redirect(route('admin.supervisors.index'));
    }

    /**
     * Remove the specified Supervisor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id )
    {
        $supervisor = $this->supervisorRepository->find($id );

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('admin.supervisors.index'));
        }

        $this->supervisorRepository->delete($id );

        Flash::success('Supervisor deleted successfully.');

        return redirect(route('admin.supervisors.index'));
    }
}
