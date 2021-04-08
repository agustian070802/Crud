<?php

namespace Database\Seeders;

use App\Models\Spp;
use Illuminate\Database\Seeder;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spp::create([
            'id' => '111',
            'no_spp' => '1111111111',
            'tahun' => '2021',
            'Nominal' => '1000000',
        ]);
        Spp::create([
            'id' => '222',
            'no_spp' => '2222',
            'tahun' => '2021',
            'Nominal' => '1900000',
        ]);
        Spp::create([
            'id' => '333',
            'no_spp' => '3333',
            'tahun' => '2021',
            'Nominal' => '2000000',
        ]);
        Spp::create([
            'id' => '444',
            'no_spp' => '4444',
            'tahun' => '2021',
            'Nominal' => '2100000',
        ]);
        Spp::create([
            'id' => '555',
            'no_spp' => '5555',
            'tahun' => '2021',
            'Nominal' => '3500000',
        ]);
        Spp::create([
            'id' => '666',
            'no_spp' => '6666',
            'tahun' => '2021',
            'Nominal' => '4500000',
        ]);
        Spp::create([
            'id' => '777',
            'no_spp' => '7777',
            'tahun' => '2021',
            'Nominal' => '4000000',
        ]);
    }
}
