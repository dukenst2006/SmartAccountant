<?php

namespace App\Observers;

use App\Models\MarketplaceOwner;
use App\Models\Warehouse;

class MarketplaceOwnerObserver
{

    /**
     * Handle the marketplace "creating" event.
     *
     * @param  MarketplaceOwner  $marketplaceowner
     * @return void
     */
    public function created(MarketplaceOwner $marketplaceowner)
    {

        $warehouse = new Warehouse();
        $warehouse->MarketplaceOwnerID = $marketplaceowner->id;
        $warehouse->save();


    }
}
