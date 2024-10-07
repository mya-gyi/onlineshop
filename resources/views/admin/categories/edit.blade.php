@extends('layouts.admin')

@section('content')
<h2>Edit Category</h2>

<form action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')
    <div class="form-control">
        <label>Edit Category</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>
    <button type="submit" class="btn btn-success"> <i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
</form>
@endsection
