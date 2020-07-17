<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {

    return [
        'MarketplaceID' => 1,
        'WarehouseID' =>1,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
