<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('projects')->insert([
            'title'       => $faker->colorName(),
            'description' => $faker->text(),
            'active'        => true,
        ]);
    }
}
