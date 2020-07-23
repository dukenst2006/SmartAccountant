<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BondsAmmount;
use Faker\Generator as Faker;

$factory->define(BondsAmmount::class, function (Faker $faker) {

    return [
        'MarketplaceOwnerID' => $faker->word,
        'client_name' => $faker->word,
        'ammount' => $faker->randomDigitNotNull,
        'ammount_date' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
