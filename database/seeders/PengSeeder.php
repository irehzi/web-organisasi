<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dataps')->insert([
            'nama' => 'Irgi Ahmad Fahrezi',
            'jabatan' => 'pengurus',
            'idbidang' => '101',
            'email' => 'ifahrezi277@gmail.com',
            'username' => '0012',
            'password' => Hash::make('1sampek8'),



        ]);
    }
}
