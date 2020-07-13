<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Carbon;

$factory->define(App\Post::class, function (Faker $faker) {

   $nombre = $faker->catchPhrase;
   $dt = $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now');

    return [
        'title' => $nombre,
        'slug' => str_replace(' ', '-', strtolower($nombre)),
        'body' => $faker->paragraphs($nb = 30, $asText = true),
        'is_draft' => $faker->randomElement($array = array (true,false)),
        'family_id' => $faker->randomElement($array = array(1,2)),
        'created_at' =>  $dt->format('Y-m-d')
    ];
});
