<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicalesSeeder extends Seeder
{
    public function run(): void
    {
    $data = file_get_contents("https://deskplan.lv/muita/app.json");
    $muitaData = json_decode($data, true);
    $vehicales=$muitaData['vehicales'];
    foreach($vehicales as $vehical){
  
        User::create([
            'id' => $users['id'],
            'username' => $users['username'],
            'full_name' => $users['full_name'],
            'role' => $users['role'],
            'active' => $users['active'],
            'last_activity' => $users['last_activity'],
        ]); 
    }
    }  
    
}
