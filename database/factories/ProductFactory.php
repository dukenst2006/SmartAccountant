<?php

/** @var Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


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


        'MarketplaceOwnerID' =>  1,
        'ProductCategoryID' => factory(App\Models\ProductCategory::class),
        'ProductSubCategoryID' => factory(App\Models\ProductSubCategory::class),
        'WarehouseID' =>1,
        'Name' => $faker->sentence(3),
        'Quantity' => $faker->randomNumber(3),
        'QuantityTypeID' => $faker->numberBetween(1,3),
        'PurchasingPrice' => $faker->randomFloat(3,1000,3000),
        'SellingPrice' => $faker->randomFloat(3,1000,3000),
        'LowPrice' => $faker->randomFloat(3,1000,3000),
        'Image' => $faker->imageUrl(),
        'ExpiryDate' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years', $timezone = null),
        'Barcode' => $faker->numerify('##############'),
        'UnlimitedQuantity' => $faker->boolean,




    ];
});
