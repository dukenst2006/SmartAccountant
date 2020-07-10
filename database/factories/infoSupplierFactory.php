<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\Models\Admin\Supplier;
=======
use App\Models\Supplier;
>>>>>>> 8c78e0167782536fbb5d31e1e6b079d8bbd3201d
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
