<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // ...

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {


//        $charts->register([
//            \App\Charts\SampleChart::class
//        ]);

//
//        DB::listen(function($query) {
//            Log::info(
//                $query->sql,
//                $query->bindings,
//                $query->time
//            );
//        });
		\Schema::defaultStringLength(191);

        view()->composer('vendor.adminlte.partials.navbar.menu-item-dropdown-user-menu', function ($view) {
            $view->with('notifications', auth()->user()->notifications() ->orderBy('created_at', 'DESC'));
        });

    }
}
