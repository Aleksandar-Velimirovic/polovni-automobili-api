<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicsValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics_values')->insert([
            // [
            //     'value' => 'Euro 1',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Euro 2',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Euro 3',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Euro 4',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Euro 5',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Euro 6',
            //     'characteristic_id' => 1
            // ],
            // [
            //     'value' => 'Poluautomatski',
            //     'characteristic_id' => 2
            // ],
            // [
            //     'value' => 'Automatski',
            //     'characteristic_id' => 2
            // ],
            // [
            //     'value' => 'Manuelni 4 brzine',
            //     'characteristic_id' => 2
            // ],
            // [
            //     'value' => 'Manuelni 5 brzine',
            //     'characteristic_id' => 2
            // ],
            // [
            //     'value' => 'Manuelni 6 brzine',
            //     'characteristic_id' => 2
            // ],
            // [
            //     'value' => '2',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '3',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '4',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '5',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '6',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '7',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '8',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => '9',
            //     'characteristic_id' => 3
            // ],
            // [
            //     'value' => 'Nema',
            //     'characteristic_id' => 4
            // ],
            // [
            //     'value' => 'Manuelna',
            //     'characteristic_id' => 4
            // ],
            // [
            //     'value' => 'Automatska',
            //     'characteristic_id' => 4
            // ],
            // [
            //     'value' => 'Štof',
            //     'characteristic_id' => 5
            // ],
            // [
            //     'value' => 'Prirodna koža',
            //     'characteristic_id' => 5
            // ],
            // [
            //     'value' => 'Kombinovana koža',
            //     'characteristic_id' => 5
            // ],
            // [
            //     'value' => 'Velur',
            //     'characteristic_id' => 5
            // ],
            // [
            //     'value' => 'Drugi',
            //     'characteristic_id' => 5
            // ],
            // [
            //     'value' => '02. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '03. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '04. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '05. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '06. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '07. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '08. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '09. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '10. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '11. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '12. 2021',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '01. 2022',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => '02. 2022',
            //     'characteristic_id' => 6
            // ],
            // [
            //     'value' => 'Vodi se na prodavca',
            //     'characteristic_id' => 7
            // ],
            // [
            //     'value' => 'Ne vodi se na prodavca',
            //     'characteristic_id' => 7
            // ],
            // [
            //     'value' => 'Zadnji',
            //     'characteristic_id' => 8
            // ],
            // [
            //     'value' => 'Prednji',
            //     'characteristic_id' => 8
            // ],
            // [
            //     'value' => '4x4',
            //     'characteristic_id' => 8
            // ],
            // [
            //     'value' => '4x4 reduktor',
            //     'characteristic_id' => 8
            // ],
            // [
            //     'value' => '2',
            //     'characteristic_id' => 9
            // ],
            // [
            //     'value' => '3',
            //     'characteristic_id' => 9
            // ],
            // [
            //     'value' => '4',
            //     'characteristic_id' => 9
            // ],
            // [
            //     'value' => '5',
            //     'characteristic_id' => 9
            // ],
            // [
            //     'value' => 'Leva',
            //     'characteristic_id' => 10
            // ],
            // [
            //     'value' => 'Desna',
            //     'characteristic_id' => 10
            // ],
            // [
            //     'value' => 'Bela',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Bez',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Braon',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Crvena',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Plava',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Siva',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Srebrna',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Zuta',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Crna',
            //     'characteristic_id' => 11
            // ],
            // [
            //     'value' => 'Smedja',
            //     'characteristic_id' => 12
            // ],
            // [
            //     'value' => 'Siva',
            //     'characteristic_id' => 12
            // ],
            // [
            //     'value' => 'Bez',
            //     'characteristic_id' => 12
            // ],
            // [
            //     'value' => 'Druga',
            //     'characteristic_id' => 12
            // ],
            // [
            //     'value' => 'Crna',
            //     'characteristic_id' => 12
            // ],
            // [
            //     'value' => 'Domaće tablice',
            //     'characteristic_id' => 13
            // ],
            // [
            //     'value' => 'Strane tablice',
            //     'characteristic_id' => 13
            // ],
            // [
            //     'value' => 'Na ime kupca',
            //     'characteristic_id' => 13
            // ],
            [
                'value' => 'Nije oštećen',
                'characteristic_id' => 14
            ],
            [
                'value' => 'Oštećen u voznom stanju',
                'characteristic_id' => 14
            ],
            [
                'value' => 'Oštećen nije u voznom stanju',
                'characteristic_id' => 14
            ]
        ]);
    }
}
