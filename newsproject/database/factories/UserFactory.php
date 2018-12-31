<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'login' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => str_random(10), // secret
        'email_verified_at' => str_random(10),
    ];
});
