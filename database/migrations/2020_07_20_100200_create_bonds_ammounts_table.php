<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateBondsAmmountsTable extends Migration


{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bond_amounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MarketplaceOwnerID');
            $table->string('client_name');
            $table->double('ammount');
            $table->date('ammount_date');
            $table->foreign('MarketplaceOwnerID')->references('id')->on('marketplace_owners')->onDelete('cascade');
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
