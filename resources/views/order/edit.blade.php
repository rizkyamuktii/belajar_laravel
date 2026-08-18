@extends('app')

@section('content')
    <form action="{{ route('product.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">Select One</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ $edit->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                value="{{ $edit->name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="number"
                name="price"
                id="price"
                class="form-control"
                value="{{ $edit->price }}">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input
                type="file"
                name="photo"
                id="photo"
                class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea
                name="description"
                id="description"
                cols="30"
                rows="10"
                class="form-control">{{ $edit->description }}</textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
