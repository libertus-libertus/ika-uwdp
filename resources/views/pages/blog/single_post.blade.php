@extends('components.frontend._content')

@section('main-content')
  @foreach ($data as $isi_content)
  <!-- PAGE HEADER -->
  <div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url('{{ asset($isi_content->image) }}');" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="{{ route('post.single.page', $isi_content->slug) }}">{{ $isi_content->category->name }}</a>
                </div>
                <h1>{{ $isi_content->title }}</h1>
                <ul class="post-meta">
                    <li><a href="author.html">{{ $isi_content->users->name }}</a></li>
                    <li>{{ $isi_content->created_at->diffForHumans() }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
</header>
<div class="col-md-8 hot-post-left">

    <br>

    {{ $isi_content->contents }}
  @endforeach
@endsection
