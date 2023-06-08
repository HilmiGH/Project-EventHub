<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AkunEOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 20; $i++) { 
            DB::table('akuneo')->insert([
                'eoID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'eoName' => $faker->unique()->name,
                'eoType' => $faker->jobTitle,
                'eoDomicile' => $faker->city,
                'eoContactPerson' => $faker->name,
                'eoEventCatagory' => $faker->jobTitle,
                'jenisAccountID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'eoImage' => $faker->imageUrl($width = 640, $height = 480)
            ]);
        }
    }
}
