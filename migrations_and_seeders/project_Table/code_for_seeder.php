<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class project_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['project_number' => 123, 'name' => 'Techniqal Barber', 'location' => '29A OPF lahore', 'department_id' => 123],
            ['project_number' => 456, 'name' => 'AI decoration power', 'location' => '29A DHA lahore', 'department_id' => 456],
            ['project_number' => 789, 'name' => 'Scan Finder', 'location' => '29A Raiwind lahore', 'department_id' => 789],
        ];
        \DB::table('project')->insert($data);
    }
}
