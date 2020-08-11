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
            'name' => 'motores_de_cortina',
            'display_name' => 'motores de cortina',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'barreras_de_acero',
            'display_name' => 'barreras de acero',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_corredizos',
            'display_name' => 'motores corredizos',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_ascendentes',
            'display_name' => 'motores ascendentes',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_seccionales',
            'display_name' => 'puertas seccionales',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_tubulares',
            'display_name' => 'motores tubulares',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'herrajes',
            'display_name' => 'herrajes',
            'family_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'cortinas_anti_huracan',
            'display_name' => 'cortinas anti-huracán',
            'family_id' => 1
        ]);


        //Industriales


        DB::table('categories')->insert([
            'name' => 'puertas_automaticas',
            'display_name' => 'puertas automáticas',
            'family_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_revolventes',
            'display_name' => 'puertas revolventes',
            'family_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_de_quirofano',
            'display_name' => 'puertas de quirofano',
            'family_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'puertas_rapidas',
            'display_name' => 'puertas rápidas',
            'family_id' => 2
        ]);

        
        DB::table('categories')->insert([
            'name' => 'rampas_de_anden',
            'display_name' => 'rampas_de_anden',
            'family_id' => 2
        ]);
 
        DB::table('categories')->insert([
            'name' => 'sellos',
            'display_name' => 'sellos',
            'family_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'motores_industriales',
            'display_name' => 'motores industriales',
            'family_id' => 2
        ]);


        DB::table('categories')->insert([
            'name' => 'puertas_de_acero_y_madera',
            'display_name' => 'puertas de acero y madera',
            'family_id' => 2
        ]);
        

        DB::table('categories')->insert([
            'name' => 'cortinas_de_acero',
            'display_name' => 'cortinas de acero',
            'family_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'control_de_acceso',
            'display_name' => 'control de acceso',
            'family_id' => 2
        ]);


        DB::table('categories')->insert([
            'name' => 'puertas_de_impacto',
            'display_name' => 'puertas de impacto',
            'family_id' => 2
        ]);
      }
}

