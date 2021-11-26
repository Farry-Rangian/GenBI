<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">GenBI Sulut</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kegiatan") ? 'active' : '' }}" href="/kegiatans">Kegiatan</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($title === "Presensi") ? 'active' : '' }}" href="/presensi/1">Presensi</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeris">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/toko*') ? 'active' : '' }}" href="/toko">Toko</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
          </ul>
        
      </div>
    </div>
  </nav>