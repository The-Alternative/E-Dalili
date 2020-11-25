@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('customer.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add customer</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All customer</div>
          @if($customer->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                        <th>role_id</th>
                        <th>bunch_id</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>age</th>
                            <th>adress</th>
                            <th>location</th>
                            <th>email</th>
                            <th>bunch</th>
                            <th>bunch_date</th>
                            <th>E-dalely_point</th>
                            <th>precentage </th>
                            <th>customer_type_id</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $customer)
                            <tr>
                                <td>
                                    {{ $customer->role_id }}
                                </td>
                                <td>
                                    {{ $customer->bunch_id }}
                                </td>
                                <td>
                                    {{ $customer->first_name }}
                                </td>
                                <td>
                                    {{ $customer->l_name }}
                                </td>
                                <td>
                                    {{ $customer->age }}
                                </td>
                                <td>
                                    {{ $customer->adress }}
                                </td>
                                <td>
                                    {{ $customer->image }}
                                </td>
                                <td>
                                    {{ $customer->location }}
                                </td>
                                <td>
                                    {{ $customer->email }}
                                </td>
                                <td>
                                    {{ $customer->bunch }}
                                </td>
                                <td>
                                    {{ $customer->bunch_date }}
                                </td>
                                <td>
                                    {{ $customer->E-dalely_point }}
                                </td>
                                <td>
                                    {{ $customer->precentage }}
                                </td>
                                <td>
                                    {{ $customer->customer_type_id }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('customer.destroy', $customer->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No customer Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

