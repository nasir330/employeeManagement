<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //create variable and assign data
    $designation = [
        [
            'departmentId' => '1',
            'designation' => 'Manager',
        ],
        [
            'departmentId' => '2',
            'designation' => 'Manager',
        ],                    
        [
            'departmentId' => '3',
            'designation' => 'Manager',
        ]                    
    ];
//create a loop to run multiple
        foreach($designation as $key=> $item){
            Designation::create($item);     
        }
        

    }
}
