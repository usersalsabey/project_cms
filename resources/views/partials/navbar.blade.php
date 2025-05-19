<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe6f0;">
    <div class="container">
        <a class="navbar-brand text-pink fw-bold" href="{{ url('/') }}" style="color: #d6336c;">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(40%) sepia(100%) saturate(750%) hue-rotate(320deg) brightness(90%) contrast(90%);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('produk.index') ? 'active' : '' }}" href="{{ route('produk.index') }}" style="color: #d6336c;">
                        Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pembeli.index') ? 'active' : '' }}" href="{{ route('pembeli.index') }}" style="color: #d6336c;">
                        Pembeli
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.index') ? 'active' : '' }}" href="{{ route('transaksi.index') }}" style="color: #d6336c;">
                        Transaksi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        font-weight: 600;
        transition: color 0.3s ease;
    }
    .nav-link:hover {
        color: #ff69b4 !important; /* pink cerah saat hover */
        text-decoration: underline;
    }
    .nav-link.active {
        color: #ff1493 !important; /* warna pink lebih gelap untuk aktif */
        font-weight: 700;
    }
</style>
