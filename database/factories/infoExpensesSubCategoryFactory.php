<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\ExpensesSubCategory;
use Faker\Generator as Faker;

$factory->define(ExpensesSubCategory::class, function (Faker $faker) {

    return [
        'ExpensesCategoryID' => $faker->word,
        'Name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
