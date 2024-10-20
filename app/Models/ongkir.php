<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Stmt\Return_;

class ongkir extends Model
{
    use HasFactory;

    public static function getProvinsi($id){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',FALSE)
        ])->get('https://api.rajaongkir.com/starter/province',[ 
            'id' => $id
        ]);
        return $response;
    }
    public static function listProvinsi(){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',FALSE)
        ])->get('https://api.rajaongkir.com/starter/province');
        return $response;
    }
    public static function getCity($id){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',FALSE)
        ])->get('https://api.rajaongkir.com/starter/city',[
            'id' => $id
        ]);
        return $response;
    }
    public static function listCity(){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',FALSE)
        ])->get('https://api.rajaongkir.com/starter/city');
        return $response;
    }
    public static function biaya(){
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY',false)
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => '10',
            'destination' => '12',
            'weight' => 1500,
            'courier' => 'jne',
        ]);
        return $response;
    }
}
