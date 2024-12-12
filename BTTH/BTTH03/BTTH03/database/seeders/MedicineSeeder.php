<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    public function run()
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'brand' => 'XYZ Pharma',
                'dosage' => '500mg',
                'form' => 'Tablet',
                'price' => 10.50,
                'stock' => 100,
            ],
            [
                'name' => 'Amoxicillin',
                'brand' => 'ABC Pharma',
                'dosage' => '250mg',
                'form' => 'Capsule',
                'price' => 20.00,
                'stock' => 50,
            ],
        ]);
    }
}
