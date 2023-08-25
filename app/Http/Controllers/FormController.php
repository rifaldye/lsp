<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getProvinsi(){
        $provinsi = Provinsi::all();
        return response()->json($provinsi);
    }

    public function getKota($provinsi_id){
        $kota = Kota::where('provinsi_id', $provinsi_id)->get();
        return response()->json($kota);
    }
}
