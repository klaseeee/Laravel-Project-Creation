@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.create') }}">Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($Siswa as $sis) 
                    <tr>
                        <td>{{$sis->nama}}</td>
                        <td>{{$sis->nisn}}</td>
                        <td>{{$sis->tanggal_lahir}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{ route('siswa.show', $sis->id) }}" class="btn btn-success ms-2">Show</a>
                                <a href="{{ route('siswa.edit', $sis->id) }}" class="btn btn-warning ms-2">Edit</a>
                                <form action="{{ route('siswa.destroy', $sis->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-2">Hapus</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection