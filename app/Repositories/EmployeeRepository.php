<?php


namespace App\Repositories;


use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Marketplace;
use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeRepository implements EmployeeRepositoryInterface
{


    public function GetEmployeeStatics(){

    }


    public function All()
    {



      return Employee::all()->sortDesc();

    }

    public function Stoned()
    {
        return  Employee::all()->where('status','stoned');
    }
    public function StoneEmployee(Employee $emp){
        $emp->query()->update(['status' => 'stoned']);
    }

    public function Active()
    {
        return  Employee::all()->where('status','active');
    }

    public function ActiveEmployee(Employee $emp){
        $emp->query()->update(['status' => 'active']);
    }

    public function GetEmployeeByMarketplace($MarketplaceID)
    {

        $marketplace =  Marketplace::query()->find($MarketplaceID);
        $emps = $marketplace->employees;
        return view('admin.employees.index',compact('emps','brench'));
    }
    public function StoreImage($image,EmployeeRequest $request){
        if ($request->hasFile($image)){
            $img = Storage::disk('public')
                ->putFile('images',$request->file($image));
            return $img;
        }else{
            return '';
        }
    }
    public function Create(EmployeeRequest $request){
        $data = $request->except('_token','Name','Email','Password');
        $data['ProfileImage'] = $this->StoreImage("ProfileImage",$request);
        $data['IdentityImage'] = $this->StoreImage("IdentityImage",$request);
        $data['EmploymentContractImage'] = $this->StoreImage("EmploymentContractImage",$request);
        $user = User::query()->create([
            'Name'      =>  $request->get('Name'),
            'Email'     =>  $request->get('Email'),
            'Password'  =>  Hash::make($request->get('Password')),
        ]);
        $data['UserID'] = $user['id'];
        $employee = Employee::query()->create($data);
    }
    public function Update(Employee $employee,Request $request){
        $data = $request->except('_method','_token','Name','Email','Password');
//        $data['ProfileImage'] = $this->StoreImage("ProfileImage",$request);
//        $data['IdentityImage'] = $this->StoreImage("IdentityImage",$request);
//        $data['EmploymentContractImage'] = $this->StoreImage("EmploymentContractImage",$request);
        $user = $employee->User;
        $user->update($request->only('Name','Email'));
        $employee->update($data);
    }


}
