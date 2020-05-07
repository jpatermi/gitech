<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use App\User;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, User::count()),
        'type' => $faker->randomElement(['mobile','local']),
        'number' => $faker->e164PhoneNumber,
    ];
});
