<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'UserID' => $faker->word,
        'MarketplacesID' => $faker->word,
        'ProductCategoryID' => $faker->word,
        'ProductSubCategoryID' => $faker->word,
        'Name' => $faker->word,
        'Quantity' => $faker->randomDigitNotNull,
        'QuantityTypeID' => $faker->word,
        'PurchasingPrice' => $faker->randomDigitNotNull,
        'SellingPrice' => $faker->randomDigitNotNull,
        'LowPrice' => $faker->randomDigitNotNull,
        'Image' => $faker->word,
        'ExpiryDate' => $faker->date('Y-m-d H:i:s'),
        'Barcode' => $faker->word,
        'UnlimitedQuantity' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
