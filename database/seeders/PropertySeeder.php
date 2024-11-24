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
            ['property' => 'rumah bumi', 'type_id' => 1, 'spesifikasi_id' => 5, 'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita est ratione, aspernatur, dolorum recusandae dolores sequi ea deleniti excepturi tempora explicabo fugit! Fuga sed molestiae iusto. Magni voluptate labore eius.' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah earth', 'type_id' => 2, 'spesifikasi_id' => 4, 'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, numquam.' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah bumi ', 'type_id' => 3, 'spesifikasi_id' => 3, 'deskripsi' => 'amet consectetur adipisicing elit. Expedita est ratione, aspernatur, dolorum recusandae dolores sequi ea deleniti excepturi tempora explicabo fugit! Fuga sed molestiae iusto. Magni voluptate labore eius.' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah  earth', 'type_id' => 4, 'spesifikasi_id' => 2, 'deskripsi' => 'sit amet consectetur adipisicing elit. Distinctio, numquam.' , 'lokasi' => 'taman sudiang indah' ],
            ['property' => 'rumah bumi', 'type_id' => 5, 'spesifikasi_id' => 1, 'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita est ratione, aspernatur, dolorum' , 'lokasi' => 'taman sudiang indah' ],
        ];

        Property::insert($property);
    }
}


