<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Province;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'description' => $faker->address,
        'number' => $faker->buildingNumber,
        'portal' => $faker->numerify('Portal ###'),
        'floor' => $faker->numerify('#'),
        'zip' => $faker->postcode,
        'province_id' => $faker->numberBetween(1, Province::count()),
    ];
});
