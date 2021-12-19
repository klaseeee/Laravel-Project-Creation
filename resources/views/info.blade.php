<!-- @extends('layouts.app')

@section('content')
    <h3></h3>
    <table class="table-bordered table-stripped">
        <tr>
            <th>Nama</th>
            <th>NISN</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Budi</td>
            <td>12345</td>
            <td>Jakarta</td>
        </tr>
        <tr>
            <td>Joko</td>
            <td>67890</td>
            <td>Jakarta</td>
        </tr>
    </table>
@endsection -->

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
