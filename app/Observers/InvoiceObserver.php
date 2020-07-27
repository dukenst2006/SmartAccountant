<?php

namespace App\Observers;

use App\Models\Invoice;

class InvoiceObserver
{
    /**
     * Handle the Invoice "created" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */

    public function created(Invoice $invoice)
    {
    	//
    }

    /**
     * Handle the Invoice "creating" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */
    public function creating(Invoice $invoice)
    {
    	$invoice_code = substr(uniqid(), 0,4) . "-" . rand(1000,9999);
    	$invoice->invoice_code = $invoice_code;
    }

    /**
     * Handle the Invoice "updated" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */
    public function updated(Invoice $invoice)
    {
    	//
    }

    /**
     * Handle the Invoice "deleted" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */
    public function deleted(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "restored" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */
    public function restored(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "force deleted" event.
     *
     * @param  Invoice  $invoice
     * @return void
     */
    public function forceDeleted(Invoice $invoice)
    {
        //
    }
}
