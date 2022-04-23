<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'username' => 'admin',
            'level' => 'admin',
            'email' => 'adminalmuntadhor@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'Pengurus Aplikasi',
            'username' => 'pengurus',
            'level' => 'pengurus',
            'email' => 'pengurusalmuntadhor@gmail.com',
            'password' => bcrypt('pengurus123'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'Arul Rachman Faruqhy',
            'username' => '1903064',
            'level' => 'santri',
            'email' => 'arulrachmanfaruqhy@gmail.com',
            'password' => bcrypt('Arulrf_25'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'Afif Husein',
            'username' => 'afif',
            'level' => 'pendidik',
            'email' => 'afifhusein@gmail.com',
            'password' => bcrypt('afif123'),
            'remember_token' => Str::random(60),
        ]);
    }
}