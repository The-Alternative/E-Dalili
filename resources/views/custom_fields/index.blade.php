@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('custom_fields.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add custom_fields</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Custom Fields</div>
        <div class="card-body"> No custom_fields yet</div>
    </div>
@endsection
