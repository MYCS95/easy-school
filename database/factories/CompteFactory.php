<?php

use Faker\Generator as Faker;

$factory->define(App\Compte::class, function (Faker $faker) {
    return [
        'login' => $faker->unique()->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'estAdministrateur' => $faker->boolean(1),
    ];
});
