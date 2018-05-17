<?php

use Faker\Generator as Faker;

$factory->define(App\Echeance::class, function (Faker $faker) {
    return [
        'dateEcheance' => $faker->date()
    ];
});
