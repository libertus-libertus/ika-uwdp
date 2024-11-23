<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown"
        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        Selamat Datang &mdash; {{ Auth()->user()->name }}
        <img alt="image" src="{{ asset('backend/img/no_image.jpg') }}" class="rounded-circle mr-1">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">{{ Auth()->user()->email }}</div> <hr>
        <a href="features-profile.html" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>
