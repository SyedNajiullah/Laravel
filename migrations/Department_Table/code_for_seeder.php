<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class department_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['department_number' => 123, 'department_name' => 'FOIT'],
            ['department_number' => 456, 'department_name' => 'BBA'],
            ['department_number' => 789, 'department_name' => 'Eng_Literature'],
        ];

        foreach($data as $row){
            \DB::table('DEPARTMENT')->insert($row);
        }
    }
}
