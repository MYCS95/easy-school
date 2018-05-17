<?php

use Faker\Generator as Faker;

$factory->define(App\Classe::class, function (Faker $faker) {
    return [
        'filiere_id' => null,
        'libelle' => $faker->unique()->word
    ];
});
