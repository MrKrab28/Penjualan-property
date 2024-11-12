<?php

namespace Database\Seeders;

use App\Models\Spesifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class spesifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spesifikasi = [
            ['nama_spesifikasi' => 'ahhcrot', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => 'ahhcrot', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => 'ahhcrot', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => 'ahhcrot', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => 'ahhcrot', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
        ];

        Spesifikasi::insert($spesifikasi);
    }
}
