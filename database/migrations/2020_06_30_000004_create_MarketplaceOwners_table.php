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
        Schema::create('marketplace_owners', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('UserID');
            $table->string('PhoneNumber');
            $table->timestamps();
            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketplace_owners');
    }
}
