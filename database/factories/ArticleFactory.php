<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {

    $name = $faker->sentence($nbWords = 3, $variableNbWords = true);
    return [
        'name' => $name,
        'slug' => str_replace(' ', '-', strtolower($name)),
        'code' => $faker->ean8,
        'is_trend' => $faker->randomElement($array = array (true,false)),
        'description' => $faker->text($maxNbChars = 200), 
        'specs' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'category_id' =>  $faker->numberBetween($min = 1, $max = 19)
    ];
});
