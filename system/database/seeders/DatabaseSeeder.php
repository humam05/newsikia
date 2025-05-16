<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Dinkes;
use App\Models\Nakes;
use App\Models\Puskesmas;
use App\Models\IbuHamil;
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
        // User::factory(10)->create();

        // Admin::insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // Dinkes::insert([
        //     'name' => 'Dinkes',
        //     'email' => 'dinkes@gmail.com',
        //     'password' => bcrypt('dinkes'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // Nakes::insert([
        //     'name' => 'Nakes',
        //     'email' => 'nakes@gmail.com',
        //     'password' => bcrypt('nakes'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // Puskesmas::insert([
        //     'name' => 'Puskesmas',
        //     'email' => 'puskesmas@gmail.com',
        //     'password' => bcrypt('puskesmas'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // IbuHamil::insert([
        //     'name' => 'IbuHamil',
        //     'email' => 'bumil@gmail.com',
        //     'password' => bcrypt('IbuHamil'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        IbuHamil::insert([
            'name' => 'Ananda',
            'email' => 'nanda@gmail.com',
            'password' => bcrypt('nanda'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
