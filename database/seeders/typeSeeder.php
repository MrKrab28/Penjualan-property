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
            ['nama_type' => 'aselole', 'keterangan' =>  'tidak ada keterangan lebih lanjut'],
            ['nama_type' => 'aselole', 'keterangan' =>  'tidak ada keterangan lebih lanjut'],
            ['nama_type' => 'aselole', 'keterangan' =>  'tidak ada keterangan lebih lanjut'],
            ['nama_type' => 'aselole', 'keterangan' =>  'tidak ada keterangan lebih lanjut'],
            ['nama_type' => 'aselole', 'keterangan' =>  'tidak ada keterangan lebih lanjut'],
        ];

        Type::insert($types);
    }
}
