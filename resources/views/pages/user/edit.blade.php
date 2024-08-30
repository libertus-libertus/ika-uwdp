@extends('components._admin')
@section('title', 'Ubah Anggota')

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <!-- Form -->
            <form action="{{ route('user.update', $user->id) }}" method="post">
              @csrf
              @method('put')

              <div class="form-group row mb-3">
                <div class="col">
                  <label for="name">Nama Anggota</label>
                  <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="name"
                    autofocus>
                  @error('name')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="col">
                  <label for="email">E-Mail</label>
                  <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email" disabled>
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
                    <option value="1"
                        @if ($user->level == 1)
                            selected
                        @endif>
                        Admin
                    </option>
                    <option value="0"
                        @if ($user->level == 0)
                            selected
                        @endif>
                        Anggota
                    </option>
                  </select>
                  @error('level')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>

              <!-- Tombol -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm btn-flat">
                  <i class="fa fa-bookmark" aria-hidden="true"></i>
                  Ubah
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
