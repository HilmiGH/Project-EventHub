<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AkunUmumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        //loop this seeder
        for ($i = 0; $i <= 20; $i++) {
            DB::table('akunumum')->insert([
                'jenisAccountID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'umumID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'umumUsername' => $faker->unique()->firstName(),
                'umumFullName' => $faker->name,
                'umumPhone' => $faker->phoneNumber,
                'umumCity' => $faker->city,
                'umumDOB' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null),
                'umumPhoto' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
