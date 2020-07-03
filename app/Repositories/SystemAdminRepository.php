<?php


namespace App\Repositories;


use App\Models\SystemAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SystemAdminRepository
{
    public function All(){
        return SystemAdmin::all();
    }
    public function Create(Request $requestٌ){
    $user = User::query()->create([
        "Name"       =>  $requestٌ->get('Name'),
        "Email"      =>  $requestٌ->get('Email'),
        "Password"   =>  Hash::make($requestٌ->get('Password')),
    ]);
    $data = $requestٌ->only('Phone','SoftwareVersion','SerialKey');
    $data['UserID'] = $user['id'];
    SystemAdmin::query()->create($data);
}
    public function Update(SystemAdmin $admin,Request $request){
        $user = $admin->User;
        $user->update($request->only('Name','Email'));
    }
}
