@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #d6336c;">🧁 Edit Produk Manis</h3>
        <p class="text-muted">Ubah info produk dengan hati-hati ya, bestie 💌</p>
    </div>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="p-4 shadow-sm" style="background-color: #fff0f5; border-radius: 20px;">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label" style="color: #ff69b4;">🎀 Nama Produk</label>
            <input type="text" name="nama" class="form-control rounded-pill" value="{{ $produk->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label" style="color: #ff69b4;">🌸 Kategori</label>
            <input type="text" name="kategori" class="form-control rounded-pill" value="{{ $produk->kategori }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label" style="color: #ff69b4;">💸 Harga</label>
            <input type="number" name="harga" class="form-control rounded-pill" value="{{ $produk->harga }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <button class="btn btn-success rounded-pill">✨ Update Sekarang</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary rounded-pill">← Batal aja deh</a>
        </div>
    </form>
</div>
@endsection
