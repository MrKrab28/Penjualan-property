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
            ['nama_spesifikasi' => '25LT28LB3K2T', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => '20LT20LB2K2T', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => '35LT38LB3K3T', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => '55LT48LB6K5T', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
            ['nama_spesifikasi' => '45LT38LB4K4T', 'luas_tanah' =>  '45', 'luas_bangunan' => '35', 'kamar' => 3 , 'wc' => '2'],
        ];

        Spesifikasi::insert($spesifikasi);
    }
}
