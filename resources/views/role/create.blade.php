@extends('layouts.app');

@section('content')
<form>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">role name":</label>
    <input type="text" class="form-control" name="name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection