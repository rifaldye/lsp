<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $fillable = [
        'nama_kota',
        'provinsi_id'
    ];
    use HasFactory;

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
