<?php

/** @var Factory $factory */

use App\Models\Expense;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Expense::class, function (Faker $faker) {

    return [

            'MarketplacesID' => factory(\App\Models\Marketplace::class),
            'ExpensesCategoriesID' => factory(App\Models\ExpensesCategory::class),
            'ExpensesSubCategoriesID' => factory(App\Models\ExpensesSubCategory::class),
            'Name' =>$faker->sentence(3),
            'Price' =>$faker->numberBetween(2000,10000),
            'Description' =>$faker->sentence(3),
            'Date' =>$faker->dateTime()




    ];
});
