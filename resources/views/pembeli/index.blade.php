@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #d6336c;">💌 Daftar Para Pembeli Cantik</h2>
        <p class="text-muted">Lihat siapa aja yang udah mampir ke toko lucumu 💖</p>
    </div>

    <div class="mb-3">
        <a href="{{ route('pembeli.create') }}" class="btn btn-pink rounded-pill" style="background-color: #ff69b4; color: white;">
            ✨ + Tambah Pembeli Baru
        </a>
    </div>

    @if($pembelis->isEmpty())
        <div class="alert alert-info text-center">🌸 Belum ada data pembeli nih, bestie!</div>
    @else
        <table class="table table-bordered table-striped shadow-sm" style="border-radius: 12px; overflow: hidden;">
            <thead class="table-light">
                <tr style="background-color: #ffe4ec; color: #d6336c;">
                    <th>🧚‍♀️ Nama</th>
                    <th>🏡 Alamat</th>
                    <th>📱 No HP</th>
                    <th>🎀 Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembelis as $pembeli)
                <tr>
                    <td>{{ $pembeli->nama }}</td>
                    <td>{{ $pembeli->alamat }}</td>
                    <td>{{ $pembeli->no_hp }}</td>
                    <td>
                        <a href="{{ route('pembeli.show', $pembeli->id) }}" class="btn btn-info btn-sm rounded-pill">👀 Detail</a>
                        <a href="{{ route('pembeli.edit', $pembeli->id) }}" class="btn btn-warning btn-sm rounded-pill">✏️ Edit</a>
                        <form action="{{ route('pembeli.destroy', $pembeli->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Yakin ingin hapus pembeli cute ini?')">
                                🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
