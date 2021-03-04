<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_characteristics')->insert([
            [
                'characteristic' => 'Menjač'
            ],
            [
                'characteristic' => 'Broj sedišta'
            ],
            [
                'characteristic' => 'Klima'
            ],
            [
                'characteristic' => 'Materijal enterijera'
            ],
            [
                'characteristic' => 'Registrovan do'
            ],
            [
                'characteristic' => 'Vlasništvo'
            ],
            [
                'characteristic' => 'Pogon'
            ],
            [
                'characteristic' => 'Broj vrata'
            ],
            [
                'characteristic' => 'Strana volana'
            ],
            [
                'characteristic' => 'Boja'
            ],
            [
                'characteristic' => 'Boja enterijera'
            ],
            [
                'characteristic' => 'Poreklo vozila'
            ],
            [
                'characteristic' => 'Oštećenje'
            ]
        ]);
    }
}
