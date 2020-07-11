<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Warehouse;
use Faker\Generator as Faker;

$factory->define(Warehouse::class, function (Faker $faker) {

    return [
        'MarketplaceOwnerID' => 1,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
