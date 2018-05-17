<?php

use Faker\Generator as Faker;

$factory->define(App\Scolarite::class, function (Faker $faker) {
    return [
        'anneescolaire_id' => function() {
            return factory(App\AnneeScolaire::class)->create()->id;
        },
        'filiere_id' => function() {
            return factory(App\Filiere::class)->create()->id;
        },
        'niveau_id' => function() {
            return factory(App\Niveau::class)->create()->id;
        },
        'montant' => $faker->numberBetween()
    ];
});
