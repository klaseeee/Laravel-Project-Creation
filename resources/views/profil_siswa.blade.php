@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.index) }}">Kembali</a>
                <div class="row ml-2">
                    <h4 class="col-4">Nama</h4>
                    <h4> : {{$siswa->nama}}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">NISN</h4>
                    <h4> : {{$siswa->nisn}}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Tanggal Lahir</h4>
                    <h4> : {{$siswa->tanggal_lahir}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
