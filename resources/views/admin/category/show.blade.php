@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Category Details</h1>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><strong>Name:</strong> {{ $category->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $category->description }}</p>
            </div>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
