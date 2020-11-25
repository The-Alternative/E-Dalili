@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('bunch_details.create') }}" 
        class="btn froleloat-right btn-success" style="margin-bottom: 10px">Add bunch_details</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All bunch_details</div>
          @if($bunch_details->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bunch_details as $bunch_details)
                            <tr>
                                <td>
                                    {{ $bunch_details->name }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('bunch_details.destroy', $bunch_details->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('bunch_details.edit',$bunch_details->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No bunch_details Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

