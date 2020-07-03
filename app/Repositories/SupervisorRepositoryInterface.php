<?php


namespace App\Repositories;


use App\Http\Requests\SupervisorRequest;
use App\Models\Supervisor;
use Illuminate\Http\Request;

interface SupervisorRepositoryInterface
{
    public function All();
    public function Create(SupervisorRequest $request);
    public function Update(Request $request,Supervisor $super);
}
