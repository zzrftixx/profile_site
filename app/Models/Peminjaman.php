<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\http\Request;

class Peminjaman extends Model
{
    use HasFactory;

    public static function get_all(){
        $users=DB::table('peminjamans')->get();
        return $users;
    }
    public static function insert(Request $request){
        $insert=DB::table('peminjamans')->insert([
            ['book_id' => $request->nama, 'pengguna_id'=>$request->nama],
        ]);
        return $insert;
    }
}