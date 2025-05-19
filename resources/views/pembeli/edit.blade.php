@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 480px;">
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #d6336c;">✏️ Edit Pembeli</h2>
        <p class="text-muted">Perbarui data pembeli dengan lembut 💕</p>
    </div>

    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" class="bg-light p-4 rounded-4 shadow-sm" style="background-color: #fff0f5;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label" style="color: #d6336c;">🌸 Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $pembeli->nama }}" class="form-control rounded-pill" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label" style="color: #d6336c;">🏡 Alamat</label>
            <input type="text" id="alamat" name="alamat" value="{{ $pembeli->alamat }}" class="form-control rounded-pill" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label" style="color: #d6336c;">📱 Nomor HP</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ $pembeli->no_hp }}" class="form-control rounded-pill" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success rounded-pill px-4">💾 Update</button>
        </div>
    </form>
</div>
@endsection
