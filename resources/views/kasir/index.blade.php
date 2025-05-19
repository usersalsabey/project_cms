@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h1 class="fw-bold" style="color: #d6336c;">✨ Daftar Kasir ✨</h1>
        <p class="text-muted">Si cantik-cantik penjaga toko kamu~ 💅</p>
        <a href="{{ route('kasir.create') }}" class="btn btn-primary rounded-pill px-4 py-2">
            ➕ Tambah Kasir Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center rounded-pill" style="background-color: #ffe0f0; color: #d6336c;">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm" style="border-radius: 20px;">
        <div class="card-body" style="background-color: #fffafc;">
            <table class="table table-hover text-center align-middle">
                <thead class="table-light">
                    <tr style="color: #d6336c;">
                        <th>💁 Nama</th>
                        <th>🕒 Jadwal Kerja</th>
                        <th>📞 Kontak</th>
                        <th>🎀 Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kasirs as $kasir)
                    <tr>
                        <td>{{ $kasir->nama }}</td>
                        <td>{{ $kasir->jadwal_kerja }}</td>
                        <td>{{ $kasir->kontak }}</td>
                        <td>
                            <a href="{{ route('kasir.edit', $kasir->id) }}" class="btn btn-sm" style="background-color: #ffd1dc; color: #5a2a2a;">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('kasir.destroy', $kasir->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm" style="background-color: #ffb6c1; color: #fff;" onclick="return confirm('Yakin mau hapus kasir imut ini? 😢')">
                                    ❌ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if ($kasirs->isEmpty())
                    <tr>
                        <td colspan="4" class="text-muted">Belum ada kasir yang terdaftar 💔</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
