@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('role.create') }}" 
        class="btn froleloat-right btn-success" style="margin-bottom: 10px">Add role</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All role</div>
          @if($role->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role as $role)
                            <tr>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('role.destroy', $role->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('role.edit',$role->id)}}" class="btn btn-primary float-right btn-sm">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </table>
          @else
              <div class="card-body">
                  <h1 class="text-center">
                      No role Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

