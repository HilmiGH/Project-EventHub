<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 200; $i++) {
            $city = $faker->city;
            $city = str_replace('Administrasi ', '', $city);
            
            DB::table('events')->insert([
                'jenisAccountID' => '3',
                'eventID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'eoID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'jenisAccountID' => '3',
                'eventName' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'eventType' => $faker->randomElement($array = array ('Online','Offline')),
                'eventLocation' => $city,
                'eventDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'numberOfMC' => $faker->numberBetween($min = 1, $max = 10),
                'eventDescription' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'eventImage' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
