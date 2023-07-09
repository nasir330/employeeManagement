<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;
class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //create variable and assign data
       $userType = [
            ['type' => 'Super Admin'],
            ['type' => 'Admin'],
            ['type' => 'Employee'],
            ['type' => 'Client'],
       ];
//create a loop to run multiple
        foreach($userType as $key=> $item){
            UserType::create($item);     
        }
        

    }
}
