<header class="navigation">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light px-0">
        <a class="navbar-brand order-1 py-0" href="{{ url('/') }}">
          <img loading="prelaod" decoding="async" class="img-fluid" src="{{ asset('frontend/images/logo-ika.png') }}"
            alt="logo ika" width="50">
          <h2 class="d-none d-md-block">Universitas Widya Dharma Pontianak</h2>
        </a>
        <div class="navbar-actions order-3 ml-0 ml-md-4">
          <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
            data-target="#navigation"> <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
          <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info IKA
              </a>
              <div class="dropdown-menu">
                @foreach ($categories as $item)
                    @if (($item->posts->count()) > 0)
                        <a href="{{ route('posts.by.category', $item->id) }}" class="dropdown-item">{{ $item->name }}</a>
                    @else

                    @endif
                @endforeach
              </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('post.list.page') }}">Blog</a></li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Autentikasi
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('register') }}">Daftar Sebagai Alumni</a>
              <a class="dropdown-item" href="{{ route('login') }}">Masuk</a>
            </div>
          </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
