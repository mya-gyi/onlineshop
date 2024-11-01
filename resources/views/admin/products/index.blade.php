@extends('laayouts.app')

@section('content')

<h2>Product</h2>

<a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <form action="{{ route('product.destory', $product->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
