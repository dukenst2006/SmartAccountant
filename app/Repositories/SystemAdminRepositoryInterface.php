<?php


namespace App\Repositories;


use App\Models\SystemAdmin;
use Illuminate\Http\Request;

interface SystemAdminRepositoryInterface
{
    public function All();
    public function Create(Request $request);
    public function Update(Request $request,SystemAdmin $admin);
}
