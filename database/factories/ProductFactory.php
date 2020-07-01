<?php

/** @var Factory $factory */

use App\Models\Marketplace;
use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {

    return [
        'MarketplacesID' => factory(App\Models\Marketplace::class),
        'ProductCategoryID' =>factory(App\Models\ProductCategory::class),
        'ProductSubCategoryID' =>factory(App\Models\ProductSubCategory::class),
        'Name' => $faker->words(3),
        'Quantity' => $faker->randomNumber(),
        'QuantityType' => $faker->randomElement(['Piece', 'Carton', 'Grain']),
        'PurchasingPrice' => $faker->randomFloat(3),
        'SellingPrice' =>  $faker->randomFloat(3),
        'LowPrice' => $faker->randomFloat(3),
        'Image' => $faker->imageUrl(),
        'ExpiryDate' => $faker->dateTime,
        'Barcode' => $faker->numerify('##############'),
        'UnlimitedQuantity' => $faker->boolean,


    ];
});
