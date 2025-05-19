@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #d6336c;">🎀 Daftar Produk Lucu</h3>
        <p class="text-muted">Cek koleksi produk gemash yang siap dibeli pelanggan 💕</p>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('produk.create') }}" class="btn" style="background-color: #ff69b4; color: white; border-radius: 30px; padding: 8px 20px;">
            ➕ Tambah Produk
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success text-center" style="background-color: #ffe4e1; color: #d6336c; border: none; border-radius: 20px;">
            💖 {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle shadow-sm" style="border-radius: 20px; background-color: #fff0f5;">
            <thead class="text-center" style="background-color: #ffc0cb; color: #fff;">
                <tr>
                    <th>🧸 Nama</th>
                    <th>🧁 Kategori</th>
                    <th>💸 Harga</th>
                    <th>🔧 Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($produks as $produk)
                    <tr>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->kategori }}</td>
                        <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-info btn-sm rounded-pill">🔍 Detail</a>
                            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm rounded-pill">✏️ Edit</a>
                            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Yakin mau hapus produk gemes ini? 🥺')" class="btn btn-danger btn-sm rounded-pill">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
