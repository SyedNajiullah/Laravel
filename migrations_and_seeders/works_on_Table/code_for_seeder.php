<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class workn_on_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['hours' => 8, 'employee_id' => 123, 'project_id' => 456], 
            ['hours' => 7, 'employee_id' => 456, 'project_id' => 789], 
            ['hours' => 9, 'employee_id' => 456, 'project_id' => 123],
        ];
        \DB::table('works_on')->insert($data);
    }
}
