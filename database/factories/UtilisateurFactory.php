<?php

use Faker\Generator as Faker;

$factory->define(App\Utilisateur::class, function (Faker $faker) {
    return [
        'compte_id' => function() {
            return factory(App\Compte::class)->create()->id;
        },
        'service_id' => function() {
            return factory(App\Service::class)->create()->id;
        },
        'nom' => $faker->firstName,
        'prenoms' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->phoneNumber,
        'estAdministrateur' => $faker->boolean(1)
    ];
});
