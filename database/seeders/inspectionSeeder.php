<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inspection;


class inspectionSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);
    
        $inspections = $muitaData['inspections'];
        foreach($inspections as $inspection){
            Inspection::create([
                'id' => $inspection['id'],
                'case_id' => $inspection['case_id'],
                'type' => $inspection['type'],
                'requested_by' => $inspection['requested_by'],
                'start_ts' => $inspection['start_ts'],
                'location' => $inspection['location'],
                'checks' => json_encode($inspection['checks']),
                'assigned_to' => $inspection['assigned_to'],
            ]);
        }
    }
}
