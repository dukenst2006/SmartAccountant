<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupervisorRequest;
use App\Models\Supervisor;
use App\Repositories\SupervisorRepositoryInterface;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    protected $SupervisorRepository;
    public function __construct(SupervisorRepositoryInterface $supervisorRepository)
    {
        $this->SupervisorRepository = $supervisorRepository;
    }

    /**888
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = $this->SupervisorRepository->All();
        return view('admin.supervisor.index',compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupervisorRequest $request)
    {
        $this->SupervisorRepository->Create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        return view('admin.supervisor.edit',compact('supervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Supervisor $supervisor)
    {
        $this->SupervisorRepository->Update($request,$supervisor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        $supervisor->delete();
        return redirect()->back();
    }
}
