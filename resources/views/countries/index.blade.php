@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('countries.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Country</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Countries</div>
        <div class="card-body"> No Countries yet</div>
    </div>
@endsection
