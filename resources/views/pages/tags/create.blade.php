@extends('components._admin')
@section('title', 'Tambah Tag')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('tag.store') }}" method="post">
              @csrf
              <div class="form-group mb-2">
                <label for="name">Tag</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan tag" autofocus>
                @error('name')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm btn-flat">
                  <i class="fa fa-bookmark" aria-hidden="true"></i>
                  Simpan
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
