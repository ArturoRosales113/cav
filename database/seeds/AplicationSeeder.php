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
    public function run()
    {
        
        DB::table('aplications')->insert([
            'name' => 'hospital',
            'display_name' => 'hospital',
            'description' => str_random(10),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'hotel',
            'display_name' => 'hotel',
            'description' => str_random(10),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'autoservicio',
            'display_name' => 'autoservicio',
            'description' => str_random(10),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'industria',
            'display_name' => 'industria',
            'description' => str_random(10),
            'family_id' => 2
        ]);

        DB::table('aplications')->insert([
            'name' => 'aeropuertos',
            'display_name' => 'aeropuertos',
            'description' => str_random(10),
            'family_id' => 2
        ]);

    }
}
