<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
        'UserID' => $faker->word,
        'MarketplaceID' => $faker->word,
        'MarketplaceOwnerID' => $faker->word,
        'Nationality' => $faker->word,
        'JobTitle' => $faker->word,
        'NationalID' => $faker->word,
        'PhoneNumber' => $faker->word,
        'ProfileImage' => $faker->word,
        'IdentityImage' => $faker->word,
        'EmploymentContractImage' => $faker->word,
        'IBAN' => $faker->word,
        'Sex' => $faker->word,
        'Salary' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
