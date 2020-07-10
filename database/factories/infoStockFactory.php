<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {

    return [
        'MarketplacesOwnerID' => $faker->word,
        'MarketplacesID' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
