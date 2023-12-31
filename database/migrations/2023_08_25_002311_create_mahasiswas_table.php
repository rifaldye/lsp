<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("nama");
            $table->string("alamat_ktp");
            $table->string("alamat");
            $table->string("kecamatan");
            $table->integer("kota");
            $table->integer("provinsi");
            $table->string("telp");
            $table->string("hp");
            $table->string("kewarganegaraan");
            $table->date("tgl_lahir");
            $table->string("tmp_lahir");
            $table->integer("kota_lahir")->nullable();
            $table->integer("prov_lahir")->nullable();
            $table->string("negara_lahir")->nullable();
            $table->string("jenis_kelamin");
            $table->string("status");
            $table->string("agama");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
