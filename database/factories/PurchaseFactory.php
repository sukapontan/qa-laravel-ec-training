<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'purchase_price' => $faker->numberBetween(1000, 200000),
        'purchase_quantity' => $faker->randomNumber(1),
        'purchase_company' => $faker->company,
        'order_date' => $faker->date,
        'purchase_date' => $faker->date,
        'product_id' => mt_rand(1, 5),
    ];
});
