<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('families')->insert([
            'name' => 'familia_1',
            'display_name' => 'Familia 1',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_2',
            'display_name' => 'Familia 2',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_3',
            'display_name' => 'Familia 3',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_4',
            'display_name' => 'Familia 4',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_5',
            'display_name' => 'Familia 5',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_6',
            'display_name' => 'Familia 6',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'familia_6',
            'display_name' => 'Familia 6',
            'description' =>Str::random(20),
        ]);
    }
}
