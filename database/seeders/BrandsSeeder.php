<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'brand' => 'Alfa Romeo'
            ],
            [
                'brand' => 'Audi'
            ],
            [
                'brand' => 'Austin'
            ],
            [
                'brand' => 'BMW'
            ],
            [
                'brand' => 'Cadillac'
            ],
            [
                'brand' => 'Chevrolet'
            ],
            [
                'brand' => 'Citroen'
            ],
            [
                'brand' => 'Dacia'
            ],
            [
                'brand' => 'Fiat'
            ],
            [
                'brand' => 'Ford'
            ],
            [
                'brand' => 'Honda'
            ],
            [
                'brand' => 'Hyundai'
            ],
            [
                'brand' => 'Jeep'
            ],
            [
                'brand' => 'Kia'
            ],
            [
                'brand' => 'Land Rover'
            ],
            [
                'brand' => 'Mazda'
            ],
            [
                'brand' => 'Mercedes Benz'
            ],
            [
                'brand' => 'Nissan'
            ],
            [
                'brand' => 'Opel'
            ],
            [
                'brand' => 'Peugeot'
            ],
            [
                'brand' => 'Renault'
            ],
            [
                'brand' => 'Seat'
            ],
            [
                'brand' => 'Suzuki'
            ],
            [
                'brand' => 'Škoda'
            ],
            [
                'brand' => 'Toyota'
            ],
            [
                'brand' => 'Volkswagen'
            ],
            [
                'brand' => 'Volvo'
            ],
            [
                'brand' => 'Zastava'
            ],
        ]);
    }
}
