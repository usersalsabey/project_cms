@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kasir</h1>
    <a href="{{ route('kasir.create') }}" class="btn btn-primary mb-3">Tambah Kasir</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jadwal Kerja</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kasirs as $kasir)
            <tr>
                <td>{{ $kasir->nama }}</td>
                <td>{{ $kasir->jadwal_kerja }}</td>
                <td>{{ $kasir->kontak }}</td>
                <td>
                    <a href="{{ route('kasir.edit', $kasir->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kasir.destroy', $kasir->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kasir ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection