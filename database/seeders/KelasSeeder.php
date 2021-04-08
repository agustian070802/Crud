<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'id' => '11',
            'nama_kelas' => 'X-RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);
        Kelas::create([
            'id' => '12',
            'nama_kelas' => 'X-BDP',
            'kompetensi_keahlian' => 'Pemasaran',
        ]);
        Kelas::create([
            'id' => '13',
            'nama_kelas' => 'X-TBSM',
            'kompetensi_keahlian' => 'Teknik Sepeda Motor',
        ]);
        Kelas::create([
            'id' => '14',
            'nama_kelas' => 'X-OTKP',
            'kompetensi_keahlian' => 'Perkantoran',
        ]);
        Kelas::create([
            'id' => '15',
            'nama_kelas' => 'X-AKL',
            'kompetensi_keahlian' => 'Akuntansi',
        ]);
    }
}
