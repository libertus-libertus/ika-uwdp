<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ url('/home') }}"><strong>IKA UWDP</strong></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ url('/home') }}">IKA</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item">
      <a href="{{ url('/home') }}" class="nav-link">
        <i class="fas fa-fire"></i><span>Dashboard</span>
      </a>
    </li>
    <li class="menu-header">Data Master</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('category.index') }}"><i
          class="fas fa-cubes"></i> <span>Kategori</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('tag.index') }}"><i
          class="fas fa-cube"></i> <span>Tags</span></a>
    </li>
    <li class="menu-header">Pengaturan</li>
    <li class="nav-item">
      <a class="nav-link" href="blank.html"><i class="fas fa-cog"></i> <span>Setting</span></a>
    </li>
  </ul>
</aside>
