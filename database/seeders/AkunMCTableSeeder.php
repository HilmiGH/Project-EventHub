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

    $specializations = [
        'Games Night',
        'Debate',
        'Awards Night',
        'Sports',
        'Graduation',
        'Talk show',
        'Party',
        'Tournament',
        'Workshop',
        'Exhibition',
        'Talent Show',
        'Education Class',
        'Seminar',
        'Religious Events'
    ];

    $languages = [
        'ID',  // Indonesian
        'US',  // English (United States)
        'FR',  // French
        'ES',  // Spanish
        'DE',  // German
        'IT',  // Italian
        'JP',  // Japanese
        'CN',  // Chinese
        'KR',  // Korean
        'RU',  // Russian
    ];

    for ($i = 1; $i <= 200; $i++) {
        $city = $faker->city;
        $city = str_replace('Administrasi ', '', $city);

        DB::table('akunmc')->insert([
            'mcID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
            'mcUsername' => $faker->unique()->firstName(),
            'mcFullName' => $faker->name,
            'mcPhone' => $faker->phoneNumber,
            'jenisAccountID' => '2',
            'mcDOB' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null),
            'mcLanguage' => $faker->randomElement($languages),
            'mcPriceMin' => $faker->numberBetween($min = 700000, $max = 999999),
            'mcPriceMax' => $faker->numberBetween($min = 999999, $max = 10000000),
            'mcCity' => $city,
            'mcSpecialization' => $faker->randomElement($specializations),
            'mcExperience' => $faker->text($maxNbChars = 200),
            'ratingMCID' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 5),
            'mcImage' => 'img/Portrait.png',
        ]);
        }
    }

}
