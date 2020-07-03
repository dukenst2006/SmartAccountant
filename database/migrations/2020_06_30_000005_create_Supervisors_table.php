<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('MarketplaceOwnerID');

            $table->string('PhoneNumber');
            $table->timestamps();

            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
            $table->foreign('MarketplaceOwnerID')->references('ID')->on('marketplace_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisors');
    }
}
