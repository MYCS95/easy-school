<?php

use Faker\Generator as Faker;

$factory->define(App\Classe::class, function (Faker $faker) {
    return [
        'libelle' => $faker->word,
        'niveau_id' => function() {
            return factory(App\Niveau::class)->create()->id;
        },
        'filiere_id' => function() {
            return factory(App\Filiere::class)->create()-id;
        }
    ];
});
