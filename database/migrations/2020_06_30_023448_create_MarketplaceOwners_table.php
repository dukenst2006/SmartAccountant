<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplaceOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MarketplaceOwners', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigIncrements('UserID');
            $table->string('PhoneNumber');
            $table->unsignedBigInteger('MarketplacesID');
            $table->timestamps();

            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
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
        Schema::dropIfExists('MarketplaceOwners');
    }
}
