<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserIDToMarketplaceOwnerIDProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['UserID']);
            $table->dropColumn('UserID');
            $table->unsignedBigInteger('MarketplaceOwnerID')->nullable()->after('id');
            $table->foreign('MarketplaceOwnerID')->references('id')->on('marketplace_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['MarketplaceOwnerID']);
            $table->dropColumn('MarketplaceOwnerID');
            $table->unsignedBigInteger('UserID')->nullable()->after('id');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
