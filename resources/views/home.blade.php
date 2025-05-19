@extends('layouts.app')

@section('content')
<style>
    /* Warna pink lembut, font playful, dan dekorasi coquette */
    body {
        background: #ffe6f0;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        color: #d6336c;
    }
    .container {
        max-width: 700px;
    }
    h1.display-4 {
        font-weight: 900;
        font-size: 3.5rem;
        text-shadow: 2px 2px 4px #ff9ccf;
        margin-bottom: 0.3em;
    }
    p.lead {
        font-size: 1.4rem;
        margin-bottom: 2rem;
        color: #a83261;
    }
    .btn-pink {
        background-color: #ff69b4;
        border: none;
        color: white;
        font-weight: bold;
        padding: 12px 28px;
        border-radius: 30px;
        box-shadow: 0 4px 15px rgba(255,105,180,0.6);
        transition: all 0.3s ease;
    }
    .btn-pink:hover {
        background-color: #ff85c1;
        box-shadow: 0 6px 20px rgba(255,105,180,0.8);
        transform: translateY(-3px);
    }
    .menu-card {
        background: white;
        border-radius: 25px;
        box-shadow: 0 6px 18px rgba(255,105,180,0.3);
        padding: 20px 30px;
        margin: 15px auto;
        cursor: pointer;
        transition: all 0.25s ease-in-out;
    }
    .menu-card:hover {
        box-shadow: 0 8px 25px rgba(255,105,180,0.6);
        transform: translateY(-5px);
    }
    .menu-icon {
        font-size: 48px;
        margin-bottom: 15px;
        color: #ff1493;
    }
    .menu-text {
        font-size: 1.3rem;
        font-weight: 700;
        color: #c71585;
    }
</style>

<div class="container text-center mt-5">
    <h1 class="display-4">Selamat Datang di Aplikasi Kasir</h1>
    <p class="lead">Kelola data kasir dengan mudah dan efisien.</p>

    <div class="row justify-content-center">
        <div class="col-10 col-md-5 menu-card" onclick="location.href='{{ route('kasir.index') }}'">
            <div class="menu-icon">🛒</div>
            <div class="menu-text">Kasir</div>
        </div>
        <div class="col-10 col-md-5 menu-card" onclick="location.href='{{ route('produk.index') }}'">
            <div class="menu-icon">🎀</div>
            <div class="menu-text">Produk</div>
        </div>
        <div class="col-10 col-md-5 menu-card" onclick="location.href='{{ route('pembeli.index') }}'">
            <div class="menu-icon">👛</div>
            <div class="menu-text">Pembeli</div>
        </div>
        <div class="col-10 col-md-5 menu-card" onclick="location.href='{{ route('transaksi.index') }}'">
            <div class="menu-icon">💖</div>
            <div class="menu-text">Transaksi</div>
        </div>
    </div>

    <button onclick="location.href='{{ route('kasir.index') }}'" class="btn btn-pink mt-4">Lihat Semua Data Kasir</button>
</div>
@endsection
