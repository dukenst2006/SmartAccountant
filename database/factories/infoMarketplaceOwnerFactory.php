<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MarketplaceOwner;
use Faker\Generator as Faker;

$factory->define(MarketplaceOwner::class, function (Faker $faker) {

    return [
        'UserID' => $faker->word,
        'PhoneNumber' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
