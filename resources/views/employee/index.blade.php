@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('employee.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add employee</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Employee</div>
          @if($employee->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>first name</th>
                            <th>last name</th>
                            <th>age</th>
                            <th>sex</th>
                            <th>image</th>
                            <th>job_title</th>
                            <th>certificate</th>
                            <th>start_date</th>
                            <th>upgrade</th>
                            <th>start_date</th>
                            <th>salary</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $employee)
                            <tr>
                                <td>
                                    {{ $employee->role_id }}
                                </td>
                                <td>
                                    {{ $employee->first_name }}
                                </td>
                                <td>
                                    {{ $employee->l_name }}
                                </td>
                                <td>
                                    {{ $employee->age }}
                                </td>
                                <td>
                                    {{ $employee->sex }}
                                </td>
                                <td>
                                    {{ $employee->image }}
                                </td>
                                <td>
                                    {{ $employee->job_title }}
                                </td>
                                <td>
                                    {{ $employee->certificate }}
                                </td>
                                <td>
                                    {{ $employee->start_date }}
                                </td>
                                <td>
                                    {{ $employee->upgrade }}
                                </td>
                                <td>
                                    {{ $employee->start_date }}
                                </td>
                                <td>
                                    {{ $employee->salary }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('employee.destroy', $employee->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No Products Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

