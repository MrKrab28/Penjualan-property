<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['nama_type' => 'Type 45', 'keterangan' =>  'Rumah Type 45 45/72 (6x12)'],
            ['nama_type' => 'Type 62', 'keterangan' =>  'Rumah Type 62 62/84 (6x14)'],
        ];

        Type::insert($types);
    }
}
