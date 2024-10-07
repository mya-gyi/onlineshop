@extends('layouts.admin')

@section('content')
<h2>Edit Product</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label>Descripton</label>
        <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
    </div>
    <div class="form-conrol">
        <label>Category</label>
        <select name="category_id" class="form-control">
            @foreach ($categories as $cateegory)
                <option value="{{ $category->id }}"
                    @if ($category->id === $product->category_id) selected @endif
                > {{ $category->name }} </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-button">Update</button>
</form>
@endsection
