@extends('app')
@section('content')
    <form action="{{ route('product.store') }}" method="post">@csrf
        <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select One</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Photo</label>
            <input type="file" name="photo">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection