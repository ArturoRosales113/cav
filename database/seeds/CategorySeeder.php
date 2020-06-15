<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'categoria_1',
            'display_name' => 'Categoría 1',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_2',
            'display_name' => 'Categoría 2',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_3',
            'display_name' => 'Categoría 3',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_4',
            'display_name' => 'Categoría 4',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_5',
            'display_name' => 'Categoría 5',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_6',
            'display_name' => 'Categoría 6',
            'description' =>Str::random(20),
        ]);
        DB::table('categories')->insert([
            'name' => 'categoria_6',
            'display_name' => 'Categoría 6',
            'description' =>Str::random(20),
        ]);
    }
}

