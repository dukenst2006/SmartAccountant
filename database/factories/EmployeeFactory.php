<?php

/** @var Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
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

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'UserID' => factory(\App\Models\User::class),
        'MarketplaceID' => factory(\App\Models\Marketplace::class),
        'MarketplaceOwnerID' => factory(\App\Models\MarketplaceOwner::class),
        'Nationality' => $faker->randomElement(['سعودي', 'مصري', 'سوداني', 'امارتي']),
        'JobTitle' => $faker->randomElement(['محاسب', 'امين خزنه', 'مشرف']),
        'NationalID' => $faker->randomNumber(15),
        'PhoneNumber' => $faker->phoneNumber,
        'ProfileImage' => $faker->imageUrl(),
        'IdentityImage' => $faker->imageUrl(),
        'EmploymentContractImage' => $faker->imageUrl(),
        'IBAN' => $faker->iban(),
        'Sex' => $faker->randomElement($array = array ('ذكر', 'انثي')),
        'Salary' => $faker->randomFloat(5,10000,90000),
    ];
});
