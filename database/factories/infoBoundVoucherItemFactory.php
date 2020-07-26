<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BoundVoucherItem;
use Faker\Generator as Faker;

$factory->define(BoundVoucherItem::class, function (Faker $faker) {

    return [
        'BondVouchersID' => $faker->word,
        'ProductID' => $faker->word,
        'Quantity' => $faker->randomDigitNotNull
    ];
});
