<?php

namespace App\Http\Controllers;
use App\Models\Ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function listProvinsi(){
        $result=Ongkir::listProvinsi();
        return $result;
    }
    public function getProvinsi($id){
        $result=Ongkir::getProvinsi($id);
        return $result;
    }
    public function listCity(){
        $result=Ongkir::listCity();
        return $result;
    }
    public function getCity($id){
        $result=Ongkir::getCity($id);
        return $result['rajaongkir']['results']['city_name'];
    }
    public function biaya(){
        $result=Ongkir::biaya();
        return $result;
    }
}

