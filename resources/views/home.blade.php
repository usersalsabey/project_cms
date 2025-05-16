@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Selamat Datang di Aplikasi Kasir</h1>
    <p class="lead">Kelola data kasir dengan mudah dan efisien.</p>
    <a href="{{ route('kasir.index') }}" class="btn btn-primary mt-3">Lihat Data Kasir</a>
</div>
@endsection
