<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('computers')->insert([
                'computer_name' => $faker->unique()->word . '-PC' . $faker->randomNumber(2),
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP EliteDesk 800 G6', 'Lenovo ThinkCentre M70']),
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Windows 11', 'Ubuntu 22.04']),
                'processor' => $faker->randomElement(['Intel Core i5-11400', 'Intel Core i7-10700', 'AMD Ryzen 5 5600X']),
                'memory' => $faker->randomElement([8, 16, 32, 64]),
                'available' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
