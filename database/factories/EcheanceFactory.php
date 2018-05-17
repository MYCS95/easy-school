<?php

use Faker\Generator as Faker;

$factory->define(App\Echeance::class, function (Faker $faker) {
    return [
        'scolarite_id' => function() {
            return factory(App\Scolarite::class)->create()->id;
        },
        'dateEcheance' => $faker->date()
    ];
});
