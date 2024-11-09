<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaKompenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_mahasiswa_kompen')->insert([
            [
                'ni' => '2241760074', // Sesuaikan dengan data di UserSeeder
                'UUID_Kompen' => '5098eec1-ad0b-4c37-a632-d1dad5054951', // Ubah sesuai UUID di t_kompen
                'status_Acc' => 1
            ],
        ]);
    }
}
