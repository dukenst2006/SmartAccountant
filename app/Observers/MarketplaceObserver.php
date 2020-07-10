<?php

namespace App\Observers;

use App\Models\Marketplace;
use App\Models\Safe;
use App\Models\Stock;
use App\Repositories\StockRepository;
use Illuminate\Console\Events\ScheduledTaskFinished;

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
     * Handle the marketplace "creating" event.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return void
     */
    public function creating(Marketplace $marketplace)
    {
            //Create The Main Stock
            $stock = new Stock();
            $stock->marketplaceid=auth()->user()->id;
            $stock->save();
            $marketplace->StockID=$stock->id;



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
