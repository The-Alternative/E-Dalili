@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">Add a new Brand</div>
        <div class="card-body">
            <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="brand">Brand Name:</label>
                    <input type="text" name="name" class="@error('name') is-invalid
                     @enderror form-control" placeholder="Add a new brand">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="brand">Brand slug:</label>
                    <input type="text" name="slug" class="@error('slug') is-invalid
                     @enderror form-control" placeholder="Add brand slug">
                    @error('slug')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="brand">Brand Description:</label>
                    <textarea class="@error('description') is-invalid
                     @enderror form-control" name="description" aria-label="With textarea" placeholder="write description"></textarea>
                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="brand image">Brand image:</label>
                    <input type="file" name="image" class="@error('slug') is-invalid
                     @enderror form-control" placeholder="Add brand slug">
                    @error('slug')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit"  class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
