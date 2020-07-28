<?php

namespace App\Observers;

use App\Models\{
    BoundVoucherItem,
    ProductMovements   
};

class BoundVoucherItemObserver
{
    /**
     * Handle the BondsVouchers "created" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */

    public function created(BoundVoucherItem $boundVoucherItem)
    {
        $productsMovements = new ProductMovements();
        $productsMovements->UserID =  auth()->user()->id;
        $productsMovements->ProductID =  $boundVoucherItem->ProductID;
        $productsMovements->WarehouseID =  $boundVoucherItem->productid->warehouse->id;
        $productsMovements->InventoryID =  null;
        $productsMovements->Quantity =  $boundVoucherItem->Quantity;
        $productsMovements->MovementTypeID =  1;
        $productsMovements->save();
    }

    /**
     * Handle the BondsVouchers "creating" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function creating(BoundVoucherItem $boundVoucherItem)
    {
        // dd($BoundVoucherItem, 'creating');
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
    public function updated(BoundVoucherItem $boundVoucherItem)
    {
    	//
    }

    /**
     * Handle the BondsVouchers "deleted" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function deleted(BoundVoucherItem $bondVoucher)
    {
        //
    }

    /**
     * Handle the BondsVouchers "restored" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function restored(BoundVoucherItem $boundVoucherItem)
    {
        //
    }

    /**
     * Handle the BondsVouchers "force deleted" event.
     *
     * @param  BondsVouchers  $bondVoucher
     * @return void
     */
    public function forceDeleted(BoundVoucherItem $boundVoucherItem)
    {
        //
    }
}
