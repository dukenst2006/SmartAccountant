<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {

    return [
        'MarketplacesID' => $faker->word,
        'ExpensesCategoriesID' => $faker->word,
        'ExpensesSubCategoriesID' => $faker->word,
        'Name' => $faker->word,
        'Price' => $faker->randomDigitNotNull,
        'Description' => $faker->word,
        'Date' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
