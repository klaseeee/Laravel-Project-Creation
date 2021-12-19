@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal Informasi Siswa SMKN 44 Jakarta</p>
        <a href="{{url('/info_kegiatan')}}" class="btn btn-dark">Info Kegiatan</a>
        <a href="{{url('/siswa')}}" class="btn btn-primary">Data Siswa</a>
    </div>
@endsection

