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
            'nama_provinsi' => 'NAD Aceh'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Barat Daya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Besar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Jaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Singkil',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Tamiang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Tenggara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Aceh Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bener Meriah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bireuen',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gayo Lues',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nagan Raya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pidie',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pidie Jaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Simeulue',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Banda Aceh',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Langsa',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Lhokseumawe',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Sabang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Subulussalam',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sumatera Utara (SUMUT)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Asahan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Batubara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Dairi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Deli Serdang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Humbang Hasundutan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Karo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Labuhanbatu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Labuhanbatu Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Labuhanbatu Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Langkat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mandailing Natal',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nias',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nias Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nias Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nias Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Padang Lawas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Padang Lawas Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pakpak Bharat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Samosir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Serdang Bedagai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Simalungun',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tapanuli Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tapanuli Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tapanuli Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Toba Samosir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Binjai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Gunungsitoli',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Medan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Padangsidempuan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pematangsiantar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Sibolga',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tanjungbalai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tebing Tinggi',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sumatera Barat (SUMBAR)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Agam',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Dharmasraya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Mentawai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lima Puluh Kota',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Padang Pariaman',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pasaman',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pasaman Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pesisir Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sijunjung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Solok',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Solok Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanah Datar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bukittinggi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Padang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Padangpanjang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pariaman',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Payakumbuh',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Sawahlunto',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Solok',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sumatera Selatan (SUMSEL)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banyuasin',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Empat Lawang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lahat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Muara Enim',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Musi Banyuasin',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Musi Rawas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Musi Rawas Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ogan Ilir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ogan Komering Ilir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ogan Komering Ulu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ogan Komering Ulu Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ogan Komering Ulu Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Penukal Abab Lematang Ilir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Lubuklinggau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pagar Alam',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Palembang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Prabumulih',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Riau'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bengkalis',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Indragiri Hilir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Indragiri Hulu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kampar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Meranti',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kuantan Singingi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pelalawan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Rokan Hilir',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Rokan Hulu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Siak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Dumai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pekanbaru',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kepulauan Riau (KEPRI)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bintan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Karimun',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Anambas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lingga',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Natuna',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Batam',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tanjung Pinang',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Jambi'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Batanghari',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bungo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kerinci',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Merangin',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Muaro Jambi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sarolangun',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanjung Jabung Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanjung Jabung Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tebo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Jambi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Sungai Penuh',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Bengkulu'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bengkulu Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bengkulu Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bengkulu Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kaur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepahiang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lebong',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mukomuko',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Rejang Lebong',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Seluma',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bengkulu',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Bangka Belitung (BABEL)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangka',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangka Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangka Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangka Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Belitung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Belitung Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pangkal Pinang',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Lampung'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lampung Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lampung Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lampung Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lampung Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lampung Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mesuji',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pesawaran',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pesisir Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pringsewu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tulang Bawang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tulang Bawang Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanggamus',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Way Kanan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bandar Lampung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Metro',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Banten'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lebak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pandeglang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Serang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tangerang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Cilegon',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Serang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tangerang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tangerang Selatan',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Jawa Barat (JABAR)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bandung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bandung Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bekasi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bogor',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ciamis',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Cianjur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Cirebon',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Garut',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Indramayu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Karawang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kuningan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Majalengka',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pangandaran',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Purwakarta',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Subang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sukabumi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumedang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tasikmalaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bandung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Banjar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bekasi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bogor',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Cimahi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Cirebon',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Depok',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Sukabumi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tasikmalaya',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Jawa Tengah (JATENG)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banjarnegara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banyumas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Batang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Blora',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Boyolali',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Brebes',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Cilacap',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Demak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Grobogan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jepara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Karanganyar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kebumen',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kendal',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Klaten',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kudus',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Magelang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pati',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pekalongan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pemalang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Purbalingga',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Purworejo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Rembang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Semarang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sragen',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sukoharjo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tegal',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Temanggung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Wonogiri',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Wonosobo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Magelang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pekalongan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Salatiga',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Semarang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Surakarta',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tegal',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Jawa Timur (JATIM)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangkalan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banyuwangi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Blitar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bojonegoro',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bondowoso',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gresik',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jember',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jombang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kediri',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lamongan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lumajang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Madiun',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Magetan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Malang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mojokerto',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nganjuk',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ngawi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pacitan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pamekasan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pasuruan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ponorogo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Probolinggo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sampang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sidoarjo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Situbondo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumenep',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Trenggalek',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tuban',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tulungagung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Batu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Blitar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Kediri',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Madiun',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Malang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Mojokerto',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pasuruan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Probolinggo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Surabaya',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'DKI Jakarta'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kota Administrasi Jakarta Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Administrasi Jakarta Pusat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Administrasi Jakarta Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Administrasi Jakarta Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Administrasi Jakarta Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Administrasi Kepulauan Seribu',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Daerah Istimewa Yogyakarta'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bantul',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gunungkidul',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kulon Progo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sleman',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Yogyakarta',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Bali'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Badung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bangli',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buleleng',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gianyar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jembrana',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Karangasem',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Klungkung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tabanan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Denpasar',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Nusa Tenggara Barat (NTB)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bima',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Dompu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lombok Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lombok Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lombok Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lombok Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumbawa',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumbawa Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bima',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Mataram',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Nusa Tenggara Timur (NTT)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Alor',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Belu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ende',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Flores Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kupang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lembata',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Malaka',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Manggarai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Manggarai Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Manggarai Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ngada',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nagekeo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Rote Ndao',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sabu Raijua',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sikka',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumba Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumba Barat Daya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumba Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sumba Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Timor Tengah Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Timor Tengah Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Kupang',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kalimantan Barat (KALBAR)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bengkayang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kapuas Hulu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kayong Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Ketapang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kubu Raya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Landak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Melawi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mempawah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sambas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sanggau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sekadau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sintang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Pontianak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Singkawang',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kalimantan Selatan (KALSEL)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Balangan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banjar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Barito Kuala',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Hulu Sungai Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Hulu Sungai Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Hulu Sungai Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kotabaru',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tabalong',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanah Bumbu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tanah Laut',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tapin',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Banjarbaru',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Banjarmasin',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kalimantan Tengah (KALTENG)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Barito Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Barito Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Barito Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gunung Mas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kapuas',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Katingan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kotawaringin Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kotawaringin Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lamandau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Murung Raya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pulang Pisau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sukamara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Seruyan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Palangka Raya',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kalimantan Timur (KALTIM)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Berau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kutai Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kutai Kartanegara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kutai Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mahakam Ulu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Paser',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Penajam Paser Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Balikpapan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bontang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Samarinda',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Kalimantan Utara (KALTARA)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bulungan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Malinau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nunukan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tana Tidung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tarakan',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Gorontalo'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Boalemo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bone Bolango',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gorontalo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gorontalo Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pohuwato',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Gorontalo',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sulawesi Selatan (SULSEL)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bantaeng',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Barru',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bone',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bulukumba',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Enrekang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Gowa',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jeneponto',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Selayar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Luwu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Luwu Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Luwu Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maros',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pangkajene dan Kepulauan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pinrang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sidenreng Rappang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sinjai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Soppeng',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Takalar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tana Toraja',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Toraja Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Wajo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Makassar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Palopo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Parepare',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sulawesi Tenggara (SULTRA)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bombana',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buton',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buton Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buton Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buton Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kolaka',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kolaka Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kolaka Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Konawe',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Konawe Kepulauan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Konawe Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Konawe Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Muna',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Muna Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Wakatobi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bau-Bau',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Kendari',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sulawesi Tengah (SULTENG)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banggai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banggai Kepulauan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Banggai Laut',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buol',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Donggala',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Morowali',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Morowali Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Parigi Moutong',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Poso',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sigi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tojo Una-Una',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Toli-Toli',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Palu',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sulawesi Utara (SULUT)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bolaang Mongondow',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bolaang Mongondow Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bolaang Mongondow Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Bolaang Mongondow Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Sangihe',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Siau Tagulandang Biaro',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Talaud',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Minahasa',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Minahasa Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Minahasa Tenggara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Minahasa Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Bitung',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Kotamobagu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Manado',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tomohon',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Sulawesi Barat (SULBAR)'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Majene',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamasa',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamuju',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamuju Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamuju Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Polewali Mandar',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Mamuju',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Maluku'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buru',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Buru Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Aru',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maluku Barat Daya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maluku Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maluku Tenggara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maluku Tenggara Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Seram Bagian Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Seram Bagian Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Ambon',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tual',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Maluku Utara'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Halmahera Barat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Halmahera Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Halmahera Utara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Halmahera Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Sula',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Halmahera Timur',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pulau Morotai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pulau Taliabu',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Ternate',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Tidore Kepulauan',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Papua'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Asmat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Biak Numfor',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Boven Digoel',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Deiyai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Dogiyai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Intan Jaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jayapura',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Jayawijaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Keerom',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kepulauan Yapen',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Lanny Jaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamberamo Raya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mamberamo Tengah',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mappi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Merauke',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Mimika',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nabire',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Nduga',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Paniai',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pegunungan Bintang',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Puncak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Puncak Jaya',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sarmi',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Supiori',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tolikara',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Waropen',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Yahukimo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Yalimo',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kota Jayapura',
            'provinsi_id' => $provinsi->id
        ]);

        $provinsi = Provinsi::create([
            'nama_provinsi' => 'Papua Barat'
        ]);

        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Fakfak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Kaimana',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Manokwari',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Manokwari Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Maybrat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Pegunungan Arfak',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Raja Ampat',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sorong',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Sorong Selatan',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Tambrauw',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Teluk Bintuni',
            'provinsi_id' => $provinsi->id
        ]);
        $kota = Kota::create([
            'nama_kota' => 'Kabupaten Teluk Wondama',
            'provinsi_id' => $provinsi->id
        ]);
    }
}
