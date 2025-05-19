@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h1 class="fw-bold" style="color: #d6336c;">🧾 Tambah Kasir Baru</h1>
        <p class="text-muted">Yuk tambahkan kasir cantik atau tampan yang siap melayani dengan senyum 💖</p>
    </div>

    <div class="card shadow-sm p-4" style="border-radius: 20px; background-color: #fff0f5;">
        <form action="{{ route('kasir.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label" style="color: #d6336c;">💁 Nama</label>
                <input type="text" name="nama" class="form-control rounded-pill" required placeholder="Misalnya: Kak Yuni">
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: #d6336c;">🕒 Jadwal Kerja</label>
                <input type="text" name="jadwal_kerja" class="form-control rounded-pill" required placeholder="Misalnya: Senin - Jumat, 08:00 - 16:00">
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: #d6336c;">📞 Kontak</label>
                <input type="text" name="kontak" class="form-control rounded-pill" required placeholder="Misalnya: 0812xxxxxxx">
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn" style="background-color: #ff69b4; color: white; border-radius: 30px; padding: 10px 30px;">
                    💾 Simpan Kasir
                </button>
                <a href="{{ route('kasir.index') }}" class="btn" style="background-color: #ffe4e1; color: #d6336c; border-radius: 30px; padding: 10px 30px;">
                    🔙 Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
