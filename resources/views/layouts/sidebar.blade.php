<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('user/') ? 'active' : '' }}" aria-current="page" href="/user">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        @foreach (App\Models\Mapel::all() as $item)
          <li class="nav-item">
            <a class="nav-link {{ Request::is('user/mapel/' . $item->slug) ? 'active' : '' }}" href="{{ url('user/mapel/' . $item->slug) }}">
              <span data-feather="file"></span>
              {{ $item->nama }}
            </a>
          </li>
        @endforeach
        <li class="nav-item">
          <a class="nav-link {{ Request::is('user/nilai') ? 'active' : '' }}" aria-current="page" href="/user/nilai">
            <span data-feather="home"></span>
            Nilai
          </a>
        </li>
      </ul>
    </div>
  </nav>