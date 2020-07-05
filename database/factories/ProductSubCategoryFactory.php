<?php

/** @var Factory $factory */

use App\Models\Marketplace;
use App\Models\ProductSubCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

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

$factory->define(ProductSubCategory::class, function (Faker $faker) {
    return [

        'ProductCategoryID' => factory(\App\Models\ProductCategory::class),
        'Name' => $faker->word()

    ];
});
