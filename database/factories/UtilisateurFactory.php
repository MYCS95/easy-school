<?php

use Faker\Generator as Faker;

$factory->define(App\Utilisateur::class, function (Faker $faker) {
    return [
        'nom' => $faker->firstName,
        'prenoms' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->phoneNumber,
    ];
});
