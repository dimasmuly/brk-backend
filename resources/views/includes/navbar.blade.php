<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h2 class="text-primary m-0">CoffeeIn</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('home') }}"
                    class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ route('menu') }}"
                    class="nav-item nav-link {{ Request::is('menu') ? 'active' : '' }}">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('facilities') }}"
                            class="dropdown-item {{ Request::is('facilities') ? 'active' : '' }}">Fasilitas</a>
                        <a href="{{ route('ordering') }}"
                            class="dropdown-item {{ Request::is('ordering') ? 'active' : '' }}">Pemesanan</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}"
                    class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Kontak</a>
            </div>

        </div>
    </nav>
</div>
