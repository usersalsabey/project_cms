@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kasir</h1>
    <form action="{{ route('kasir.update', $kasir->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $kasir->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Jadwal Kerja</label>
            <input type="text" name="jadwal_kerja" class="form-control" value="{{ $kasir->jadwal_kerja }}" required>
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" value="{{ $kasir->kontak }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('kasir.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
