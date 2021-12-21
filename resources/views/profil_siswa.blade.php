@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>
            <div class="card-body">
                @can('isAdmin')
                <a href="{{ route('siswa.index') }}">Kembali</a>
                @endcan
                <div class="row ml-2">
                    <h5 class="col-6 col-sm-4">Nama</h5>
                    <h5 class="col-6">: {{$siswa->nama}}</h5>
                </div>
                <div class="row ml-2">
                    <h5 class="col-6 col-sm-4">NISN</h5>
                    <h5 class="col-6">: {{$siswa->nisn}}</h5>
                </div>
                <div class="row ml-2">
                    <h5 class="col-6 col-sm-4">Tanggal Lahir</h5>
                    <h5 class="col-6">: {{$siswa->tanggal_lahir}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
