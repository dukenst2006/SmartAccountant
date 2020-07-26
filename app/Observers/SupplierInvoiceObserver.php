<?php

namespace App\Observers;

use App\Models\SupplierInvoice;

class SupplierInvoiceObserver
{
 	/**
     * Handle the SupplierInvoice "created" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */

    public function created(SupplierInvoice $supplierInvoice)
    {
    	//
    }

    /**
     * Handle the SupplierInvoice "creating" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */
    public function creating(SupplierInvoice $supplierInvoice)
    {
    	$invoice_code = sha1(rand().date('l jS \of F Y h:i:s A'));
    	$supplierInvoice->invoice_code = $invoice_code;
    }

    /**
     * Handle the SupplierInvoice "updated" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */
    public function updated(SupplierInvoice $supplierInvoice)
    {
    	//
    }

    /**
     * Handle the SupplierInvoice "deleted" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */
    public function deleted(SupplierInvoice $supplierInvoice)
    {
        //
    }

    /**
     * Handle the SupplierInvoice "restored" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */
    public function restored(SupplierInvoice $supplierInvoice)
    {
        //
    }

    /**
     * Handle the SupplierInvoice "force deleted" event.
     *
     * @param  SupplierInvoice  $supplierInvoice
     * @return void
     */
    public function forceDeleted(SupplierInvoice $supplierInvoice)
    {
        //
    }
}
