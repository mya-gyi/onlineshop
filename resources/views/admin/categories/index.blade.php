@extends('layouts.admin')

@section('content')
<h2>Catgories</h2>

<a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>

<table class="teble">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i> Edit </a>
                    <form action="{{ route('categories.destory', $category->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
