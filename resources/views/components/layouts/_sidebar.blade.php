<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ url('/home') }}"><strong>IKA UWDP</strong></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ url('/home') }}">IKA</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="dropdown">
      <a href="{{ url('/home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>
    <li class="menu-header">Data Master</li>
    {{-- <li class="dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Kategori</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
      </ul>
    </li> --}}
    <li class=active>
        <a class="nav-link" href="{{ url('/category') }}"><i class="fas fa-cog"></i> <span>Kategori</span></a>
      </li>
    <li class="menu-header">Pengaturan</li>
    <li class=active>
      <a class="nav-link" href="blank.html"><i class="fas fa-cog"></i> <span>Setting</span></a>
    </li>
  </ul>
</aside>
