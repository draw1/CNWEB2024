<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    public function run()
    {
        DB::table('sales')->insert([
            [
                'medicine_id' => 1,
                'quantity' => 2,
                'sale_date' => '2024-02-12 14:00:00',
                'customer_phone' => '1234567890',
            ],
            [
                'medicine_id' => 2,
                'quantity' => 1,
                'sale_date' => '2024-02-13 10:30:00',
                'customer_phone' => '0987654321',
            ],
        ]);
    }
}
