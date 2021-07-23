<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\MUser;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(MUser::class, function (Faker $faker) {
    return [
        'password' => Hash::make('password'),  
        'last_name'=> $faker->lastName(),
        'first_name'=> $faker->firstName(),
        'zipcode'=> $faker->postcode(),
        'prefecture'=> $faker->prefecture(),
        'municipality' => $faker->city,
        'address' => $faker->streetAddress,
        'apartments'=> $faker->secondaryAddress,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'user_classification_id' => mt_rand(1, 3),
        'company_name' => $faker->company,
        'delete_flag' => 0,
    ];
});
