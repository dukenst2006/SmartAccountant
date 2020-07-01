<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('MarketplacesID');
            $table->double('Total');
            $table->double('Paid');
            $table->double('Rest');
            $table->unsignedBigInteger('PaymentTypeID');
            $table->timestamps();


            $table->foreign('MarketplacesID')->references('ID')->on('marketplaces')->onDelete('cascade');
            $table->foreign('PaymentTypeID')->references('ID')->on('payment_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
