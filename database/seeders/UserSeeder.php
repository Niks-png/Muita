<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
$data = file_get_contents("https://deskplan.lv/muita/app.json");
$muitaData = json_decode($data, true);
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        ]);
    }
}
