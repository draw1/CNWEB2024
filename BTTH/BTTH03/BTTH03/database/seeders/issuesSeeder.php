<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class issuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('issues')->insert([
            ['computer_id' => 1, 'reported_by' => 'Anh A', 'reported_date' => '2023-2-2', 'description' => 'Hỏng màn', 'urgency' => 'Medium', 'status' => 'Resolved'],
            ['computer_id' => 2, 'reported_by' => 'Anh B', 'reported_date' => '2024-9-10', 'description' => 'Hỏng card màn hình', 'urgency' => 'High', 'status' => 'In Progress'],
        ]);
    }
}
