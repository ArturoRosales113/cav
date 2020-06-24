<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'puertas_rapidas',
            'display_name' => 'puertas rápidas',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_automaticas',
            'display_name' => 'puertas automáticas',
            'description' =>Str::random(20),
        ]);


        DB::table('categories')->insert([
            'name' => 'motores_industriales',
            'display_name' => 'motores industriales',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'sellos',
            'display_name' => 'sellos',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_de_acero',
            'display_name' => 'puertas de acero',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'control_de_acceso',
            'display_name' => 'control de acceso',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_de_quirofano',
            'display_name' => 'puertas de quiirofano',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'rampas',
            'display_name' => 'rampas',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'cortinas_de_acero',
            'display_name' => 'cortinas de acero',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'herrajes',
            'display_name' => 'herrajes',
            'description' =>Str::random(20),
        ]);

        DB::table('categories')->insert([
            'name' => 'paneles',
            'display_name' => 'paneles',
            'description' =>Str::random(20),
        ]);
      }
}

