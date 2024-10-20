<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function naruto ($kakasi){
        return view('welcome', ["alamat" => "banyuwangi", "nomorsiswa" => $kakasi]);
    }  
}
