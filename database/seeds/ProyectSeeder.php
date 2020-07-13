<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('proyects')->insert([
            'name' => 'hospitales',
            'slug' => 'hospitales',
            'description' => $faker->paragraphs($nb = 30, $asText = true),
            'family_id' => 2,
            'date' =>  'junio 2018'
        ]);

        DB::table('proyects')->insert([
            'name' => 'hotel',
            'slug' => 'hotel',
            'description' => $faker->paragraphs($nb = 30, $asText = true),
            'family_id' => 2,
            'date' =>  'mayo 2018'
        ]);

        DB::table('proyects')->insert([
            'name' => 'industria',
            'slug' => 'industria',
            'description' => $faker->paragraphs($nb = 30, $asText = true),
            'family_id' => 2,
            'date' =>  'septiembre 2018'
        ]);

        DB::table('proyects')->insert([
            'name' => 'autoservicio',
            'slug' => 'autoservicio',
            'description' => $faker->paragraphs($nb = 30, $asText = true),
            'family_id' => 2,
            'date' =>  'junio 2018'
        ]);

    }
}
