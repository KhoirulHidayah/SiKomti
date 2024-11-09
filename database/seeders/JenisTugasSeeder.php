<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_jenis_tugas')->insert([
            ['jenis_tugas' => 'Penelitian', 'id_kompetensi' => 1],
            ['jenis_tugas' => 'Pengabdian', 'id_kompetensi' => 2],
            ['jenis_tugas' => 'Teknis', 'id_kompetensi' => 3]
        ]);
    }
}
