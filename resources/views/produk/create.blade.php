@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #d6336c;">✨ Tambah Produk Gemash ✨</h3>
        <p class="text-muted">Isi data produk cantikmu dengan penuh cinta 💌</p>
    </div>

    <form action="{{ route('produk.store') }}" method="POST" class="p-4 shadow-sm" style="border-radius: 20px; background-color: #fff0f5;">
        @csrf
        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">📦 Nama Produk</label>
            <input type="text" name="nama" class="form-control rounded-pill" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">🧁 Kategori</label>
            <input type="text" name="kategori" class="form-control rounded-pill" required>
        </div>
        <div class="mb-3">
            <label class="form-label" style="color: #d6336c;">💸 Harga</label>
            <input type="number" name="harga" class="form-control rounded-pill" required>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary rounded-pill">← Kembali</a>
            <button class="btn" style="background-color: #ff69b4; color: white; border-radius: 30px;">💾 Simpan Produk</button>
        </div>
    </form>
</div>
@endsection
