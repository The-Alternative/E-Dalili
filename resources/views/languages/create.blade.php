@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">Add a new Language</div>
        <div class="card-body">
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="language">Language Name:</label>
                    <input type="text" class="form-control" placeholder="Add a new language">
                </div>
                <div class="form-group">
                    <label for="language">language slug:</label>
                    <input type="text" class="form-control" placeholder="Add language slug">
                </div>
                <div class="form-group">
                    <label for="language">language code:</label>
                    <input type="text" class="form-control" placeholder="Add language code">
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label for="language" style="padding-top: 5px; padding-right: 10px">Is Rtl:</label>
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href="#" class="btn btn-success" style="margin-top: 10px">Add</a>
                </div>
            </form>
        </div>
    </div>
@endsection
