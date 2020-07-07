<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

   $nombre = $faker->catchPhrase;

    return [
        'title' => $nombre,
        'slug' => str_replace(' ', '-', strtolower($nombre)),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'is_draft' => $faker->randomElement($array = array (true,false)),
        'family_id' => $faker->randomElement($array = array(1,2)),
    ];
});
