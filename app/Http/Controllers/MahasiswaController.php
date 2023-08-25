<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Mahasiswa;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function create()
    {
        if(Auth::user()->role_id != 1 ){
            return redirect()->route('home');
        }
        $provinsi = Provinsi::all();
        if(Auth::user()->mahasiswa){
            $kota = Kota::where('provinsi_id', Auth::user()->mahasiswa->provinsi)->get();
            $kota_lahir = Kota::where('provinsi_id', Auth::user()->mahasiswa->prov_lahir)->get();
            return view('mahasiswa.edit',['provinsi' => $provinsi, 'kota' => $kota, 'kota_lahir' => $kota_lahir]);
        }else{
            return view('mahasiswa.create',['provinsi' => $provinsi]);
        }
    }

    public function store(Request $request)
    {
        if(Auth::user()->role_id != 1 ){
            return redirect()->route('home');
        }
    if( !Auth::user()->mahasiswa)
    {
        $mahasiswa = Mahasiswa::create([
            "user_id" => Auth::user()->id,
            "nama" => $request->nama,
            "alamat_ktp"=> $request->alamat_ktp,
            "alamat"=> $request->alamat_lengkap,
            "kecamatan"=> $request->kecamatan,
            "kota"=> $request->kota,
            "provinsi"=> $request->provinsi,
            "kecamatan"=> $request->kecamatan,
            "telp"=> $request->telp,
            "hp"=> $request->hp,
            "kewarganegaraan"=> $request->kewarganegaraan_lainnya ? $request->kewarganegaraan_lainnya : $request->kewarganegaraan,
            "tgl_lahir"=> $request->tgl_lahir,
            "tmp_lahir"=> $request->tmp_lahir,
            "kota_lahir"=> $request->kota_lahir,
            "prov_lahir"=> $request->prov_lahir,
            "negara_lahir"=> $request->negara_lahir,
            "jenis_kelamin"=> $request->kelamin,
            "status"=> $request->status_lainnya? $request->status_lainnya : $request->status,
            "agama"=>$request->agama,
        ]);

        return redirect()->route('home', ['success' => 'Data berhasil disimpan']);

    }else{
        $mahasiswa = Auth::user()->mahasiswa;
        $mahasiswa->update([
            "user_id" => Auth::user()->id,
            "nama" => $request->nama,
            "alamat_ktp"=> $request->alamat_ktp,
            "alamat"=> $request->alamat_lengkap,
            "kecamatan"=> $request->kecamatan,
            "kota"=> $request->kota,
            "provinsi"=> $request->provinsi,
            "kecamatan"=> $request->kecamatan,
            "telp"=> $request->telp,
            "hp"=> $request->hp,
            "kewarganegaraan"=> $request->kewarganegaraan_lainnya ? $request->kewarganegaraan_lainnya : $request->kewarganegaraan,
            "tgl_lahir"=> $request->tgl_lahir,
            "tmp_lahir"=> $request->tmp_lahir,
            "kota_lahir"=> $request->kota_lahir,
            "prov_lahir"=> $request->prov_lahir,
            "negara_lahir"=> $request->negara_lahir,
            "jenis_kelamin"=> $request->kelamin,
            "status"=> $request->status_lainnya? $request->status_lainnya : $request->status,
            "agama"=>$request->agama,
        ]);
        return redirect()->route('home', ['success' => 'Data berhasil disimpan']);

    }
       
    }

    public function setujui($id){
        User::where('id', $id)->update([
            'status' => 1
        ]);
        return redirect()->back()->with("success","data berhasil disetujui");
    }

    public function tolak($id){
        User::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with("success","data berhasil ditolak");
    }
}
