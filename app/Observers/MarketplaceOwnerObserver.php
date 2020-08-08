<?php

namespace App\Observers;

use App\Models\MarketplaceOwner;
use App\Models\Settings;
use App\Models\User;
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
        /**
        *@var User $user
         **/
        $user =  User::find($marketplaceowner->user()->id);
        $warehouse = new Warehouse();
        $warehouse->MarketplaceOwnerID = $marketplaceowner->id;
        $warehouse->save();


        $settings = new Settings();
        $settings->UserID= $user->id;
        $user->assignRole('MarketplaceOwner');


    }
}
