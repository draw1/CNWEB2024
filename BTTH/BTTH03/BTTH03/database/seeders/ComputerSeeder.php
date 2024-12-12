<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            ['computer_name' => 'Lab1-PC05', 'model' => 'Dell Optiplex 7090', 'operating_system' => 'Window 10 Pro', 'processor' => 'Intel Core i5-11400', 'memory' => 8, 'available' => true],
            ['computer_name' => 'DESKTOP-JK64FS5', 'model' => 'Unknown', 'operating_system' => 'Window 11 Pro', 'processor' => 'Intel Core i3-12100f', 'memory' => 16, 'available' => true],
        ]);
    }
}
