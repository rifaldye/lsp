<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Jawa Barat'
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Bandung',
            'provinsi_id' => $provinsi->id
        ]);
    }
}
