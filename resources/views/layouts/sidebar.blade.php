<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item ">
        <a href="{{ route('arsip.index') }}" class="nav-link {{ request()->routeIs('arsip.*') ? 'active' : '' }}">
          <i class="nav-icon fa fa-archive text-dark"></i>
          <p>
            <span class="brand-text text-dark">Arsip</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('kategori.index') }}" class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
          <i class="nav-icon fa fa-envelope text-dark"></i>
          <p>
            <span class="brand-text text-dark">Kategori Surat</span>
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="{{ route('about') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-user text-dark"></i>
          <p>
            <span class="brand-text text-dark">About</span>
          </p>
        </a>
      </li>
    </ul>
  </nav>