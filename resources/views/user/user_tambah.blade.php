@extends('layout.app')

{{-- Customize layout section --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Tambah')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="level_id">Level ID</label>
                            <input type="number" class="form-control" name="level_id" placeholder="Masukkan Level ID">
                        </div>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

{{-- <body>
    <h1>Form Tambah Data User</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <form method="POST" action="{{ route('/user/tambah_simpan') }}">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label >Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label >Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label >Level ID</label>
        <input type="number" name="level_id" >
        <br>
        <input type="submit" name="btn btn-success" value="Simpan">
    </form>
</body> --}}
