<?php

use Faker\Generator as Faker;

$factory->define(App\Statut::class, function (Faker $faker) {
    return [
        'libelle' => $faker->unique()->name
    ];
});
