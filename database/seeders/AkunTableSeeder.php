<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AkunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 20; $i++) { 
            DB::table('akun')->insert([
                'accountID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'jenisAccountID' => $faker->unique()->numberBetween($min = 1, $max = 999999),
                'accountPassword' => $faker->password,
                'accountEmail' => $faker->email,
            ]);
        }
    }
}
