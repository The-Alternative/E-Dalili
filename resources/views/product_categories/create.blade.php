@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">Add a new Brand</div>
        <div class="card-body">
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="product_category">Product Category Description:</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="write description"></textarea>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-success">Add</a>
                </div>
            </form>
        </div>
    </div>
@endsection
