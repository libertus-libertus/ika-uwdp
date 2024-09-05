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
          <div class="row">
            @foreach ($data_post as $item)
            <div class="col-lg-10">
                <div class="card card-articles">
                    <div class="card-body">
                        <h3 class="post-title post-title-sm">
                            {{ $item->title }}
                        </h3>
                        <p>{!! Str::limit($item->contents, '450', '...') !!}</p>
                        @if (Str::limit($item->contents) > 450)
                            <a href="{{ route('post.single.page', $item->slug) }}" style="color: #218380;">
                                Read Full Articles
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          <div class="row text-center d-block m-auto">
            {{ $data_post->links() }}
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
