@extends('components._admin')
@section('title', 'Ubah Post')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="form-group mb-2">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Judul" value="{{ $post->title }}" autofocus>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mb-2">
                <label for="category_id">Kategori</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option disabled selected>Pilih Kategori</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $post->category_id)
                                selected
                            @endif>

                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mb-2">
                <label for="tags">Boleh pilih beberapa tags</label>
                <select class="form-control select2" multiple="" name="tags[]">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}"
                            @foreach ($post->tags as $item)
                                @if ($tag->id == $item->id)
                                    selected
                                @endif
                            @endforeach>

                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
              </div>
              <div class="form-group mb-2">
                <label for="contents">Deskripsi Konten</label>
                <textarea class="form-control" name="contents" id="contents" rows="20">{{ $post->contents }}</textarea>
                @error('contents')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mb-2">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm btn-flat">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    Ubah
                  </button>
                  <a href="{{ url('/post') }}" type="submit" class="btn btn-warning btn-sm btn-flat">
                    <i class="fa fa-undo"></i>
                    Kembali
                  </a>
              </div>
            </form>
            <!-- .end-form -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('contents');
</script>
@endsection
