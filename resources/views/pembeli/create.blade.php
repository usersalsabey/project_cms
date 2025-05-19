@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #d6336c;">📝 Tambah Pembeli Baru</h2>
        <p class="text-muted">Isi data dengan manis, ya bestie 💕</p>
    </div>

    <form action="{{ route('pembeli.store') }}" method="POST" class="p-4 shadow rounded-4" style="background-color: #fff0f5;">
        @csrf

        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">🌸 Nama</label>
            <input type="text" name="nama" class="form-control rounded-pill" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">🏡 Alamat</label>
            <input type="text" name="alamat" class="form-control rounded-pill" placeholder="Alamat rumah cantikmu" required>
        </div>

        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">📱 Nomor HP</label>
            <input type="text" name="no_hp" class="form-control rounded-pill" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-pink rounded-pill px-4" style="background-color: #ff69b4; color: white;">
                💖 Simpan Data Pembeli
            </button>
        </div>
    </form>
</div>
@endsection
