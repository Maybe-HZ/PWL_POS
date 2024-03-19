@extends('layout.app')

{{-- Customize layout section --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Tambah')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Level</h3>
            </div>

            <form>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="level_nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="level_id">Level Kode</label>
                            <input type="number" class="form-control" name="level_kode" placeholder="Masukkan Level Kode">
                        </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
@endsection
