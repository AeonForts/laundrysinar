<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([

            'nama' => 'anya',
            'username' => 'kasir1',
            'password' => bcrypt('123'),
            'id_outlet' => '2',
            'role' => 'kasir',
    ]);
    }
}
