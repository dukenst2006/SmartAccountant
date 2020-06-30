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
        Schema::create('Products', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('MarketplacesID');
            $table->unsignedBigInteger('ProductCategoryID');
            $table->unsignedBigInteger('ProductSubCategoryID')->nullable()->default(null);
            $table->string('Name');
            $table->double('Quantity');
            $table->enum('QuantityType', ['Piece', 'Carton', 'Grain']);
            $table->double('PurchasingPrice');
            $table->double('SellingPrice');
            $table->double('LowPrice')->nullable()->default(null);  //  For What ?
            $table->string('Image');
            $table->string('ExpiryDate')->nullable()->default(null);
            $table->string('Barcode');
            $table->boolean('UnlimitedQuantity')->default(false);
            $table->timestamps();

            $table->foreign('MarketplacesID')->references('id')->on('Marketplaces')->onDelete('cascade');
            $table->foreign('ProductCategoryID')->references('ID')->on('ProductCategories')->onDelete('cascade');
            $table->foreign('ProductSubCategoryID')->references('ID')->on('ProductSubCategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
