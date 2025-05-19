@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #d6336c;">🎀 Detail Produk Cantik 🎀</h3>
        <p class="text-muted">Lihat info lengkap produk lucu ini 🛍️</p>
    </div>

    <div class="card shadow-sm" style="border-radius: 20px; background-color: #fff0f5;">
        <div class="card-body">
            <h5 class="card-title" style="color: #ff69b4;">💖 {{ $produk->nama }}</h5>
            <p class="card-text"><strong>🍰 Kategori:</strong> {{ $produk->kategori }}</p>
            <p class="card-text"><strong>💸 Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning rounded-pill">✏️ Edit</a>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary rounded-pill">← Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
