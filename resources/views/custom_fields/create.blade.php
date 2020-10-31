@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">Add a new Custom Field</div>
        <div class="card-body">
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="custom_field">Custom Field Name:</label>
                    <input type="text" class="form-control" placeholder="Add a new custom field">
                </div>
                <div class="form-group">
                    <label for="custom_field">Custom_Field Description:</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="write description"></textarea>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-success">Add</a>
                </div>
            </form>
        </div>
    </div>
@endsection
