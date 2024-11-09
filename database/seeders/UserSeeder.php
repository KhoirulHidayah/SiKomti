<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_user')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('12345'),
                'nama' => 'Administrator',
                'jurusan' => null, // Jurusan null untuk admin
                'ni' => null, // NI null untuk admin
                'level_id' => 1
            ],
            [
                'username' => 'mahasiswa',
                'password' => Hash::make('12345'),
                'nama' => 'Mahasiswa',
                'jurusan' => 'Informatika', // Jurusan untuk mahasiswa
                'ni' => '2241760074',
                'level_id' => 2
            ],
            [
                'username' => 'dosen',
                'password' => Hash::make('12345'),
                'nama' => 'Dosen',
                'jurusan' => 'Sistem Informasi', // Jurusan untuk dosen
                'ni' => '22471199238',
                'level_id' => 3
            ],
            [
                'username' => 'tendik',
                'password' => Hash::make('12345'),
                'nama' => 'Tendik',
                'jurusan' => null, // Jurusan null untuk tendik
                'ni' => null, // NI null untuk tendik
                'level_id' => 4
            ],
        ]);
    }
}
