<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $nombre = $faker->word;
    return [
        'name' => $nombre,
        'display_name' => str_replace(' ', '', strtolower($nombre)),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
