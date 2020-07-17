<?php

/** @var Factory $factory */

use App\Models\ProductCategory;
use App\Models\User;
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

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'MarketplaceID' => factory(\App\Models\Marketplace::class),
        'Name' => $faker->sentence(4),
    ];
});
