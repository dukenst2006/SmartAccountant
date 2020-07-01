<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplaces', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('MarketplaceOwnerID');
            $table->unsignedBigInteger('TreasureID');
            $table->unsignedBigInteger('SafeID');
            $table->unsignedBigInteger('StockID');
            $table->string('Name');
            $table->string('Country');
            $table->string('City');
            $table->string('SupervisorPhoneNumber');
            $table->string('Address');
            $table->string('TaxNumber');
            $table->string('Email');
            $table->string('Latitude');
            $table->string('Longitude');
            $table->string('CompanyRegisterImage');
            $table->string('Logo');
            $table->timestamps();

            $table->foreign('MarketplaceOwnerID')->references('ID')->on('marketplace_owners')->onDelete('cascade');
            $table->foreign('TreasureID')->references('ID')->on('treasures')->onDelete('cascade');
            $table->foreign('SafeID')->references('ID')->on('safes')->onDelete('cascade');
            $table->foreign('StockID')->references('ID')->on('stocks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketplaces');
    }
}
