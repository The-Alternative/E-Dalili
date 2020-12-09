@extends('layouts.app2');

@section('content')
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </div>
    @if(count($stores[0]->products)>=4)
        <div class="show-prod">
            <div class="container">
                <div class="text-right mini">صدر حدیثا</div>
                <div class="row">
                    @for($i=0;$i<4;$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$stores[0]->products[$i]->product_images[0]->image) }}" class="new">
                                <div class="name-mobile">{{$stores[0]->products[$i]->title}}</div>

                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div><span>ل.س</span><div class="price" style="display: inline-block">
                                    {{$stores[0]->products[$i]->pivot->price}}</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر  {{$stores[0]->products[$i]->pivot->qty}} قطعة</div><span class="fa fa-check-circle"></span></div>

                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    @else
        <div class="show-prod">
            <div class="container">
                <div class="text-right mini">صدر حدیثا</div>
                <div class="row">
                    @for($i=0;$i<count($stores[0]->products);$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$stores[0]->products[$i]->product_images[0]->image) }}" class="new">
                                <div class="name-mobile">{{$stores[0]->products[$i]->title}}</div>

                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div><span>ل.س</span><div class="price" style="display: inline-block">
                                    {{$stores[0]->products[$i]->pivot->price}}</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر  {{$stores[0]->products[$i]->pivot->qty}} قطعة</div><span class="fa fa-check-circle"></span></div>

                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    @endif

@endsection
