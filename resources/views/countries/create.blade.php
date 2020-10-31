@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">Add a new Country</div>
        <div class="card-body">
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="country">Country Name:</label>
                    <input type="text" class="form-control" placeholder="Add a new country">
                </div>
                <div class="form-group">
                    <label for="country">Iso code:</label>
                    <input type="text" class="form-control" placeholder="Add iso code">
                </div>
                <div class="form-group">
                    <label for="country">Currency:</label>
                    <input type="text" class="form-control" placeholder="Add currency">
                </div>
                <div class="form-group">
                    <label for="country">call perfix:</label>
                    <input type="number" class="form-control" placeholder="00963">
                </div>
                <div class="form-group">
                    <label for="country">Zip Code:</label>
                    <input type="text" class="form-control" placeholder="zip code">
                </div>
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label for="country">Is Active:</label>
                        <input type="checkbox" name="is active">
                    </div>
                </div>

                <div class="form-group">
                    <a href="#" class="btn btn-success" style="margin-top: 10px;">Add</a>
                </div>
            </form>
        </div>
    </div>
@endsection
