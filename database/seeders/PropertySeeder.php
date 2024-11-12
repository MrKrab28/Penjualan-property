<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $property = [
            ['property' => 'rumah bumi', 'type_id' => 1, 'spesifikasi_id' => 1, 'deskripsi' => 'busur derajat' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah earth', 'type_id' => 1, 'spesifikasi_id' => 1, 'deskripsi' => 'busur derajat' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah bumi ', 'type_id' => 1, 'spesifikasi_id' => 1, 'deskripsi' => 'busur derajat' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah  earth', 'type_id' => 1, 'spesifikasi_id' => 1, 'deskripsi' => 'busur derajat' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah bumi', 'type_id' => 1, 'spesifikasi_id' => 1, 'deskripsi' => 'busur derajat' , 'lokasi' => 'taman sudiang indah' ],
        ];

        Property::insert($property);
    }
}
