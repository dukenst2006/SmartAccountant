<?php

namespace App\Http\Controllers;
use App\LoginActivity;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Gate;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function LogInActive(){
        if (auth()->check())
        if (auth()->user()->LoginActivities->sortDesc()->first() != null){
            if(Carbon::parse(auth()->user()->LoginActivities->sortDesc()->first()->login_at)->format('d') != date('d',time())){
                LoginActivity::query()->create([
                    'UserID'    =>  auth()->id(),
                    'login_at'  =>  date('Y-m-d h:i:s',time()),
                ]);
            }
        }else{
            LoginActivity::query()->create([
                'UserID'    =>  auth()->id(),
                'login_at'  =>  date('Y-m-d h:i:s',time()),
            ]);
        }
    }
}
