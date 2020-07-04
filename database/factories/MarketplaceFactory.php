<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Marketplace;
use Faker\Generator as Faker;

$factory->define(Marketplace::class, function (Faker $faker) {

    return [
        'MarketplaceOwnerID' => $faker->word,
        'Name' => $faker->word,
        'Country' => $faker->word,
        'City' => $faker->word,
        'SupervisorPhoneNumber' => $faker->word,
        'Address' => $faker->word,
        'TaxNumber' => $faker->word,
        'Email' => $faker->word,
        'Latitude' => $faker->word,
        'Longitude' => $faker->word,
        'CompanyRegisterImage' => $faker->word,
        'Logo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
