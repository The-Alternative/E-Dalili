@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('categories.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Category</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Categories</div>
        <div class="card-body"> No categories yet</div>
    </div>
@endsection
