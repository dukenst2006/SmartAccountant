<?php

namespace App\Observers;

use App\Models\Inventory;
use App\Models\Marketplace;
use App\Models\Safe;
use App\Models\Stock;
use App\Models\Warehouse;
use App\Repositories\BaseRepository;
use App\Repositories\StockRepository;
use App\Repositories\WarehouseRepository;
use Illuminate\Console\Events\ScheduledTaskFinished;

class MarketplaceObserver
{

    /** @var  WarehouseRepository */
    private $WarehouseRepository;

    public function __construct(WarehouseRepository $warehouseRepo )
    {

        $this->WarehouseRepository = $warehouseRepo;

    }


    /**
     * Handle the marketplace "created" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */


    public function created(Marketplace $marketplace)
    {

        //Create The inventory
        $inventory = new Inventory();
        $inventory->MarketplaceID=$marketplace->id;
        $inventory->WarehouseID= Warehouse::where('MarketplaceOwnerID',$this->WarehouseRepository->GetMyOwner())->first()->id;
        $inventory->save();


    }



    /**
     * Handle the marketplace "creating" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */
    public function creating(Marketplace $marketplace)
    {



    }







    /**
     * Handle the marketplace "updated" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */
    public function updated(Marketplace $marketplace)
    {

    }

    /**
     * Handle the marketplace "deleted" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */
    public function deleted(Marketplace $marketplace)
    {
        //
    }

    /**
     * Handle the marketplace "restored" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */
    public function restored(Marketplace $marketplace)
    {
        //
    }

    /**
     * Handle the marketplace "force deleted" event.
     *
     * @param  Marketplace  $marketplace
     * @return void
     */
    public function forceDeleted(Marketplace $marketplace)
    {
        //
    }
}
