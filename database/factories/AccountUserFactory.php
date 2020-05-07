<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AccountUser;
use App\Account;
use App\User;
use Faker\Generator as Faker;

$factory->define(AccountUser::class, function (Faker $faker) {
    return [
        'account_id' => $faker->numberBetween(1, Account::count()),
        'user_id' => $faker->numberBetween(1, User::count()),
    ];
});
