<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partie;
class PartieSeeder extends Seeder
{
    public function run(): void
    {
        $data = file_get_contents("https://deskplan.lv/muita/app.json");
        $muitaData = json_decode($data, true);
        $parties = $muitaData['parties'];

        foreach($parties as $partie){
            Partie::create([
                'id' => $partie['id'],
                'type' => $partie['type'],
                'name' => $partie['name'],
                'reg_code' => $partie['reg_code'],
                'vat' => $partie['vat'],
                'country' => $partie['country'],
                'email' => $partie['email'],
                'phone' => $partie['phone'],

            ]);
        }
    }
}
