<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    use HasFactory;

    public static function get_mahasiswa(){
        $users = DB::select('select * from mahasiswa');
        return $users;
    }
}
