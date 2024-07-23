<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employee_seeder extends Seeder
{
    public function run(): void
    {


        $data = [
            ['SSN' => 123, 'Bdate' => '1980-1-1', 'Fname' => 'John', 'Minit' => 'D', 'Lname' => 'Joe', 'Address' => '12B raiwind road Lahore', 'salary' => 000100000.00, 'Sex' => 'male', 'department_id' => 123],
            ['SSN' => 456, 'Bdate' => '1990-1-1', 'Fname' => 'Jelly', 'Minit' => 'D', 'Lname' => 'shemetman', 'Address' => '12B DHA Lahore', 'salary' => 000090000.00, 'Sex' => 'male', 'department_id' => 123],
            ['SSN' => 789, 'Bdate' => '2000-1-1', 'Fname' => 'Mary', 'Minit' => 'J', 'Lname' => 'johnson', 'Address' => '200B LDA Lahore', 'salary' => 000100000.00, 'Sex' => 'female', 'department_id' => 456],
            ['SSN' => 234, 'Bdate' => '2000-1-1', 'Fname' => 'Harry', 'Minit' => 'B', 'Lname' => 'gayle', 'Address' => '90C valentia Lahore', 'salary' => 000050000.00, 'Sex' => 'male', 'department_id' => 789],
        ];
        
        foreach($data as $row){
            \DB::table('employee')->insert($row);
        }
    }
}
