<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LibrarySeeder::class,
            BookSeeder::class,
            RenterSeeder::class,
            LaptopSeeder::class,
            ItCenterSeeder::class,
            HardwareDeviceSeeder::class,
            CinemaSeeder::class,
            CinemaSeeder::class,
            MovieSeeder::class,
        ]);
    }
}
