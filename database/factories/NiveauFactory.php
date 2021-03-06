<?php

use Faker\Generator as Faker;

$factory->define(App\Niveau::class, function (Faker $faker) {
    return [
        'cycle_id' => function() {
            return factory(App\Cycle::class)->create()->id;
        },
        'libelle' => $faker->unique()->word
    ];
});
