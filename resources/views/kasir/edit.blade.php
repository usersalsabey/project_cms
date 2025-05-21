@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff0f5;
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .coquette-card {
        background-color: #ffe4f2;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(255, 105, 180, 0.2);
    }
    .coquette-label {
        color: #d63384;
        font-weight: bold;
    }
    .coquette-input {
        border-radius: 12px;
        border: 2px solid #ffb6c1;
    }
    .coquette-btn {
        background-color: #ff69b4;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    .coquette-btn:hover {
        background-color: #ff1493;
    }
    .coquette-back {
        background-color: #f8c1dc;
        color: #800040;
        border-radius: 10px;
        padding: 10px 20px;
        text-decoration: none;
        margin-left: 10px;
    }
    h1 {
        color: #ff69b4;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }
</style>

<div class="container">
    <div class="coquette-card">
        <h1>✨ Edit Kasir Cantikku ✨</h1>
        <form action="{{ route('kasir.update', $kasir->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="coquette-label">🌸 Nama Kasir</label>
                <input type="text" name="nama" class="form-control coquette-input" value="{{ $kasir->nama }}" required>
            </div>

            <div class="mb-3">
                <label class="coquette-label">🕒 Jadwal Kerja</label>
                <input type="text" name="jadwal_kerja" class="form-control coquette-input" value="{{ $kasir->jadwal_kerja }}" required>
            </div>

            <div class="mb-3">
                <label class="coquette-label">📞 Kontak</label>
                <input type="text" name="kontak" class="form-control coquette-input" value="{{ $kasir->kontak }}" required>
            </div>

            <button type="submit" class="coquette-btn">💾 Simpan Perubahan</button>
            <a href="{{ route('kasir.index') }}" class="coquette-back">⬅ Balik Yuk</a>
        </form>
    </div>
</div>
@endsection