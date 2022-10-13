<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin') ? 'active' : 
          '' }}" aria-current="page" href="/admin">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/mapel') ? 'active' : 
          '' }}" href="/admin/mapel">
            <span data-feather="book-open"></span>
            Mata Pelajaran
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/kelas') ? 'active' : 
          '' }}" href="/admin/kelas">
            <span data-feather="book-open"></span>
            Kelas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/ujian') ? 'active' : '' }}" href="/admin/ujian">
            <span data-feather="book-open"></span>
            Ujian
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/nilai') ? 'active' : 
          '' }}" href="/admin/nilai">
            <span data-feather="book-open"></span>
            Nilai
          </a>
        </li>
      </ul>
    </div>
  </nav>