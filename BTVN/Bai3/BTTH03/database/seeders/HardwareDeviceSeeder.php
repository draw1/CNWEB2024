<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDeviceSeeder extends Seeder
{
    public function run()
    {
        DB::table('hardware_devices')->insert([
            [
                'device_name' => 'Logitech G502',
                'type' => 'Mouse',
                'status' => true,
                'center_id' => 1
            ],
            [
                'device_name' => 'SteelSeries Apex Pro',
                'type' => 'Keyboard',
                'status' => false,
                'center_id' => 1
            ],
            [
                'device_name' => 'HyperX Cloud II',
                'type' => 'Headset',
                'status' => true,
                'center_id' => 2
            ],
        ]);
    }
}
