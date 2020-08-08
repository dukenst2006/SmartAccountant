<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('MarketplaceOwnerID');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('PaymentTypeID');
            $table->double('Amount');
            $table->double('Paid');
            $table->double('Rest');
            $table->string('note')->default('');
            $table->string('invoice_code')->nullable()->unique();
            $table->timestamps();

            $table->foreign('MarketplaceOwnerID')->references('id')->on('marketplace_owners')->onDelete('cascade');
            $table->foreign('SupplierID')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('PaymentTypeID')->references('id')->on('payment_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_invoices');
    }
}
