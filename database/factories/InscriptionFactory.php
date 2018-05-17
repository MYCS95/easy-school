<?php

use Faker\Generator as Faker;

$factory->define(App\Inscription::class, function (Faker $faker) {
    return [
        'filiere_id' => null,
        'montant' => $faker->numberBetween()
    ];
});
