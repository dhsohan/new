@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Edit Category</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group" style="border: 1px solid black">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
