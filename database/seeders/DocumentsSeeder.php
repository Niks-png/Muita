<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);
        $documents=$muitaData['documents'];
        foreach($documents as $document){
            Document::create([
                'id' => $document['id'],
                'user_id'=> $document['user_id'],
               'ip_address'=> $document['ip_address'],
                'user_agent'=> $document['user_agent'],
                'payload'=> $document['payload'],
                'last_activity'=> $document['last_activity'],

            ]);
        }
            
    }
}
