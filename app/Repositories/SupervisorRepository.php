<?php


namespace App\Repositories;


use App\Models\Supervisor;
use App\Http\Requests\SupervisorRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupervisorRepository
{
    public function All(){
        return Supervisor::all();
    }
    public function Create(SupervisorRequest $requestٌ){
        $user = User::query()->create([
           "Name"       =>  $requestٌ->get('Name'),
           "Email"      =>  $requestٌ->get('Email'),
           "Password"   =>  Hash::make($requestٌ->get('Password')),
        ]);
        $data = $requestٌ->only('PhoneNumber','MarketPlaceOwnerID');
        $data['UserID'] = $user['id'];
        Supervisor::query()->create($data);
    }
    public function Update(Supervisor $super,Request $request){
        $user = $super->User;
        $user->update($request->only('Name','Email'));
        $super->update($request->only('MarketPlaceOwnerID','PhoneNumber'));
    }
}
