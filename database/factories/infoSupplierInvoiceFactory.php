<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SupplierInvoice;
use Faker\Generator as Faker;

$factory->define(SupplierInvoice::class, function (Faker $faker) {

    return [
        'Amount' => $faker->randomDigitNotNull,
        'Paid' => $faker->randomDigitNotNull,
        'Rest' => $faker->randomDigitNotNull,
        'note' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
