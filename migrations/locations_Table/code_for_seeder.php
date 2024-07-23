<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class locations_seeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['address' => '297C block', 'city' => 'lahore', 'state' => 'punjab','country' => 'Pakistan', 'department_id' => 123],
            ['address' => '297B block', 'city' => 'islamabad', 'state' => null,'country' => 'Pakistan', 'department_id' => 123],
            ['address' => '12A block', 'city' => 'islamabad', 'state' => null,'country' => 'Pakistan', 'department_id' => 456],
            ['address' => '3004D block', 'city' => 'Karachi', 'state' => 'sindh','country' => 'Pakistan', 'department_id' => 789],
            ['address' => '4G block', 'city' => 'multan', 'state' => 'punjab','country' => 'Pakistan', 'department_id' => 789],
        ];
        foreach($data as $row){
            \DB::table('locations')->insert($row);
        }
    }
}
