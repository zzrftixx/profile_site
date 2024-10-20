<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        FacadesDB::table('users')->insert([
            'nama'=>'andra',
            'prodi'=>'TRPL',
            'alamat'=>'banyuwangi',
        ]);
       
    }
}
