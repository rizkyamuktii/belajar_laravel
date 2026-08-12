@extends('app')
@section('content')
  <form action="{{ route('update.peserta', $peserta->id) }}" method="post" class="form form-control">
    @csrf
    @method('PUT')
    {{-- @dd($peserta) --}}
    <div class="mb-3">
      <label for="" class="form-label">Nama</label>
      <input type="text" class="form form-control" name="nama" required value="{{ $peserta->name }}">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Umur</label>
      <input type="number" class="form form-control" name="umur" min="1" max="200" value="{{ $peserta->age }}">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="text" class="form form-control" name="email" required value="{{ $peserta->email }}">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Address</label>
      <textarea name="address" id="" cols="30" rows="5" class="form-control">{{ $peserta->address }}</textarea>
    </div>

    <div class="mb-3">
      <button type="submit" btn btn-primary>Simpan</button>
    </div>
  </form>
@endsection