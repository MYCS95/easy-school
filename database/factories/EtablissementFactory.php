<?php

use Faker\Generator as Faker;

$factory->define(App\Etablissement::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'adresse' => $faker->address,
        'code' => $faker->unique()->numberBetween(1000, 9999),
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->unique()->phoneNumber
    ];
});
