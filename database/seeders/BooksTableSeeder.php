<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                
                'nama_buku' => 'Laskar Pelangi',
                'pengarang_buku' => 'Andrea Hirata',
               
            ],
            [
               
                'nama_buku' => 'Bumi Manusia',
                'pengarang_buku' => 'Pramoedya Ananta Toer',
               
            ],
            [
               
                'nama_buku' => 'Pulang',
                'pengarang_buku' => 'Tere Liye',
               
            ],
            [
                
                'nama_buku' => 'Dilan 1990',
                'pengarang_buku' => 'Pidi Baiq',
               
            ],
            [
                
                'nama_buku' => 'Filosofi Teras',
                'pengarang_buku' => 'Henry Manampiring',
               
            ],
        ];

        DB::table('books')->insert($books);
    }
    }