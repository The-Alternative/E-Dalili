@extends('layouts.app');

@section('content')
    <div class="card card-default">
        <div class="card-header">All Empolyees</div>
        <div class="card-body">
            <form action="{{ route('employee.create') }}"   method="get" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="employee">role:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="role"
                    name="role_id">
                </div>

                <div class="form-group">
                    <label for="employee">First Name:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="first name"
                    name="fname">
                </div>

                <div class="form-group">
                    <label for="employee">last name:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="last name"
                    name="lname">
                </div>

                <div class="form-group">
                    <label for="employee">Age:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder=" Age"
                    name="age">
                </div>

                <div class="form-group">
                    <label for="employee">sex:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="sex"
                    name="sex">
                </div>

                <div class="form-group">
                    <label for="employee">image:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="Add last name"
                    name="image">
                </div>
                <div class="form-group">
                    <label for="employee">location:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="Add last name"
                    name="location">
                </div>
                <div class="form-group">
                    <label for="employee">Email:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="Email"
                    name="email">
                </div>
                <div class="form-group">
                    <label for="employee">job_title:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="job_title"
                    name="job_title">
                </div>
                <div class="form-group">
                    <label for="employee">certificate:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="certificate"
                    name="certificate">
                </div>
                <div class="form-group">
                    <label for="employee">start_datecertificate:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="start_date"
                    name="start_date">
                </div>
                <div class="form-group">
                    <label for="employee">upgrade:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="upgrade:"
                    name="upgrade">
                </div>
                <div class="form-group">
                    <label for="employee">salary:</label>
                    <input type="text" 
                    class="form-control" 
                    placeholder="salary"
                    name="salary">
                </div>
                <div class="form-group">
                    <button action="{{ route('employee.store') }}"   method="post" type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
