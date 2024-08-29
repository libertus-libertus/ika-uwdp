@extends('components._admin')
@section('title', 'Postingan / Berita')

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
  <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm btn-flat">
    <i class="fa fa-plus-circle"> Tambah Post</i>
  </a>
  <!-- .end-tombol-tambah -->

  <!-- Datatabel -->
  <table class="table table-striped table-hover table-sm table-bordered my-3">
    <thead>
      <tr>
        <th style="width: 45px">No.</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Daftar Tags</th>
        <th>Thumbnails</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->category->name }}</td>
          <td>
            @foreach ($item->tags as $tag)
                <li class="list-unstyled">- {{ $tag->name }}</li>
            @endforeach
          </td>
          <td><img src="{{ asset($item->image) }}" class="img-fluid" width="120"></td>
          <td class="text-center">
            <div class="btn-group">
              <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning btn-sm btn-flat">
                <i class="fa fa-edit"></i>
                Ubah
              </a>
              <form action="{{ route('post.destroy', $item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin mau menghapus data ini?')">
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
  {{ $posts->links() }}
  <!-- .end-manual-pagination-->

@endsection
