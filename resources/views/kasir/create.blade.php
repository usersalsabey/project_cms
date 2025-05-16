@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kasir</h1>
    <form action="{{ route('kasir.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jadwal Kerja</label>
            <input type="text" name="jadwal_kerja" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kasir.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
