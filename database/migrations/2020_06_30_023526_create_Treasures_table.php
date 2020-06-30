<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Treasures', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigIncrements('MarketplaceID');


            $table->timestamps();


            $table->foreign('MarketplacesID')->references('id')->on('Marketplaces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Treasures');
    }
}
