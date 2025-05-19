@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 900px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="color: #d6336c; font-weight: 700;">🛍️ Daftar Transaksi Cute</h2>
        <a href="{{ route('transaksi.create') }}" class="btn btn-pink rounded-pill px-4" style="background-color: #ff77a9; color: white; font-weight: 600; box-shadow: 0 4px 6px rgba(255, 119, 169, 0.4);">
            + Tambah Transaksi 💕
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-pill text-center" style="background-color: #ffccde; color: #d6336c; font-weight: 600;">
            {{ session('success') }} ✨
        </div>
    @endif

    @if($transaksis->isEmpty())
        <p class="text-center" style="color: #d6336c; font-style: italic;">Belum ada data transaksi nih, yuk tambah yang baru! 💖</p>
    @else
        <table class="table table-bordered" style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(255, 119, 169, 0.3);">
            <thead style="background-color: #ffb6c1; color: white;">
                <tr>
                    <th>Pembeli 🧸</th>
                    <th>Produk 🎁</th>
                    <th>Jumlah 🎀</th>
                    <th>Total Harga 💸</th>
                    <th>Aksi ✨</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->pembeli->nama }}</td>
                    <td>{{ $transaksi->produk->nama }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-info btn-sm rounded-pill" style="background-color: #ff7fbf; border: none;">Detail 📝</a>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm rounded-pill" style="background-color: #ffc107; border: none; color: #5a3e00;">Edit ✏️</a>
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm rounded-pill" style="background-color: #ff4d6d; border: none;"
                                onclick="return confirm('Yakin ingin hapus transaksi manis ini? 💔')">Hapus ❌</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<style>
    .btn-pink:hover {
        background-color: #ff4d8a !important;
        box-shadow: 0 6px 10px rgba(255, 77, 138, 0.6);
        transition: all 0.3s ease;
    }
    table tbody tr:hover {
        background-color: #ffe1f2;
        transition: background-color 0.3s ease;
    }
</style>
@endsection
