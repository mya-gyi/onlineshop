@extends('layouts.admin')

@section('content')

<h2>Create Product</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="name">Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="name">Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="name">Category</label>
        <select name="categories_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> Create</button>
</form>
