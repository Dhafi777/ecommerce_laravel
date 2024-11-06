<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        User::create([
=======
       User::create([
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
<<<<<<< HEAD

        Skripsi::create([
            'judul' => 'Pengaruh terhadap Lingkungan sekitar', 
            'nama' => 'Sahrul Gunawan',
            'nim' => 6304221495,
            'angkatan' => 2024,
            'dosenPembimbing1' => 'Fajri Profesio Putra,M.Cs',
            'dosenPembimbing2' => 'Muhammad Ridho Nosa, ST., M.Kom',
        ]);
        
    }
}
=======
        Skripsi::create([
            'judul' => 'Pengembangan Aplikasi Pemantauan Lingkungan menggunakan Sensor IoT pada Perangkat Mobile',
            'nama' => 'Dhafi Nurhadi',
            'nim' => 'dhafi@gmail.com',
            'angkatan' => '2022',
            'dospem1' => 'Fajri Profesio',
            'dospem2' => 'Niki Hardinata',
        ]);
    }
}

>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
