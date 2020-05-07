<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProviderClient;
use App\User;
use Faker\Generator as Faker;

$factory->define(ProviderClient::class, function (Faker $faker) {
    return [
        'user_client_id' => $faker->numberBetween(1, User::count()),
        'user_provider_id' => $faker->numberBetween(1, User::count()),
    ];
});
