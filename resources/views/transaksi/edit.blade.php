@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px;">
    <h2 style="color: #d6336c; font-weight: 700; margin-bottom: 1.5rem;">💖 Edit Transaksi Pinky 💖</h2>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" style="background: #fff0f6; padding: 2rem; border-radius: 12px; box-shadow: 0 6px 15px rgba(255, 119, 169, 0.3);">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pembeli_id" class="form-label" style="color: #d6336c; font-weight: 600;">Pembeli 🧸</label>
            <select name="pembeli_id" id="pembeli_id" class="form-select @error('pembeli_id') is-invalid @enderror" required style="border-radius: 10px;">
                <option value="">-- Pilih Pembeli --</option>
                @foreach($pembelis as $pembeli)
                    <option value="{{ $pembeli->id }}" {{ old('pembeli_id', $transaksi->pembeli_id) == $pembeli->id ? 'selected' : '' }}>
                        {{ $pembeli->nama }}
                    </option>
                @endforeach
            </select>
            @error('pembeli_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="produk_id" class="form-label" style="color: #d6336c; font-weight: 600;">Produk 🎀</label>
            <select name="produk_id" id="produk_id" class="form-select @error('produk_id') is-invalid @enderror" required style="border-radius: 10px;">
                <option value="">-- Pilih Produk --</option>
                @foreach($produks as $produk)
                    <option value="{{ $produk->id }}" {{ old('produk_id', $transaksi->produk_id) == $produk->id ? 'selected' : '' }}>
                        {{ $produk->nama }} - Rp {{ number_format($produk->harga, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
            @error('produk_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label" style="color: #d6336c; font-weight: 600;">Jumlah 🎈</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', $transaksi->jumlah) }}" min="1" required style="border-radius: 10px;">
            @error('jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-pink rounded-pill px-4" style="background-color: #ff77a9; color: white; font-weight: 600; box-shadow: 0 4px 8px rgba(255, 119, 169, 0.5); margin-right: 10px;">
            Update
        </button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary rounded-pill px-4" style="color: white; background-color: #6c757d;">
            Batal
        </a>
    </form>
</div>

<style>
    .btn-pink:hover {
        background-color: #ff4d8a !important;
        box-shadow: 0 6px 12px rgba(255, 77, 138, 0.7);
        transition: all 0.3s ease;
        color: white !important;
        text-decoration: none;
    }
</style>
@endsection
