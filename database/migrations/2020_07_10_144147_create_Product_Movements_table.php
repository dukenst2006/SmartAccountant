<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_movements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ProductID');
            $table->integer('Quantity');
            $table->unsignedBigInteger('MovementTypeID');




            $table->foreign('UserID')->on('users')->references('id');
            $table->foreign('ProductID')->on('products')->references('id');
            $table->foreign('MovementTypeID')->on('product_movement_types')->references('id');
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
        Schema::dropIfExists('product_movements');
    }
}
