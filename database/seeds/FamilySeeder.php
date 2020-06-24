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
            'name' => 'residencial',
            'display_name' => 'residencial',
            'description' =>Str::random(20),
        ]);
        DB::table('families')->insert([
            'name' => 'industrial',
            'display_name' => 'industrial',
            'description' =>Str::random(20),
        ]);

    }
}
