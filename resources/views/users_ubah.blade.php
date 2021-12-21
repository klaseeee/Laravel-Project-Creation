@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data User</h3>
            </div>
            <div class="card-body">
                <a href="{{route('users.index')}}">Kembali</a> 
                <form action="{{ route('users.update', $user -> id) }}" method="POST"> 
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Nama <input type="text" name="nama" required value="{{$user->name}}">
                        Role <input type="text" name="role" required value="{{$user->role}}">
                        Email <input type="email" name="email" required value="{{$user->email}}">
                    </ul>
                    <input type="submit" value="ubah data" class="btn btn-success mt-4">
                </form>
            </div>
        </div>
    </div>

@endsection