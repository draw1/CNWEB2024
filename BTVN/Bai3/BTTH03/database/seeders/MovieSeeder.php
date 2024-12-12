<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['title' => 'Avengers: Endgame', 'director' => '"Anthony và Joe Russo', 'release date' => '2019-04-26', 'duration' => 181, 'cinema_id' => 601],
            ['title' => 'Đào, phở và piano', 'director' => '"Phi Tiến Sơn', 'release date' => '2024-02-22', 'duration' => 100, 'cinema_id' => 501],
        ]);
    }
}
