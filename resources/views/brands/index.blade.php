@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('brands.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Brand</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Brands</div>
            @if($brands->count() > 0)
            <table class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th class="float-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>
                                {{ $brand->name }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/'.$brand->image) }}" width="100px" height="50px">
                            </td>
                            <td>
                                <form class="float-right ml-2" action="{{route('brands.destroy', $brand->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        {{ $brand->trashed() ? 'Delete' : 'Trash' }}
                                    </button>
                                </form>
                                @if(!$brand->trashed())
                                    <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-primary float-right btn-sm">
                                        Edit
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </table>
            @else
                <div class="card-body">
                    <h1 class="text-center">
                        No Brands Yet.
                    </h1>
                </div>
            @endif
    </div>
@endsection

