<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admindkukmkabsukabumi'),
        ]);

        // User::create([
        //     'name' => 'Domdom',
        //     'username' => 'domdom',
        //     'role' => 'admin',
        //     'password' => bcrypt('admin'),
        // ]);

        // User::create([
        //     'name' => 'Dandhi',
        //     'username' => 'dandhi',
        //     'role' => 'user',
        //     'password' => bcrypt('user'),
        // ]);
    }
}
