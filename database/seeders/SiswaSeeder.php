<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nisn' => '123456781',
            'nis' => '121',
            'nama' => 'Agustian',
            'id_kelas' => '11',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '111',
            ]);
        Siswa::create([
            'nisn' => '123456782',
            'nis' => '122',
            'nama' => 'Miswi Septi Yosi',
            'id_kelas' => '11',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '111',
            ]);
        Siswa::create([
            'nisn' => '123456783',
            'nis' => '123',
            'nama' => 'Maulana Yusuf',
            'id_kelas' => '15',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '222',
            ]);
        Siswa::create([
            'nisn' => '123456784',
            'nis' => '124',
            'nama' => 'Refal',
            'id_kelas' => '15',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '222',
            ]);
        Siswa::create([
            'nisn' => '123456785',
            'nis' => '125',
            'nama' => 'Yogi',
            'id_kelas' => '14',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '666',
            ]);
        Siswa::create([
            'nisn' => '123456786',
            'nis' => '126',
            'nama' => 'Indah',
            'id_kelas' => '13',
            'alamat' => 'Jln. Gatot Subroto',
            'no_telp' => '087828967175',
            'id_spp' => '444',
            ]);
        
    }
}
