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
            ['nama' => 'Kredit -155x', 'jumlah_pembayaran' =>  155 ],
        ];

        Metode::insert($metode);
    }
}
