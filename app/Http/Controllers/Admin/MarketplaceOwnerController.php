<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\MarketplaceOwner;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MarketplaceOwnerController extends Controller
{
    public function index(){
        $marketplaceOwners = MarketplaceOwner::query()->orderByDesc('id')->paginate(10);
        if (isset($_GET['statue']) && $_GET['statue'] == 'ended'){
            $marketplaceOwners = MarketplaceOwner::EndedOwners()->paginate(10);
        }
        return view('admin.MarketPlaceOwner.index',compact('marketplaceOwners'));
    }
    public function create(){
        return view('admin.MarketPlaceOwner.create');
    }
    public function destroy(MarketplaceOwner $marketplaceOwner){
        $marketplaceOwner->delete();
        alert('',__('Done'),'success');
        return redirect()->back();
    }
    public function edit(MarketplaceOwner $marketplaceOwner){
        return view('admin.MarketPlaceOwner.edit',compact('marketplaceOwner'));
    }
    public function store(Request $request){
        $request->validate([
            'Name'  =>  'required',
            'Email'  =>  'required|unique:usersّّ',
            'PhoneNumber'  =>  'required',
            'Password'  =>  'required',
        ]);
        $user = User::query()->create([
            'Name'      =>  $request->get('Name'),
            'Email'     =>  $request->get('Email'),
            'Password'  =>  Hash::make($request->get('Password')),
        ]);
        MarketplaceOwner::query()->create(['UserID'=>$user->id,'PhoneNumber' => $request->PhoneNumber]);
        Settings::query()->create(['UserID'=>$user->id]);
        alert('',__('Done'),'success');
        return redirect()->route('admin.marketplaceOwner.index');
    }
    public function update(Request $request,MarketplaceOwner $marketplaceOwner){
        $request->validate([
            'Name'  =>  'required',
            'Email'  =>  'required',
            'PhoneNumber'  =>  'required',
            'Password'  =>  'required',
        ]);
        $marketplaceOwner->update($request->only('PhoneNumber'));
        $marketplaceOwner->user->update($request->except('_method','_token','PhoneNumber','Password'));
        if ($request->get('Password') != "same"){
            $marketplaceOwner->user->update(['Password' => Hash::make($request->get('Password'))]);
        }
        alert('',__('Done'),'success');
        return redirect()->route('admin.marketplaceOwner.index');
    }
}
