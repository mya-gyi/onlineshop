@extends('layouts.admin')

@section('content')
<h2>Create Category</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-control">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
</form>
@endsection
