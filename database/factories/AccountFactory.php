<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'description' => $faker->name,
        'bank' => $faker->name,
        'account_number' => $faker->numerify('##########'),
    ];
});
