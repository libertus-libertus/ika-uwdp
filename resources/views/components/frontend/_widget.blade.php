<div class="widget-blocks">
  <div class="row">
    <div class="col-lg-12 col-md-6">
      <div class="widget">
        <h2 class="section-title mb-3">Recommended</h2>
        <div class="widget-body">
          <div class="widget-list">
            @foreach ($widget as $item)
              <article class="card mb-4">
                <div class="card-image">
                  <div class="post-info"> <span class="text-uppercase">{{ $item->created_at->diffForHumans() }}</span>
                  </div>
                  <img loading="lazy" decoding="async" src="{{ asset($item->image) }}" alt="Post Thumbnail"
                    class="w-100">
                </div>
                <div class="card-body px-0 pb-1">
                  <h3><a class="post-title post-title-sm"
                      href="{{ route('post.single.page', $item->slug) }}">{{ $item->title }}</a></h3>
                  <p class="card-text">{!! Str::limit($item->contents, '100', '...') !!}</p>
                </div>
              </article>
            @endforeach

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
                  @if ($item->posts->count() > 0)
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
