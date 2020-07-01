<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('MarketplacesID');
            $table->unsignedBigInteger('ProductCategoryID');
            $table->unsignedBigInteger('ProductSubCategoryID')->nullable()->default(null);

            $table->string('Name');
            $table->double('Quantity');
            $table->unsignedBigInteger('QuantityTypeID');
            $table->double('PurchasingPrice');
            $table->double('SellingPrice');
            $table->double('LowPrice')->nullable()->default(null);  //  For What ?
            $table->string('Image');
            $table->string('ExpiryDate')->nullable()->default(null);
            $table->string('Barcode');
            $table->boolean('UnlimitedQuantity')->default(false);
            $table->timestamps();

            $table->foreign('UserID')->references('ID')->on('Users')->onDelete('cascade');
            $table->foreign('MarketplacesID')->references('ID')->on('marketplaces')->onDelete('cascade');
            $table->foreign('QuantityTypeID')->references('ID')->on('quantity_types')->onDelete('cascade');
            $table->foreign('ProductCategoryID')->references('ID')->on('product_categories')->onDelete('cascade');
            $table->foreign('ProductSubCategoryID')->references('ID')->on('product_sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
