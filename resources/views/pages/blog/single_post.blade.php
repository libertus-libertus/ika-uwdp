<!DOCTYPE html>

<html lang="en-us">

  <head>
    <meta charset="utf-8">
    <title>IKA &mdash; Universitas Widya Dharma Pontianak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo-ika.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/logo-ika.png') }}" type="image/x-icon">
    <!-- theme meta -->
    <meta name="theme-name" content="reporter" />
    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  </head>

  <body>

    @include('components.frontend._header')

    <main>
      <section class="section">
        <div class="container">
          <div class="row no-gutters-lg">
            @foreach ($data as $item)
              <img src="{{ asset($item->image) }}" alt="" class="w-100">
              <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="row">
                  <div class="mt-3">
                    <h2 class="section-title">{{ $item->title }}</h2>
                  </div>

                  <div class="content text-left">
                    <p>{!! $item->contents !!}</p>
                  </div>

                </div>
              </div>
            @endforeach

            <!-- Widgets -->
            <div class="col-lg-4">
              <div class="widget-blocks">
                <div class="row">
                  <div class="col-lg-12 col-md-6">
                    <div class="widget">
                      <div class="my-4">
                        <h2 class="section-title mb-3">Recommended</h2>
                      </div>
                      <div class="widget-body">
                        <div class="widget-list">

                          @foreach ($posts as $item)
                            <div class="media-body">
                              <h3><a class="post-title post-title-sm"
                                  href="{{ route('post.single.page', $item->slug) }}">{{ $item->title }}</a></h3>
                              <p class="mb-0 small">{!! Str::limit($item->contents, '100', '...') !!}</p>
                            </div>
                          @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <div class="widget">
                      <h2 class="section-title mb-3">Categories</h2>
                      <div class="widget-body">
                        <ul class="widget-list">
                            @foreach ($categories as $item)
                                <li>
                                    <a href="{{ route('posts.by.category', $item->id) }}">{{ $item->name }}
                                        @if (($item->posts->count()) > 0)
                                            <span class="ml-auto">({{ $item->posts->count() }})</span>
                                        @else

                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    @include('components.frontend._footer')


    <!-- # JS Plugins -->
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>

  </body>

</html>
