<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBondsVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonds_vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MarketplaceOwnerID');
            $table->unsignedBigInteger('ProductID');
            $table->string('ClientName');
            $table->double('Quantity');
            $table->date('BondDate');
            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonds');
    }
}
