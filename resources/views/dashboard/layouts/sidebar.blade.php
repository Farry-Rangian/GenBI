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
            <span data-feather="user"></span>
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
          <a class="nav-link {{ Request::is('dashboard/presensi*') ? 'active' : '' }}" href="/dashboard/presensi">
            <span data-feather="file-text"></span>
            Presensi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/ujian*') ? 'active' : '' }}" href="/dashboard/ujian">
            <span data-feather="book-open"></span>
            Ujian
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kegiatans*') ? 'active' : '' }}" href="/dashboard/kegiatans">
            <span data-feather="activity"></span>
            Kegiatan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/galeri*') ? 'active' : '' }}" href="/dashboard/galeri">
            <span data-feather="image"></span>
            Galeri
          </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>