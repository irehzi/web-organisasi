<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::table('users')->insert([
            'name' => 'ZURA',
            'Agama' => 'Islam',
            'jenis_kelamin' => 'Perempuan',
            'email' => 'zura@gmail.com',
            'tempat_dan_tanggal_lahir' => 'Jakarta, 1990-01-01',
            'password' => bcrypt('123456'),
            'role' => 1, // Contoh peran (role), misalnya 1 untuk admin, 0 untuk pengguna biasa
           
        ]);

        user::table('users')->insert([
            'name' => 'Jane Doe',
            'Agama' => 'Kristen',
            'jenis_kelamin' => 'Perempuan',
            'email' => 'shaffa@gmail.com',
            'tempat_dan_tanggal_lahir' => 'Surabaya, 1995-05-05',
            'password' => bcrypt('123456'),
            'role' => 2, // Contoh peran (role), misalnya 1 untuk admin, 0 untuk pengguna biasa
           
        ]);
    }
}
