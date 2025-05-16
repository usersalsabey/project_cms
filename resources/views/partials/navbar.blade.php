<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('kasir.index') }}">Kasir App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kasir') ? 'active' : '' }}" href="{{ route('kasir.index') }}">Data Kasir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kasir/create') ? 'active' : '' }}" href="{{ route('kasir.create') }}">Tambah Kasir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
