<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswas extends Controller
{
    public function index(){
        $dosens=Mahasiswa::get_mahasiswa();
        return view('welcome',['datas'=>$dosens]);
    }
}
