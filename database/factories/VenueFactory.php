<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venue;
use Faker\Generator as Faker;

$factory->define(Venue::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'capacity' => $faker->randomDigit(),
        'price' => $faker->numberBetween(200,1000)
    ];
});
