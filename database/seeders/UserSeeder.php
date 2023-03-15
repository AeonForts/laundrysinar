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
        \App\Models\Member::create([

            'nama' => 'test',
            'alamat' => 'jl_pening',
            'username' => 'eila',
            'password' => bcrypt('123'),
            'jenis_kelamin' => 'laki_laki',
            'tlp' => '081231241',

    ]);
    }
}
