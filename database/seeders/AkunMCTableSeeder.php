<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AkunMCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 20; $i++) { 
            DB::table('akunmc')->insert([
                'mcID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'mcUsername' => $faker->unique()->firstName(),
                'mcFullName' => $faker->name,
                'mcPhone' => $faker->phoneNumber,
                'jenisAccountID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'mcDOB' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null),
                'mcLanguage' => $faker->languageCode,
                'mcPriceMin' => $faker->numberBetween($min = 100000, $max = 500000),
                'mcPriceMax' => $faker->numberBetween($min = 500000, $max = 1000000),
                'mcCity' => $faker->city,
                'mcSpecialization' => $faker->jobTitle,
                'mcExperience' => $faker->text($maxNbChars = 200),
                'ratingMCID' => $faker->numberBetween($min = 1, $max = 5),
                'mcImage' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }

    }
}
