@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.index')}}">Kembali</a>
                <form action="{{route('siswa.store')}}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama <input type="text" name="nama" required>
                        NISN <input type="text" name="nisn" required>
                        Tanggal Lahir <input type="date" name="tanggal_lahir" required>
                    </ul>
                    <input type="submit" value="simpan data" class="btn btn-success mt-4">
                </form>
            </div>
        </div>
    </div>
@endsection