@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('product_customfields.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Product Customfields</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Product Customfields</div>
        <div class="card-body"> No product_customfields yet</div>
    </div>
@endsection
