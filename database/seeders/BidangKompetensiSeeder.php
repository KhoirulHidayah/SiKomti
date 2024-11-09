<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangKompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_bidang_kompetensi')->insert([
            ['nama_kompetensi' => 'Pemrograman Dasar'],
            ['nama_kompetensi' => 'Database Fundamental'],
            ['nama_kompetensi' => 'Pengembangan Web'],
            ['nama_kompetensi' => 'Jaringan Komputer'],
            ['nama_kompetensi' => 'Sistem Operasi'],
            ['nama_kompetensi' => 'Analisis dan Desain Sistem'],
            ['nama_kompetensi' => 'Keamanan Informasi'],
            ['nama_kompetensi' => 'Pengolahan Data'],
            ['nama_kompetensi' => 'Pemrograman Mobile'],
            ['nama_kompetensi' => 'Kecerdasan Buatan']
        ]);
    }
}
