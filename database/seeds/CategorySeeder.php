<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        //Residenciales

        DB::table('categories')->insert([
            'name' => 'motore_de_cortina',
            'display_name' => 'motores de cortina',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'barreras_de_acero',
            'display_name' => 'barreras de acero',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_corredizos',
            'display_name' => 'motores corredizos',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_ascendentes',
            'display_name' => 'motores ascendentes',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_seccionales',
            'display_name' => 'puertas seccionales',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_tubulares',
            'display_name' => 'motores tubulares',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'herrajes',
            'display_name' => 'herrajes',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'cortinas_anti_huracan',
            'display_name' => 'cortinas anti-huracán',
            'family_id' => 1,
            'description' =>Str::random(20),
        ]);


        //Industriales

        DB::table('categories')->insert([
            'name' => 'puertas_rapidas',
            'display_name' => 'puertas rápidas',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_automaticas',
            'display_name' => 'puertas automáticas',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);


        DB::table('categories')->insert([
            'name' => 'motores_industriales',
            'display_name' => 'motores industriales',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'sellos',
            'display_name' => 'sellos',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_de_acero',
            'display_name' => 'puertas de acero',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'control_de_acceso',
            'display_name' => 'control de acceso',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_de_quirofano',
            'display_name' => 'puertas de quiirofano',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'rampas',
            'display_name' => 'rampas',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'cortinas_de_acero',
            'display_name' => 'cortinas de acero',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'herrajes',
            'display_name' => 'herrajes',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'paneles',
            'display_name' => 'paneles',
            'family_id' => 2,
            'description' =>Str::random(20),
        ]);
      }
}

