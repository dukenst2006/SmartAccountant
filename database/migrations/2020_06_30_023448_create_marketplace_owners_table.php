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


            $table->unsignedBigInteger('MarketplacesID');
            $table->timestamps();

            $table->foreign('MarketplacesID')
                ->references('id')
                ->on('MarketplaceOwners')->onDelete('cascade');
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
