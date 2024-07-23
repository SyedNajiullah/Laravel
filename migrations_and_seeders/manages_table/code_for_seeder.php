<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class manages_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['start_date' => '2020-1-1', 'department_id' => 123, 'employee_id' => 123],
            ['start_date' => '2019-1-1', 'department_id' => 123, 'employee_id' => 123],
            ['start_date' => '2022-1-1', 'department_id' => 456, 'employee_id' => 456],
            ['start_date' => '2021-1-1', 'department_id' => 789, 'employee_id' => 789],
        ];

        \DB::table('manages')->insert($data);
    }
}
