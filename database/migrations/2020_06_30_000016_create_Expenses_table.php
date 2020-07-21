<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('MarketplaceID');
            $table->unsignedBigInteger('ExpensesCategoriesID');
            $table->unsignedBigInteger('ExpensesSubCategoriesID')->nullable()->default(null);
            $table->string('Name');
            $table->double('Price');
            $table->string('Description');
            $table->dateTime('Date');
            $table->timestamps();


            $table->foreign('MarketplaceID')->references('id')->on('marketplaces')->onDelete('cascade');
            $table->foreign('ExpensesCategoriesID')->references('id')->on('expenses_categories')->onDelete('cascade');
            $table->foreign('ExpensesSubCategoriesID')->references('id')->on('expenses_sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
