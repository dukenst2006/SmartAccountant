<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoundVoucherItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('bound_voucher_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('BondVouchersID');
            $table->unsignedBigInteger('ProductID');
            $table->double('Quantity');


            $table->foreign('BondVouchersID')->references('id')->on('bonds_vouchers')->onDelete('cascade');
            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bound_voucher_items');
    }
}
