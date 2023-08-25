@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(auth::user()->role_id == 0)
                <div class="card">
                    <div class="card-header">Data Mahasiswa</div>
    
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        @if($data->status == 0)
                                            @if($data->mahasiswa)
                                                <span class="badge bg-warning">Menunggu Persetujuan</span>
                                                @else
                                                <span class="badge bg-danger">Belum mengisi</span>

                                            @endif
                                        @elseif($data->status == 1)
                                            <span class="badge bg-success">Aktif</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if($data->status == 0)
                                            @if($data->mahasiswa)
                                                <a href="#" class="btn btn-warning">Lihat Data</a>
                                                <a href="{{ route("mahasiswa.setujui",["id"=>$data->id]) }}" class="btn btn-success">Setujui</a>
                                                <a href="{{ route("mahasiswa.tolak`",["id"=>$data->id]) }}" class="btn btn-danger">Tolak</a>
                                            @endif
                                        @endif

                                        <a href="{{ route("mahasiswa.detail",["id"=>$data->id]) }}" class="btn btn-success">Detail</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
