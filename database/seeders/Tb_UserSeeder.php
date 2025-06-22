<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Sesuaikan dengan nama model yang kamu gunakan
use Illuminate\Support\Facades\Hash;

class Tb_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin', // Set role admin
        ]);

        User::create([
            'name' => 'Nakes',
            'email' => 'nakes@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'nakes', // Set role nakes
        ]);

        User::create([
            'name' => 'Ibu Hamil',
            'email' => 'ibu@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'ibu_hamil', // Set role ibu_hamil
        ]);

        User::create([
            'name' => 'Puskesmas',
            'email' => 'puskesmas@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'puskesmas', // Set role puskesmas
        ]);

        User::create([
            'name' => 'Dinas',
            'email' => 'dinas@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dinas', // Set role dinas
        ]);
    }
}
