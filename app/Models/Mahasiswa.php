<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //set fillable
    protected $fillable =[
            "user_id",
            "nama",
            "alamat_ktp",
            "alamat",
            "kecamatan",
            "kota",
            "provinsi",
            "telp",
            "hp",
            "kewarganegaraan",
            "tgl_lahir",
            "tmp_lahir",
            "kota_lahir",
            "prov_lahir",
            "negara_lahir",
            "jenis_kelamin",
            "status",
            "agama",
            
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFillable()
    {
        return $this->fillable;
    }
}
