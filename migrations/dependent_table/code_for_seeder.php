<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dependent_table extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'Syed Najiullah', 'sex' => 'male', 'birth_date' => '2004-7-29', 'relationship' => 'child', 'employee_id' => 123], 
            ['name' => 'Muhammad Idrees', 'sex' => 'male', 'birth_date' => '2003-8-15', 'relationship' => 'child', 'employee_id' => 456],
            ['name' => 'Seraz khan', 'sex' => 'male', 'birth_date' => '2004-2-29', 'relationship' => 'brother', 'employee_id' => 789], 
            ['name' => 'Malika', 'sex' => 'female', 'birth_date' => '2004-1-29', 'relationship' => 'wife', 'employee_id' => 789],
        ];
        foreach($data as $row){
            \DB::table('dependent')->insert($row);
        }
    }
}
