<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('aplications')->insert([
            'name' => 'edificio',
            'display_name' => 'edificio',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 1
        ]);

        DB::table('aplications')->insert([
            'name' => 'residencia',
            'display_name' => 'residencia',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 1
        ]);



        DB::table('aplications')->insert([
            'name' => 'hospital',
            'display_name' => 'hospital',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'hotel',
            'display_name' => 'hotel',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'autoservicio',
            'display_name' => 'autoservicio',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'industria',
            'display_name' => 'industria',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'aeropuertos',
            'display_name' => 'aeropuertos',
            'description' =>  $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
            'family_id' => 2
        ]);



        // Poblar la tabla pivote
        App\Family::find(1)->aplications()->each(function ($aplication) { 
            $articles = App\Family::find(1)->articles()->get()->random(mt_rand(1,12))->pluck('id')->toArray();
            $aplication->articles()->attach( $articles); 
        });
        // Poblar la tabla pivote
        App\Family::find(2)->aplications()->each(function ($aplication) { 
            $articles = App\Family::find(2)->articles()->get()->random(mt_rand(1,12))->pluck('id')->toArray();
            $aplication->articles()->attach( $articles); 
        });

    }
}
