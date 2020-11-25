@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('customer_type.create') }}" 
        class="btn froleloat-right btn-success" style="margin-bottom: 10px">Add customer_type</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All customer_type</div>
          @if($bunch_customer_type->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer_type as $customer_type)
                            <tr>
                                <td>
                                    {{ $customer_type->name }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('customer_type.destroy', $customer_type->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('customer_type.edit',$customer_type->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No customer_type Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

