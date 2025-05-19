@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Transaksi</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="pembeli_id" class="form-label">Pembeli</label>
            <select name="pembeli_id" id="pembeli_id" class="form-select @error('pembeli_id') is-invalid @enderror" required>
                <option value="">-- Pilih Pembeli --</option>
                @foreach($pembelis as $pembeli)
                    <option value="{{ $pembeli->id }}" {{ old('pembeli_id') == $pembeli->id ? 'selected' : '' }}>
                        {{ $pembeli->nama }}
                    </option>
                @endforeach
            </select>
            @error('pembeli_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="produk_id" class="form-label">Produk</label>
            <select name="produk_id" id="produk_id" class="form-select @error('produk_id') is-invalid @enderror" required>
                <option value="">-- Pilih Produk --</option>
                @foreach($produks as $produk)
                    <option value="{{ $produk->id }}" {{ old('produk_id') == $produk->id ? 'selected' : '' }}>
                        {{ $produk->nama }} - Rp {{ number_format($produk->harga, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
            @error('produk_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', 1) }}" min="1" required>
            @error('jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
