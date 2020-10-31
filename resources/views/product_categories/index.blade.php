@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('product_categories.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Product Categories</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Product Categories</div>
        <div class="card-body"> No product_categories yet</div>
    </div>
@endsection
