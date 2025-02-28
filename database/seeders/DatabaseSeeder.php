<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Marketing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'email' => 'admin@mail',
            'nama' => 'admin',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'nama' => 'Test User',
            'email' => 'user@mail',
            'jk' => 'PEREMPUAN',
            'no_hp' => '085740652176',
            'password' => bcrypt('123'),
        ]);

        

        User::factory(10)->create();

        $this->call([
            spesifikasiSeeder::class,
            typeSeeder ::class,
            MetodeSeeder::class,
            // PropertySeeder::class,
        ]);
    }
}
