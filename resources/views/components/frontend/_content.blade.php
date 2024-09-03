@include('components.frontend._header')
<!-- section -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div id="hot-post" class="row hot-post">
        @yield('main-content')
    </div>
        @include('components.frontend._widget')
    </div>
  </div>
  <!-- .end-container -->
</div>
<!-- .end-section -->
@include('components.frontend._footer')
