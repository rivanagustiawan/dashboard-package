<?php

namespace Rivan\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $data = HTTP::withHeaders([
            'Accept' => 'application/json'
        ])->get('http://127.0.0.1:8000/api/barang-low-stock');

        return view('dashboard::dashboard', [
            'data' => $data['data']
        ]);
    }
    public function dataBarang(){
        return view('dashboard::data-barang');
    }

    public function getBarang(Request $request){
        $data = HTTP::withHeaders([
            'Accept' => 'application/json'
        ])->get('http://127.0.0.1:8000/api/barang-by-idcabang/'.$request['id']);

        return view('dashboard::list-barang', [
            'data' => $data['data_barang']
        ]);
    }
}
