<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductMovements;
use Faker\Generator as Faker;

$factory->define(ProductMovements::class, function (Faker $faker) {

    return [
        'UserID' => $faker->word,
        'ProductID' => $faker->word,
        'WarehouseID' => $faker->word,
        'InventoryID' => $faker->word,
        'Quantity' => $faker->randomDigitNotNull,
        'MovementTypeID' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
