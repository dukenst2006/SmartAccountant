<?php

namespace App\Observers;

use App\Models\Marketplace;
use App\Models\Safe;

class MarketplaceObserver
{
    /**
     * Handle the marketplace "created" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function created(Marketplace $marketplace)
    {
        // Create A New Safe For This Marketplace


    }

    /**
     * Handle the marketplace "updated" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function updated(Marketplace $marketplace)
    {

    }

    /**
     * Handle the marketplace "deleted" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function deleted(Marketplace $marketplace)
    {
        //
    }

    /**
     * Handle the marketplace "restored" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function restored(Marketplace $marketplace)
    {
        //
    }

    /**
     * Handle the marketplace "force deleted" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function forceDeleted(Marketplace $marketplace)
    {
        //
    }
}
