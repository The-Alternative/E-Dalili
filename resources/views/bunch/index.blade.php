@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('bunch.create') }}" 
        class="btn froleloat-right btn-success" style="margin-bottom: 10px">Add bunch</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All bunch</div>
          @if($bunch->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bunch as $bunch)
                            <tr>
                                <td>
                                    {{ $bunch->name }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('bunch.destroy', $bunch->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('bunch.edit',$bunch->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No bunch bunch Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

