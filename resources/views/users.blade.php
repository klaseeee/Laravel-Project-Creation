@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Manajemen Users</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($User as $use) 
                    <tr>
                        <td>{{$use->name}}</td>
                        <td>{{$use->role}}</td>
                        <td>{{$use->email}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{ route('users.edit', $use->id) }}" class="btn btn-warning ms-2">Edit</a>
                                <form action="{{ route('users.destroy', $use->id) }}" method="POST">
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