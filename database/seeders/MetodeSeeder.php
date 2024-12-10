<?php

namespace Database\Seeders;

use App\Models\Metode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metode = [
            ['nama' => 'Cash', 'jumlah_pembayaran' =>  1 ],
            ['nama' => 'Kredit -150x', 'jumlah_pembayaran' =>  150 ],
            ['nama' => 'Kredit -149x', 'jumlah_pembayaran' =>  149 ],
            ['nama' => 'Kredit -123x', 'jumlah_pembayaran' =>  123 ],
        ];

        Metode::insert($metode);
    }
}
