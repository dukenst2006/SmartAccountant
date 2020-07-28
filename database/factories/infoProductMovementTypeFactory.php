<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductMovementType;
use Faker\Generator as Faker;

$factory->define(ProductMovementType::class, function (Faker $faker) {

    return [
        'Description' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
