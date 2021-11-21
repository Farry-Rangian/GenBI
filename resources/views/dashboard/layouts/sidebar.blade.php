<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/biodata*') ? 'active' : '' }}" href="/dashboard/biodata">
            <span data-feather="file-text"></span>
            Biodata
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/artikels*') ? 'active' : '' }}" href="/dashboard/artikels">
            <span data-feather="file-text"></span>
            Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kegiatans') ? 'active' : '' }}" href="/dashboard/kegiatans">
            <span data-feather="file-text"></span>
            Kegiatan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/presensi') ? 'active' : '' }}" href="/dashboard/presensi">
            <span data-feather="file-text"></span>
            Presensi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/ujian') ? 'active' : '' }}" href="/dashboard/ujian">
            <span data-feather="file-text"></span>
            Ujian
          </a>
        </li>
      </ul>
    </div>
  </nav>