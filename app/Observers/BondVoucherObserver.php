<?php

namespace App\Observers;

use App\Models\{
    BondsVouchers,
    ProductMovements   
};
use App\Repositories\ProductMovementsRepository;

class BondVoucherObserver
{

    /**
     * 
     * @var $productMovementsRepository
     */
    private $productMovementsRepo;

    public function __construct(ProductMovementsRepository $productMovementsRepo )
    {

        $this->productMovementsRepo = $productMovementsRepo;

    }

    /**
     * Handle the BondsVouchers "created" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */

    public function created(BondsVouchers $bondVoucher)
    {
        // $bondVoucher->load('boundvoucheritems');
        // dd($bondVoucher->boundvoucheritems);
    }

    /**
     * Handle the BondsVouchers "creating" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function creating(BondsVouchers $bondVoucher)
    {
        // $bondVoucher->load('boundvoucheritems');
        // dd($bondVoucher->boundvoucheritems);
        // $productsMovements = new ProductMovements();
        // $productsMovements->UserID =  auth()->user()->id;
        // $productsMovements->ProductID =  $bondVoucher->ProductID;
        // $productsMovements->WarehouseID =  1;
        // $productsMovements->InventoryID =  null;
        // $productsMovements->Quantity =  $bondVoucher->Quantity;
        // $productsMovements->MovementTypeID =  1;
        // $productsMovements->save();
    }

    /**
     * Handle the BondsVouchers "updated" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function updated(BondsVouchers $bondVoucher)
    {
    	//
    }

    /**
     * Handle the BondsVouchers "deleted" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function deleted(BondsVouchers $bondVoucher)
    {
        //
    }

    /**
     * Handle the BondsVouchers "restored" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function restored(BondsVouchers $bondVoucher)
    {
        //
    }

    /**
     * Handle the BondsVouchers "force deleted" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function forceDeleted(BondsVouchers $bondVoucher)
    {
        //
    }
}
