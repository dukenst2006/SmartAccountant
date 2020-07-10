<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Admin\Supplier;

use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {

    return [
        'MarketplaceOwnerID' => $faker->word,
        'Name' => $faker->word,
        'Company' => $faker->word,
        'PhoneNumber' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
