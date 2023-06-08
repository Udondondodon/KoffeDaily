<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biaya;
use App\Models\Pendapatan;

class BiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $biayaData = [
            ['namabiaya' => 'Biaya Admin', 'nominal' => 2000]
        ];

        Biaya::insert($biayaData);

        $pendapatanData = [
            ['pendapatan' => 0]
        ];

        Pendapatan::insert($pendapatanData);
    }
}
