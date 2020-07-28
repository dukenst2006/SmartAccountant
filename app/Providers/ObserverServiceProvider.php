<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

       \App\Models\User::observe(\App\Observers\UserObserver::class);
       \App\Models\MarketplaceOwner::observe(\App\Observers\MarketplaceOwnerObserver::class);
       \App\Models\Marketplace::observe(\App\Observers\MarketplaceObserver::class);
       \App\Models\Invoice::observe(\App\Observers\InvoiceObserver::class);
       \App\Models\SupplierInvoice::observe(\App\Observers\SupplierInvoiceObserver::class);
       \App\Models\BoundVoucherItem::observe(\App\Observers\BoundVoucherItemObserver::class);

    }
}
