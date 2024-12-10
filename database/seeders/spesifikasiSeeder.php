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
            ['nama_spesifikasi' => '84LT62LB3K2T', 'luas_tanah' =>  '84', 'luas_bangunan' => '62', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => '72LT45LB4K3T', 'luas_tanah' =>  '72', 'luas_bangunan' => '45', 'kamar' => 4 , 'wc' => '3'],
        ];

        Spesifikasi::insert($spesifikasi);
    }
}
