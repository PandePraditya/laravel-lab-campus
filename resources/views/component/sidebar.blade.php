<aside class="main-sidebar bg-dark text-light vh-100 z-1">
    <div class="d-flex flex-column p-3" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-building fs-1 me-2"></i>
            <span class="fs-4">Lab Kampus</span>
        </a>
        <hr class="text-secondary">
        <!-- Dropdown profile -->
        <div class="dropdown">
            @if (Auth::check())
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/account.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark shadow">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to log out?')">Sign out</button>
                        </form>
                    </li>
                </ul>
            @else
                <div class="d-flex justify-content-around">
                    <a href="{{ route('login') }}" class="nav-link text-white">Login</a>
                    <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                </div>
            @endif
        </div>
        <hr class="text-secondary">
        <!-- Menu sidebar -->
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link text-white {{ Request::is('/') ? 'active bg-primary' : '' }}" aria-current="page">
                    <i class="bi bi-speedometer me-2 fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#tabelDataSubmenu" class="nav-link text-white {{ Request::is('barang', 'barang/create', 'barang/edit/*', 'barang/*', 'ruangan', 'ruangan/create', 'ruangan/edit/*', 'ruangan/*') ? 'active bg-primary' : '' }}" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="bi bi-table me-2 fs-5"></i>
                    <span>Tabel Data</span>
                </a>
                <ul class="collapse list-unstyled ps-3 ms-3" id="tabelDataSubmenu">
                    <li class="nav-item my-2">
                        <a href="{{ route('barang.index') }}" class="nav-link text-white {{ Request::is('barang', 'barang/create', 'barang/edit/*', 'barang/*') ? 'active bg-primary' : '' }}">
                            <i class="bi bi-inboxes me-2 fs-5"></i>
                            <span>Tabel Data Barang</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('ruangan.index') }}" class="nav-link text-white {{ Request::is('ruangan', 'ruangan/create', 'ruangan/edit/*', 'ruangan/*') ? 'active bg-primary' : '' }}">
                            <i class="bi bi-receipt me-2 fs-5"></i>
                            <span>Tabel Data Ruangan</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
