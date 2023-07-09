<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //create variable and assign data
       $departments = [
            ['department' => 'Administrative'],
            ['department' => 'HR'],
            ['department' => 'Sales & Marketing'],
       ];
//create a loop to run multiple
        foreach($departments as $key=> $item){
            Department::create($item);     
        }
        

    }
}
