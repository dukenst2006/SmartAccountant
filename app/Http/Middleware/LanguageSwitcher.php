<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {



        //$request->session()->put('key', 'value');


        session(['key' => 'value']);
        session()->save();
                if (!Session::has('locale')){
            if (Auth::user())
                Session::put('locale', 'ar');
        }

        App::setLocale(Session::has('locale')? Session::get('locale'):Config::get('app.locale'));


        return $next($request);
    }
}
