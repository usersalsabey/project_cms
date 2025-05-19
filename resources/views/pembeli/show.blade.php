@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #d6336c;">🎀 Detail Pembeli</h2>
        <p class="text-muted">Lihat informasi pembelinya, bestie 💌</p>
    </div>

    <div class="card shadow rounded-4" style="background-color: #fff0f5;">
        <div class="card-body" style="font-size: 1.1rem;">
            <p><strong style="color: #d6336c;">🌸 Nama:</strong> {{ $pembeli->nama }}</p>
            <p><strong style="color: #d6336c;">🏡 Alamat:</strong> {{ $pembeli->alamat }}</p>
            <p><strong style="color: #d6336c;">📱 No HP:</strong> {{ $pembeli->no_hp }}</p>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('pembeli.index') }}" class="btn btn-secondary rounded-pill">
            ⬅️ Kembali ke Daftar
        </a>
    </div>
</div>
@endsection
