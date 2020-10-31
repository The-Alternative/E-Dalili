@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('products.create') }}" class="btn float-right btn-success" style="margin-bottom: 10px">Add Product</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All Products</div>
          @if($products->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    {{ $product->title }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('products.destroy', $product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary float-right btn-sm">
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

