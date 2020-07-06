<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\ExpensesCategory;
use Faker\Generator as Faker;

$factory->define(ExpensesCategory::class, function (Faker $faker) {

    return [
        'MarketplacesID' => $faker->word,
        'Name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
