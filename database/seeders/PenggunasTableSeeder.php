<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $penggunas = [
        [
        'nama' => 'fahri',
        'email' => 'fahri @example.com',
      ],
      [
        
        'nama' => 'mas tio',
        'email' => 'tiomas@example.com',
      ]];

      DB::table('penggunas')->insert($penggunas);
    }
}