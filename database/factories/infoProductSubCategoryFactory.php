<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\ProductSubCategory;
use Faker\Generator as Faker;

$factory->define(ProductSubCategory::class, function (Faker $faker) {

    return [
        'ProductCategoryID' => $faker->word,
        'Name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
