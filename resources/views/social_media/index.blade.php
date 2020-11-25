@extends('layouts.app');

@section('content')
    <div class="clearfix">
        <a href="{{ route('social_media.create') }}" 
        class="btn froleloat-right btn-success" style="margin-bottom: 10px">Add social media</a>
    </div>
    <div class="card card-default">

        <div class="card-header"> All social_media</div>
          @if($social_media->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="float-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($social_media as $social_media)
                            <tr>
                                <td>
                                    {{ $social_media->name }}
                                </td>
                                <td>
                                    <form class="float-right ml-2" action="{{route('social_media.destroy', $social_media->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="{{route('social_media.edit',$social_media->id)}}" class="btn btn-primary float-right btn-sm">
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
                      No social media Yet.
                  </h1>
              </div>
          @endif
    </div>
@endsection

