@extends('components._admin')
@section('title', 'Tambah Post')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-2">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Judul" autofocus>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mb-2">
                <label for="category_id">Kategori</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option disabled selected>Pilih Kategori</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group mb-2">
                <label for="tags">Boleh pilih beberapa tags</label>
                <select class="form-control select2" multiple="" name="tags[]">
                    @foreach ($tags as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group mb-2">
                <label for="contents">Deskripsi Konten</label>
                <textarea class="form-control" name="contents" id="contents" rows="20"></textarea>
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
                    Simpan
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
