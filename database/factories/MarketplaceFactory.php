<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use \App\Models\Marketplace;
use Faker\Generator as Faker;
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

$factory->define(Marketplace::class, function (Faker $faker) {

    return [
        'MarketplaceOwnerID' =>factory(\App\Models\MarketplaceOwner::class),
        'Name' => $faker->streetName,
        'StockID' =>    2,
        'Country' => $faker->country,
        'City' => $faker->city,
        'SupervisorPhoneNumber' => $faker->phoneNumber,
        'Address' => $faker->address,
        'TaxNumber' => $faker->numerify('##############'),
        'Email' => $faker->email,
        'Latitude' => $faker->latitude,
        'Longitude' => $faker->longitude,
        'SafeBalance' => $faker->numberBetween(20000,50000),
        'CompanyRegisterImage' => $faker->imageUrl(),
        'Logo' => $faker->imageUrl(),
    ];
});
