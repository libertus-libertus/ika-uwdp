 <!DOCTYPE html>

 <html lang="en-us">

   <head>
     <meta charset="utf-8">
     <title>{{ config('app.name') }} &mdash; Universitas Widya Dharma Pontianak</title>
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

     @include('components.frontend._carousel')

     <main>
       <section class="section">
         <div class="container">
           <div class="row no-gutters-lg">
             <div class="col-lg-8 mb-5 mb-lg-0">
               <h2 class="section-title mb-3">Latest Articles</h2>
               <div class="row">

                 @foreach ($posts as $item)
                   <div class="col-12 mb-4">
                     <article class="card article-card">
                       <a href="{{ route('post.single.page', $item->slug) }}">
                         <div class="card-image">
                           <div class="post-info"> <span
                               class="text-uppercase">{{ $item->created_at->format('d F Y') }}</span>
                             <span class="text-uppercase">{{ $item->created_at->diffForHumans() }}</span>
                           </div>
                           <img loading="lazy" decoding="async" src="{{ asset($item->image) }}" alt="Post Thumbnail"
                             class="w-100">
                         </div>
                       </a>
                       <div class="card-body px-0 pb-1">
                         <ul class="post-meta mb-2">
                           <li> <a href="#!">{{ $item->category->name }}</a>
                           </li>
                         </ul>
                         <h2 class="h1"><a class="post-title"
                             href="{{ route('post.single.page', $item->slug) }}">{{ $item->title }}</a></h2>
                         <p class="card-text">{!! Str::limit($item->contents, 150, '...') !!}</p>
                         @if (Str::limit($item->contents > 150))
                           <div class="content">
                             <a class="read-more-btn" href="{{ route('post.single.page', $item->slug) }}">Read Full
                               Article</a>
                           </div>
                         @endif
                       </div>
                     </article>
                   </div>
                 @endforeach

                 <div class="col-12">
                   <div class="row text-center">
                     <div class="col-12">
                       <a href="{{ route('post.list.page') }}" class="page-item active">
                         Load more
                       </a>
                     </div>
                   </div>
                 </div>

               </div>
             </div>

             <!-- Widgets -->
             <div class="col-lg-4">
               @include('components.frontend._widget')
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
