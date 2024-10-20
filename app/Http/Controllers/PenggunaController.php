<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function get(){
        //mengambil dari database
        $pengguna=Pengguna::get();
        // $pengguna=Pengguna::all();
        //menampilkan data ke view
        return view ('study_pengguna',['data'=>$pengguna]);
        
    } 
    public function insert(Request $request){
        $pengguna=Pengguna::insert($request);
        echo $pengguna;
    }
}