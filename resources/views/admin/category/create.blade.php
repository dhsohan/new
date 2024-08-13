@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Create New Category</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
            </div>
        </form>
    </div>
@endsection
