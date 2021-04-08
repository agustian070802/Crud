<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'level' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'petugas',
            'level' => 'petugas',
            'password' => bcrypt('petugas'),
        ]);
    }
}
