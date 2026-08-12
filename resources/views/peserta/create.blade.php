@extends('app')
@section('content')
  <form action="{{ route('store-peserta') }}" method="post" class="form form-control">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" class="form form-control" name="nama" required>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Umur</label>
      <input type="number" class="form form-control" name="umur" min="1" max="200">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="text" class="form form-control" name="email" required>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Address</label>
      <input type="text" class="form form-control" name="address">
    </div>

    <div class="mb-3">
      <button type="submit" btn btn-primary>Simpan</button>
    </div>
  </form>
@endsection