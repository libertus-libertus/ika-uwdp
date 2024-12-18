<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>IKA UWDP &mdash; Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/modules/select2/dist/css/select2.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->

    @yield('css')
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Navbar -->
        @include('components.layouts._navbar')
        <!-- .end-navbar -->

        <div class="main-sidebar sidebar-style-2">

            <!-- Sidebar-->
            @include('components.layouts._sidebar')
            <!-- .end-sidebar-->

        </div>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>@yield('title')</h1>
            </div>

            <div class="section-body">
                @yield('content')
            </div>
          </section>
        </div>

        <!-- Footer -->
        @include('components.layouts._footer')
        <!-- .end-footer -->
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('backend/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/modules/popper.js') }}"></script>
    <script src="{{ asset('backend/modules/tooltip.js') }}"></script>
    <script src="{{ asset('backend/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/modules/moment.min.js') }}"></script>
    <script src="{{ asset('backend/js/stisla.js') }}"></script>
    <script src="{{ asset('backend/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>

    @yield('js')
  </body>

</html>
