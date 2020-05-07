<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bank;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bank::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Banco ##'),
        'user_id' => $faker->numberBetween(1, User::count()),
    ];
});
