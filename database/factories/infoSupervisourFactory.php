<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Supervisour;
use Faker\Generator as Faker;

$factory->define(Supervisour::class, function (Faker $faker) {

    return [
        'UserID' => $faker->word,
        'MarketplaceOwnerID' => $faker->word,
        'PhoneNumber' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
