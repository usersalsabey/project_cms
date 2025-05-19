@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 style="color: #d6336c; font-weight: 700; margin-bottom: 1rem;">✨ Detail Transaksi Cute ✨</h2>

    <table class="table table-bordered" style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(255, 119, 169, 0.3);">
        <tbody>
            <tr style="background-color: #ffb6c1; color: white;">
                <th style="width: 35%;">Pembeli 🧸</th>
                <td>{{ $transaksi->pembeli->nama }}</td>
            </tr>
            <tr style="background-color: #ffd1dc;">
                <th>Produk 🎁</th>
                <td>{{ $transaksi->produk->nama }}</td>
            </tr>
            <tr style="background-color: #ffb6c1; color: white;">
                <th>Jumlah 🎀</th>
                <td>{{ $transaksi->jumlah }}</td>
            </tr>
            <tr style="background-color: #ffd1dc;">
                <th>Total Harga 💸</th>
                <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('transaksi.index') }}" class="btn btn-pink mt-3 rounded-pill px-4" style="background-color: #ff77a9; color: white; font-weight: 600; box-shadow: 0 4px 6px rgba(255, 119, 169, 0.4); text-decoration: none;">
        ← Kembali
    </a>
</div>

<style>
    .btn-pink:hover {
        background-color: #ff4d8a !important;
        box-shadow: 0 6px 10px rgba(255, 77, 138, 0.6);
        transition: all 0.3s ease;
        text-decoration: none;
        color: white !important;
    }
</style>
@endsection
