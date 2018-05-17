<?php

use Faker\Generator as Faker;

$factory->define(App\AnneeScolaire::class, function (Faker $faker) {
    return [
        'libelle' => $faker->year(),
        'enCours' => $faker->boolean(1)
    ];
});
