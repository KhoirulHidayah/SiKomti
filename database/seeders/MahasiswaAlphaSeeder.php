<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaAlphaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_mahasiswa_alpha')->insert([
            ['ni' => '2241760074', 'jam_Alpha' => 10],
            ['ni' => '2241760078', 'jam_Alpha' => 5],
        ]);
    }
}
