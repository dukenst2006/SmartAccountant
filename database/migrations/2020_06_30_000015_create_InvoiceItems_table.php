<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('InvoiceID');
            $table->unsignedBigInteger('ProductID');
            $table->unsignedBigInteger('QuantityTypeID');
            $table->double('Quantity');
            $table->double('UnitPrice');
            $table->double('Total');


            $table->foreign('InvoiceID')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('ProductID')->references('id')->on('Products')->onDelete('cascade');
            $table->foreign('QuantityTypeID')->references('id')->on('quantity_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
