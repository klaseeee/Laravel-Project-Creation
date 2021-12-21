@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.index')}}">Kembali</a>
                <form action="{{ route('siswa.update', $siswa -> id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Nama <input type="text" name="nama" required value="{{$siswa->nama}}">
                        NISN <input type="text" name="nisn" required value="{{$siswa->nisn}}">
                        Tanggal Lahir <input type="date" name="tanggal_lahir" required value="{{$siswa->tanggal_lahir}}">
                    </ul>
                    <input type="submit" value="ubah data" class="btn btn-success mt-4">
                </form>
            </div>
        </div>
    </div>

@endsection