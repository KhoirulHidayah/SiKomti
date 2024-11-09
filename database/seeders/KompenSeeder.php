<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KompenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_kompen')->insert([
            [
                'UUID_Kompen' => Str::uuid(),
                'nama_kompen' => 'Kompen A',
                'deskripsi' => 'Deskripsi Kompen A',
                'jenis_tugas' => 1,
                'quota' => 10,
                'jam_kompen' => 5,
                'status_dibuka' => 1,
                'tanggal_mulai' => '2024-01-01',
                'tanggal_akhir' => '2024-01-31',
                'Is_Selesai' => 0,
                'id_kompetensi' => 1,
                'periode_kompen' => '2024'
            ],
        ]);
    }
}
