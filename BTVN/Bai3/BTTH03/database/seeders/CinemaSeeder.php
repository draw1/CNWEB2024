<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            'id' => '601',
            'name' => 'Lotte Cinema',
            'location' => 'Tầng 3, BigC Thăng Long, 222 Trần Duy Hưng, Trung Hòa, Cầu Giấy, Hà Nội',
            'total_seats' => 500,
        ]);

        DB::table('cinemas')->insert([
            'id' => '501',
            'name' => 'Rạp chiếu phim quốc gia',
            'location' => '87 Láng Hạ, Quận Ba Đình, Hà Nội',
            'total_seats' => 250,
        ]);
    }
}
