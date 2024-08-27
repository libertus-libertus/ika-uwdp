@extends('components._admin')
@section('title', 'Tags')

@section('content')

  <!-- Alert Sukses -->
  @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        {{ Session('success') }}
      </div>
    </div>
  @endif
  <!-- .end-sukses -->

  <!-- Tombol Tambah -->
  <a href="{{ route('tag.create') }}" class="btn btn-primary btn-sm btn-flat">
    <i class="fa fa-plus-circle"> Tambah Tag</i>
  </a>
  <!-- .end-tombol-tambah -->

  <!-- Datatabel -->
  <table class="table table-striped table-hover table-sm table-bordered my-3">
    <thead>
      <tr>
        <th style="width: 45px">No.</th>
        <th style="width: 45%">Nama Tag</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tags as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td class="text-center">
            <div class="btn-group">
              <a href="{{ route('tag.edit', $item->id) }}" class="btn btn-warning btn-sm btn-flat">
                <i class="fa fa-edit"></i>
                Ubah
              </a>
              <form action="{{ route('tag.destroy', $item->id) }}" method="post" class="d-inline"
                onsubmit="return confirm('Yakin mau menghapus data ini?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm btn-flat">
                  <i class="fa fa-times-circle"></i>
                  Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <!-- .end-datatabel -->

  <!-- Manual Pagination-->
  {{ $tags->links() }}
  <!-- .end-manual-pagination-->

@endsection
