@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('languages.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Language</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Languages</div>
        <div class="card-body"> No languages yet</div>
    </div>
@endsection
