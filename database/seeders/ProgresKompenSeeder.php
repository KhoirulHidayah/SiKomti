<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProgresKompenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_progres_kompen')->insert([
            [
                'nama_progres' => 'Progres 1',
                'bukti_kompen' => 'bukti1.jpg',
                'UUID_Kompen' => '5098eec1-ad0b-4c37-a632-d1dad5054951',
                'ni' => '2241760074'
            ],
        ]);
    }
}
