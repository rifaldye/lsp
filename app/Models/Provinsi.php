<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [
        'nama_provinsi'
    ];
    use HasFactory;

    public function kota()
    {
        return $this->hasMany(Kota::class);
    }
}
