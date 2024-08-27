@extends('components._admin')
@section('title', 'Ubah Tag')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('tag.update', $tag->id) }}" method="post">
              @csrf
              @method('put')
              <div class="form-group mb-2">
                <label for="name">Tag</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $tag->name }}" placeholder="Kategori">
                @error('name')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm btn-flat">
                  <i class="fa fa-bookmark" aria-hidden="true"></i>
                  Ubah Tag
                </button>
                <a href="{{ route('tag.index') }}" type="submit" class="btn btn-warning btn-sm btn-flat">
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
