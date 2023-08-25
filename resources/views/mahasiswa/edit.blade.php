@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Registrasi Mahasiswa Baru</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nama <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="nama" name="nama" value="{{auth::user()->mahasiswa->nama}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Alamat KTP<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="alamat-ktp" name="alamat_ktp" value="{{auth::user()->mahasiswa->alamat_ktp}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Alamat Lengkap<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="alamat-lengkap" name="alamat_lengkap" value="{{auth::user()->mahasiswa->alamat}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Provinsi<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select name="provinsi" class="form-control" required>
                                    <option value="">Pilih Provinsi</option>
                                    @foreach($provinsi as $data)
                                    <option value="{{ $data->id }}" {{auth::user()->mahasiswa->provinsi == $data->id ? "selected":""}} >{{ $data->nama_provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Kota/Kabupaten<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select name="kota" class="form-control" required>
                                    <option value="">Pilih Kota</option>
                                    @foreach($kota as $data)
                                    <option value="{{ $data->id }}" {{auth::user()->mahasiswa->kota == $data->id ? "selected":""}}>{{ $data->nama_kota }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Kecamatan<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="kecamatan" name="kecamatan" value="{{auth::user()->mahasiswa->kecamatan}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nomor Telpon<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="telp" id="telp" name="telp" value="{{auth::user()->mahasiswa->telp}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nomor HP<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="hp" id="hp" name="hp" value="{{auth::user()->mahasiswa->hp}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Email<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="email" name="email" value="{{auth::user()->email}}" readonly type="email" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Kewarganegaraan<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                    <option value="">Pilih Kewarganegaraan</option>
                                    <option value="WNI Asli" {{auth::user()->mahasiswa->kewarganegaraan == "WNI Asli" ? "selected":""}} >WNI Asli</option>
                                    <option value="WNI Keturunan" {{auth::user()->mahasiswa->kewarganegaraan == "WNI Keturunan" ? "selected":""}}>WNI Keturunan</option>
                                    <option value="WNA" {{auth::user()->mahasiswa->kewarganegaraan != "WNI Asli" && auth::user()->mahasiswa->kewarganegaraan != "WNI Keturunan" ? "selected":""}}>WNA, Sebutkan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3" style="display:{{auth::user()->mahasiswa->kewarganegaraan != "WNI Asli" && auth::user()->mahasiswa->kewarganegaraan != "WNI Keturunan" ? "":"none"}};">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Sebutkan<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="kewarganegaraan_lainnya" name="kewarganegaraan_lainnya" value="{{auth::user()->mahasiswa->kewarganegaraan != "WNI Asli" && auth::user()->mahasiswa->kewarganegaraan != "WNI Keturunan" ? auth::user()->mahasiswa->kewarganegaraan:""}}" type="text" class="form-control @error('name') is-invalid @enderror {{auth::user()->mahasiswa->kewarganegaraan == "WNa" ? "required":""}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tanggal Lahir<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="tgl_lahir" name="tgl_lahir" value="{{auth::user()->mahasiswa->tgl_lahir}}" type="date" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tempat Lahir<span class="text-danger">*</span></label>
                            <div class="col -md-6">
                                <input id="tmp_lahir" name="tmp_lahir" value="{{auth::user()->mahasiswa->tmp_lahir}}" type="text" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for=""> saya lahir di luar negeri</label>
                            <div class="col-md-6">

                            <input type="checkbox" id="jenis-lahir" {{auth::user()->mahasiswa->negara_lahir ? "checked":""}} >
                            </div>
                        </div>

                        
                        
                        <div id="lahir-dalam" style="display:{{auth::user()->mahasiswa->negara_lahir ? "none":"block"}}">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Provinsi<span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <select name="prov_lahir" id="prov_lahir" class="form-control" {{auth::user()->mahasiswa->negara_lahir ? "":"required"}}>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($provinsi as $data)
                                        <option value="{{ $data->id }}" {{auth::user()->mahasiswa->prov_lahir == $data->id ? "selected":""}}>{{ $data->nama_provinsi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Kota/Kabupaten<span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <select name="kota_lahir" id="kota_lahir" class="form-control" {{auth::user()->mahasiswa->negara_lahir ? "":"required"}}>
                                        <option value="">Pilih Kota</option>
                                        @foreach($kota_lahir as $data)
                                        <option value="{{ $data->id }}" {{auth::user()->mahasiswa->kota_lahir == $data->id ? "selected":""}}>{{ $data->nama_kota }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="lahir-luar" style="display:{{auth::user()->mahasiswa->negara_lahir ? "block":"none"}};">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Negara<span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="negara_lahir" value="{{auth::user()->mahasiswa->negara_lahir}}" {{auth::user()->mahasiswa->negara_lahir ? "required":""}} class="form-control">
                                </div>
                            </div>

                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Jenis Kelamin<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select name="kelamin" id="kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L" {{auth::user()->mahasiswa->jenis_kelamin == "L" ? "selected":""}}>Laki-Laki</option>
                                    <option value="P" {{auth::user()->mahasiswa->jenis_kelamin == "P" ? "selected":""}}>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Status Menikah<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select id="status" name="status" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="belum menikah" {{auth::user()->mahasiswa->status == "belum menikah" ? "selected":""}}>Belum Menikah</option>
                                    <option value="menikah" {{auth::user()->mahasiswa->status == "menikah" ? "selected":""}}>Menikah</option>
                                    <option value="lainnya" {{auth::user()->mahasiswa->status != "belum menikah" &&  auth::user()->mahasiswa->status != "menikah" ? "selected":""}}>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3" style="display:{{auth::user()->mahasiswa->status != "belum menikah" &&  auth::user()->mahasiswa->status != "menikah" ? "block":"none"}};">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Sebutkan<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="status_lainnya" {{auth::user()->mahasiswa->status != "belum menikah" &&  auth::user()->mahasiswa->status != "menikah" ? "required":""}} name="status_lainnya" value="{{ old('status_lainnya') }}" type="text" class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Agama</label>
                            <div class="col-md-6">
                                <select name="agama" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="islam" {{auth::user()->mahasiswa->agama == "islam" ? "selected":""}}>Islam</option>
                                    <option value="hindu" {{auth::user()->mahasiswa->agama == "hindu" ? "selected":""}}>hindu</option>
                                    <option value="katolik" {{auth::user()->mahasiswa->agama == "katolik" ? "selected":""}}>katolik</option>
                                    <option value="budha" {{auth::user()->mahasiswa->agama == "budha" ? "selected":""}}>budha</option>
                                    <option value="kristen" {{auth::user()->mahasiswa->agama == "kristen" ? "selected":""}}>kristen</option>
                                    <option value="lainnya" {{auth::user()->mahasiswa->agama == "lainnya" ? "selected":""}}>lainnya</option>
                                </select>
                            </div>
                        </div>
                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    //if select with id kewarganegaraan change value to WNA then show input text with id kewarganegaraan_lainnya
    $('#kewarganegaraan').change(function(){
        if($(this).val() == 'WNA'){
            $('#kewarganegaraan_lainnya').parent().parent().show();
            $('#kewarganegaraan_lainnya').attr('required', true);
        }else{
            $('#kewarganegaraan_lainnya').parent().parent().hide();
            $('#kewarganegaraan_lainnya').attr('required', false);
        }
    });

    //if select with id status change value to menikah then show input text with id status_lainnya
    $('#status').change(function(){
        if($(this).val() == 'lainnya'){
            $('#status_lainnya').parent().parent().show();
            $('#status_lainnya').attr('required', true);

        }else{
            $('#status_lainnya').parent().parent().hide();
            $('#status_lainnya').attr('required', false);
        }
    });

    $('#jenis-lahir').change(function(){
        if($(this).is(':checked')){
            $('#lahir-luar').show();
            $('#lahir-dalam').hide();
            $('#negara_lahir').attr('required', true);

            $('#prov_lahir').attr('required', false);
            $('#kota_lahir').attr('required', false);

        }else{
            $('#lahir-luar').hide();
            $('#lahir-dalam').show();
            //make require
            $('#negara_lahir').attr('required', false);

            $('#prov_lahir').attr('required', true);
            $('#kota_lahir').attr('required', true);
        }
    });

    $('#hp').keypress(function(e){
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57)){
            //make input box red
            $('#hp').addClass('errorClass');
            alert('Nomor HP harus angka atau karakter +');
            return false

        }

        $('#hp').removeClass('errorClass');
        return true

    });
    $('#telp').keypress(function(e){
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57)){
            $('#telp').addClass('errorClass');
            alert('Nomor Telpon harus angka atau karakter +');
            return false
        }
        $('#telp').addClass('errorClass');
        return true
    });

    $('select[name="provinsi"]').change(function(){
        var id = $(this).val();
        $.ajax({
            url: "/data/kota/"+id,
            type: "GET",
            data: {id: id},
            success: function(data){
                console.log(data);
                $('select[name="kota"]').empty();
                $('select[name="kota"]').append('<option value="">Pilih Kota</option>');
                $.each(data, function(key, item){
                    $('select[name="kota"]').append('<option value="'+item.id+'">'+item.nama_kota+'</option>');
                });
            }
        });
    });

    $('select[name="prov_lahir"]').change(function(){
        var id = $(this).val();
        $.ajax({
            url: "/data/kota/"+id,
            type: "GET",
            data: {id: id},
            success: function(data){
                console.log(data);
                $('select[name="kota_lahir"]').empty();
                $('select[name="kota_lahir"]').append('<option value="">Pilih Kota</option>');
                $.each(data, function(key, item){
                    $('select[name="kota_lahir"]').append('<option value="'+item.id+'">'+item.nama_kota+'</option>');
                });
            }
        });
    });

</script>
@endsection
