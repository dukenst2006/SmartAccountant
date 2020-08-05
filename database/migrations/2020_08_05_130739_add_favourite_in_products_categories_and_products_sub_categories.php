<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFavouriteInProductsCategoriesAndProductsSubCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_categories', function (Blueprint $table) {
            $table->boolean('favourite')->nullable();
        });

        Schema::table('product_sub_categories', function (Blueprint $table) {
            $table->boolean('favourite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropColumn('favourite');
        });

        Schema::table('product_sub_categories', function (Blueprint $table) {
            $table->dropColumn('favourite');
        });
    }
}
