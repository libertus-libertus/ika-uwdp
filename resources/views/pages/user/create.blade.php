@extends('components._admin')
@section('title', 'Tambah Anggota')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('user.store') }}" method="post">
              @csrf

              <div class="form-group row mb-3">
                <div class="col">
                  <label for="name">Nama Anggota</label>
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" autofocus>
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="col">
                  <label for="email">E-Mail</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-3">
                <div class="col">
                  <label for="level">Hak Akses</label>
                  <select name="level" id="level" class="form-control">
                    <option disabled selected>Pilih Level</option>
                    <option value="1">Admin</option>
                    <option value="0">Anggota</option>
                  </select>
                  @error('level')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="col">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                  @error('password')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>

              <!-- Tombol -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm btn-flat">
                  <i class="fa fa-bookmark" aria-hidden="true"></i>
                  Simpan
                </button>
                <a href="{{ route('user.index') }}" type="submit" class="btn btn-warning btn-sm btn-flat">
                  <i class="fa fa-undo"></i>
                  Kembali
                </a>
              </div>
              <!-- .end-tombol -->

            </form>
            <!-- .end-form -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
