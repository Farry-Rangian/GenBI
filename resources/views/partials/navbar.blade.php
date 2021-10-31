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
            <a class="nav-link {{ ($title === "Biodata") ? 'active' : '' }}" href="/biodata">Biodata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kegiatan") ? 'active' : '' }}" href="/kegiatans">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Presensi") ? 'active' : '' }}" href="/presensi/1">Presensi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeris">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Struktur Kepengurusan") ? 'active' : '' }}" href="/struktur-kepengurusan">Struktur Kepengurusan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>