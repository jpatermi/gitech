<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Province;
use App\City;
use Faker\Generator as Faker;

$factory->define(Province::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'city_id' => $faker->numberBetween(1, City::count()),
    ];
});
