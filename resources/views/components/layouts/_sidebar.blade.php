<aside id="sidebar-wrapper">
  <div class="sidebar-brand my-2">
    <a href="{{ route('home') }}" class="logo-link">
        <img src="{{ asset('backend/img/logo.png') }}" width="120" class="w-25">
    </a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ route('home') }}">IKA</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link">
        <i class="fas fa-fire"></i><span>Dashboard</span>
      </a>
      <a href="{{ url('/') }}" class="nav-link" target="_blank">
        <i class="fas fa-arrow-right"></i><span>Web IKA</span>
      </a>
    </li>
    <li class="menu-header">Data Master</li>
    <li class="dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-book-open"></i><span>Berita</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('post.index') }}">Postingan</a></li>
        <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">Restore</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('category.index') }}"><i class="fas fa-cubes"></i> <span>Kategori</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('tag.index') }}"><i class="fas fa-bookmark"></i> <span>Tags</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users"></i> <span>Anggota</span></a>
    </li>
    <li class="menu-header">Pengaturan</li>
    <li class="nav-item">
      <a class="nav-link" href="#" onclick="confirm('Coming soon bro!')"><i class="fas fa-cog"></i> <span>Setting</span></a>
    </li>
  </ul>
</aside>
