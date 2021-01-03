<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scal=1, user-scalable=no">  <!-- First Mobile Meta -->

    <title>E-DALELY Design</title>

    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{url('/fontawesome/css/all.css')}}">
    <link href="{{ url('/css/project.css') }}" rel="stylesheet">


</head>
<body>
<div class="upper-bar">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-xs-12 imag">
            <img src="{{url('/img/logo/logo-4.png')}}">
        </div>
        <div class="col-md-10 col-sm-12  col-xs-12 text-center">
            <div class="customer-select sel4">
                <select>
                    <option>العربية</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                </select>
            </div>
            <span class="lang2">نطاق البحث</span>
            <div class="customer-select sel3">
                <select>
                    <option >الحي</option>
                    @foreach($streets as $street)
                        <option value="{{$street->id}}">{{$street->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="customer-select sel2">
                <select>
                    <option>المدينة</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="customer-select sel1">
                <select>
                    <option>المحافظة</option>
                    @foreach($governorates as $governorate)
                        <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                    @endforeach
                </select>
            </div>
            <span class="lang">اللغة</span><i class="fa fa-map-marker"></i>
        </div>
    </div>
</div>
<!-- End Upper Bar -->
{{--<div class="btn-danger text-center">{{$categories[6]->products[0]}}</div>--}}
<!-- Start landing -->
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="search col-xs-12 text-center">
                <i class="fa fa-search"></i><input class="input" type="search" placeholder="بحث">
            </div>
            <div class="col-xs-12 text-center">
                <div class="featuers">

                    <div> <span>E-Dalely</span> أضف متجرك إلى منصة</div>

                    <i class="fa fa-shopping-cart"></i><div class="shopping">عربة التسوق</div>
                    <i class="fa fa-map-marker"></i><div class="map">حدد موقعك</div>
                    <a href="{{route('login')}}"  style="color: #635f5f">
                        <i class="fa fa-user-circle "> </i>  <div class="user">تسجیل الدخول</div>
                    </a>
                </div> </div>
        </div>
    </div>
</div>
<!-- End landing -->
<!-- Start Navbar-->
<div class="navbars">
    <div class="container">
        <div class="row text-right">
            <div class="col-sm-12">
                @foreach($categories as $category)
                    <div>
                        <a class="nav-link" href="#">{{$category->name}}</a>
                    </div>
                @endforeach
                <div>
                    <a class="nav-link" href="#">جمیع الأقسام</a>
                </div>
            </div>
        </div></div>
</div>
<!-- End Navbar-->
<!-- Start Naver-->
<div class="naver">
    <div class="container">
        <div class="row text-right">
            <div class="col-sm-12">
                <div>
                    <button type="button" class="btn btn-light">مصانع</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light">شركات</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light">مھنیون وفنیون</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light">صیدلیات  وأدویة</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light">أطباء</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light">مطاعم ومقاھي</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light sell">مھرجان العروضات والتخفیضات</button>
                </div>
                <img src="{{asset('img/icon/1.png')}}">
                <div>
                    <button type="button" class="btn btn-light">متاجر</button>
                </div>
                <div>
                    <button type="button" class="btn btn-light products">منتجات</button>
                </div>
            </div>
        </div></div>
</div>
<!-- End Naver-->
<!-- Start Products -->
<div class="show-img">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img">
                <img src="{{asset('/img/cover/22.png')}}">
            </div>
            <div class="col-md-6 img">
                <img src="{{asset('/img/cover/11.png')}}">
            </div>
        </div>
    </div>
</div>
@if(count($recentProducts)>=4)
    <div class="show-prod">
        <div class="container">
            <div class="text-right mini">صدر حدیثا</div>
            <div class="row">
                @for($i=0;$i<4;$i++)
                    <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                        <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                            <img src="{{ asset('storage/'.$recentProducts[$i]->product_images[0]->image) }}" class="new">
                            <div class="name-mobile">{{$recentProducts[$i]->title}}</div>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div> @if(count($recentProducts[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($recentProducts[$i]->stores)>0)
                                        <?php $min=$recentProducts[$i]->stores[0]->pivot->price ?>
                                        @for($r=0;$r<count($recentProducts[$i]->stores);$r++)
                                            <?php if ($min> $recentProducts[$i]->stores[$r]->pivot->price)
                                                $min= $recentProducts[$i]->stores[$r]->pivot->price ?>
                                        @endfor
                                        <?php $max=$recentProducts[$i]->stores[0]->pivot->price ?>
                                        @for($r=0;$r<count($recentProducts[$i]->stores);$r++)
                                            <?php if ($max< $recentProducts[$i]->stores[$r]->pivot->price)
                                                $max= $recentProducts[$i]->stores[$r]->pivot->price ?>
                                        @endfor
                                        {{$max}}-{{$min}}
                                    @else
                                        لايوجد اسعار
                                    @endif</div> </div>
                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($recentProducts[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
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
                @for($i=0;$i<count($recentProducts);$i++)
                    <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                        <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                            <img src="{{ asset('storage/'.$recentProducts[$i]->product_images[0]->image) }}" class="new">
                            <div class="name-mobile">{{$recentProducts[$i]->title}}</div>
                            <div class="stars">
                                <span class="fa fa-star  checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div> @if(count($recentProducts[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($recentProducts[$i]->stores)>0)
                                        <?php $min=$recentProducts[$i]->stores[0]->pivot->price ?>
                                        @for($r=0;$r<count($recentProducts[$i]->stores);$r++)
                                            <?php if ($min> $recentProducts[$i]->stores[$r]->pivot->price)
                                                $min= $recentProducts[$i]->stores[$r]->pivot->price ?>
                                        @endfor
                                        <?php $max=$recentProducts[$i]->stores[0]->pivot->price ?>
                                        @for($r=0;$r<count($recentProducts[$i]->stores);$r++)
                                            <?php if ($max< $recentProducts[$i]->stores[$r]->pivot->price)
                                                $max= $recentProducts[$i]->stores[$r]->pivot->price ?>
                                        @endfor
                                        {{$max}}-{{$min}}
                                    @else
                                        لايوجد اسعار
                                    @endif</div> </div>
                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($recentProducts[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                            <button type="button" class="btn btn-light">اختیار</button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endif
<!-- show second div of products -->
@if(count($categories[6]->products)>=4)
    <div class="back-of products">
        <div class="text-right mio">
            العودة الى المدارس
        </div>
        <div class="show2-prod">
            <div class="container">
                <div class="row">
                    @for($i=0;$i<4;$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$categories[6]->products[$i]->product_images[0]->image) }}" class="shcool">
                                <div class="name-mobile">{{$categories[6]->products[$i]->title}}</div>
                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div> @if(count($categories[6]->products[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[6]->products[$i]->stores)>0)
                                            <?php $min=$categories[6]->products[$i]->stores[0]->pivot->price ?>
                                            @for($r=0;$r<count($categories[6]->products[$i]->stores);$r++)
                                                <?php if ($min> $categories[6]->products[$i]->stores[$r]->pivot->price)
                                                    $min= $categories[6]->products[$i]->stores[$r]->pivot->price ?>
                                            @endfor
                                            <?php $max=$categories[6]->products[$i]->stores[0]->pivot->price ?>
                                            @for($r=0;$r<count($categories[6]->products[$i]->stores);$r++)
                                                <?php if ($max< $categories[6]->products[$i]->stores[$r]->pivot->price)
                                                    $max= $categories[6]->products[$i]->stores[$r]->pivot->price ?>
                                            @endfor
                                            {{$max}}-{{$min}}
                                        @else
                                            لايوجد اسعار
                                        @endif</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[6]->products[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@else
    <div class="back-of products">
        <div class="text-right mio">
            العودة الى المدارس
        </div>
        <div class="show2-prod">
            <div class="container">
                <div class="row">
                    @for($i=0;$i<count($categories[6]->products);$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$categories[6]->products[$i]->product_images[0]->image) }}" class="shcool">
                                <div class="name-mobile">{{$categories[6]->products[$i]->title}}</div>
                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div> @if(count($categories[6]->products[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[6]->products[$i]->stores)>0)
                                            <?php $min=$categories[6]->products[$i]->stores[0]->pivot->price ?>
                                            @for($r=0;$r<count($categories[6]->products[$i]->stores);$r++)
                                                <?php if ($min> $categories[6]->products[$i]->stores[$r]->pivot->price)
                                                    $min= $categories[6]->products[$i]->stores[$r]->pivot->price ?>
                                            @endfor
                                            <?php $max=$categories[6]->products[$i]->stores[0]->pivot->price ?>
                                            @for($r=0;$r<count($categories[6]->products[$i]->stores);$r++)
                                                <?php if ($max< $categories[6]->products[$i]->stores[$r]->pivot->price)
                                                    $max= $categories[6]->products[$i]->stores[$r]->pivot->price ?>
                                            @endfor
                                            {{$max}}-{{$min}}
                                        @else
                                            لايوجد اسعار
                                        @endif</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[6]->products[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endif
<!-- show market-->
<div class="show-market">
    @foreach($brands as $brand)
        <img src="{{ asset('storage/'.$brand->image) }}">
    @endforeach
</div>
<!-- show 3 products -->
@if(count($categories[2]->products)>=4)
    <div class="back-of products">
        <div class="text-right mio">
            موبایلات واكسسوارات
        </div>
        <div class="show2-prod">
            <div class="container">
                <div class="row">
                    @for($i=0;$i<4;$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$categories[2]->products[$i]->product_images[0]->image) }}" class="phone">
                                <div class="name-mobile">{{$categories[2]->products[$i]->title}}</div>
                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div> @if(count($categories[2]->products[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[0]->stores)>0)
                                            <?php $min=$categories[2]->products[$i]->stores[0]->pivot->price ?>
                                            @for($i=0;$i<count($categories[2]->products[$i]->stores);$i++)
                                                <?php if ($min> $categories[2]->products[$i]->stores[$i]->pivot->price)
                                                    $min= $categories[2]->products[$i]->stores[$i]->pivot->price ?>
                                            @endfor
                                            <?php $max=$categories[2]->products[$i]->stores[0]->pivot->price ?>
                                            @for($i=0;$i<count($categories[2]->products[$i]->stores);$i++)
                                                <?php if ($max< $categories[2]->products[$i]->stores[$i]->pivot->price)
                                                    $max= $categories[2]->products[$i]->stores[$i]->pivot->price ?>
                                            @endfor
                                            {{$max}}-{{$min}}
                                        @else
                                            لايوجد اسعار
                                        @endif</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@else
    <div class="back-of products">
        <div class="text-right mio">
            موبایلات واكسسوارات
        </div>
        <div class="show2-prod">
            <div class="container">
                <div class="row">
                    @for($i=0;$i<count($categories[2]->products);$i++)
                        <div class="{{$i==0 ? 'col-lg-3 col-md-4 col-sm-6 col-xs-12' : ''}}{{$i==1 ? 'col-lg-3 col-md-4 col-sm-6' : ''}}{{$i==2 ? 'col-lg-3 col-md-4' : ''}}{{$i==3 ? 'col-lg-3' : ''}}">
                            <div class="{{$i==0 ? 'content-pro text-center' : ''}}{{$i==1 ? 'content-pro text-center NYW' : ''}}{{$i==2 ? 'content-pro text-center KAIDISI' : ''}}{{$i==3 ? 'content-pro text-center NYX' : ''}}">
                                <img src="{{ asset('storage/'.$categories[2]->products[$i]->product_images[0]->image) }}" class="phone">
                                <div class="name-mobile">{{$categories[2]->products[$i]->title}}</div>
                                <div class="stars">
                                    <span class="fa fa-star  checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div> @if(count($categories[2]->products[$i]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[0]->stores)>0)
                                            <?php $min=$categories[2]->products[$i]->stores[0]->pivot->price ?>
                                            @for($i=0;$i<count($categories[2]->products[$i]->stores);$i++)
                                                <?php if ($min> $categories[2]->products[$i]->stores[$i]->pivot->price)
                                                    $min= $categories[2]->products[$i]->stores[$i]->pivot->price ?>
                                            @endfor
                                            <?php $max=$categories[2]->products[$i]->stores[0]->pivot->price ?>
                                            @for($i=0;$i<count($categories[2]->products[$i]->stores);$i++)
                                                <?php if ($max< $categories[2]->products[$i]->stores[$i]->pivot->price)
                                                    $max= $categories[2]->products[$i]->stores[$i]->pivot->price ?>
                                            @endfor
                                            {{$max}}-{{$min}}
                                        @else
                                            لايوجد اسعار
                                        @endif</div> </div>
                                <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$i]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                <button type="button" class="btn btn-light">اختیار</button>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endif
<!-- --------------------------------------------- -->
<div class="show-der">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img text-center">
                <img src="{{asset('/img/dre/66.jpg')}}">
            </div>
            <div class="col-lg-6 img text-center">
                <img src="{{asset('/img/dre/77.jpg')}}">
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------- -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <div class="container">
        <!-- Indicators -->
        <!-- The slideshow -->
        <div class="row" style="width: 100%">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div>
                    <span class="last">اخر المشتركین</span>
                    <div class="last-subscriber">
                        @foreach($lastStores as $store)
                            <div class="subscriber text-center">
                                <div class="name-market">{{$store->title}}</div>
                                <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(2).jpg">
                                <div class="postion-market">{{$store->location}}</div>
                                <button type="button" class="btn btn-light">زیارة</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12">
                <div class="carousel-inner">
                    <?php $count = 0 ; ?>
                    @for($i=0; $i<round((count($categories[2]->products)/3));$i++)
                        <div class="carousel-item {{$i==0 ? 'active' : ''}}">
                            <div class="show2-prod">
                                <div class="container">
                                    <div class="row">
                                        @if(isset($categories[2]->products[$count]))
                                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                                <div class="content-pro text-center">
                                                    <img src="{{ asset('storage/'.$categories[2]->products[$count]->product_images[0]->image) }}" class="phone">
                                                    <div class="name-mobile">{{$categories[2]->products[$count]->title}}</div>
                                                    <div class="stars">
                                                        <span class="fa fa-star  checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div> @if(count($categories[2]->products[$count]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count]->stores)>0)
                                                                <?php $min=$categories[2]->products[$count]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count]->stores);$i++)
                                                                    <?php if ($min> $categories[2]->products[$count]->stores[$i]->pivot->price)
                                                                        $min= $categories[2]->products[$count]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                <?php $max=$categories[2]->products[$count]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count]->stores);$i++)
                                                                    <?php if ($max< $categories[2]->products[$count]->stores[$i]->pivot->price)
                                                                        $max= $categories[2]->products[$count]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                {{$max}}-{{$min}}
                                                            @else
                                                                لايوجد اسعار
                                                            @endif</div> </div>
                                                    <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                                    <button type="button" class="btn btn-light">اختیار</button>
                                                </div>
                                            </div>
                                        @endif
                                        @if(isset($categories[2]->products[$count+1]))
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="content-pro text-center NYW">
                                                    <img src="{{ asset('storage/'.$categories[2]->products[$count+1]->product_images[0]->image) }}" class="phone">
                                                    <div class="name-mobile">{{$categories[2]->products[$count+1]->title}}</div>

                                                    <div class="stars">
                                                        <span class="fa fa-star  checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div> @if(count($categories[2]->products[$count+1]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count+1]->stores)>0)
                                                                <?php $min=$categories[2]->products[$count+1]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count+1]->stores);$i++)
                                                                    <?php if ($min> $categories[2]->products[$count+1]->stores[$i]->pivot->price)
                                                                        $min= $categories[2]->products[$count+1]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                <?php $max=$categories[2]->products[$count+1]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count+1]->stores);$i++)
                                                                    <?php if ($max< $categories[2]->products[$count+1]->stores[$i]->pivot->price)
                                                                        $max= $categories[2]->products[$count+1]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                {{$max}}-{{$min}}
                                                            @else
                                                                لايوجد اسعار
                                                            @endif</div> </div>
                                                    <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count+1]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                                    <button type="button" class="btn btn-light">اختیار</button>
                                                </div>
                                            </div>
                                        @endif
                                        @if(isset($categories[2]->products[$count+2]))
                                            <div class="col-lg-4">
                                                <div class="content-pro text-center KAIDISI NYX">
                                                    <img src="{{ asset('storage/'.$categories[2]->products[$count+2]->product_images[0]->image) }}" class="phone">
                                                    <div class="name-mobile">{{$categories[2]->products[$count+2]->title}}</div>
                                                    <div class="stars">
                                                        <span class="fa fa-star  checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div> @if(count($categories[2]->products[$count+2]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count+2]->stores)>0)
                                                                <?php $min=$categories[2]->products[$count+2]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count+2]->stores);$i++)
                                                                    <?php if ($min> $categories[2]->products[$count+2]->stores[$i]->pivot->price)
                                                                        $min= $categories[2]->products[$count+2]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                <?php $max=$categories[2]->products[$count+2]->stores[0]->pivot->price ?>
                                                                @for($i=0;$i<count($categories[2]->products[$count+2]->stores);$i++)
                                                                    <?php if ($max< $categories[2]->products[$count+2]->stores[$i]->pivot->price)
                                                                        $max= $categories[2]->products[$count+2]->stores[$i]->pivot->price ?>
                                                                @endfor
                                                                {{$max}}-{{$min}}
                                                            @else
                                                                لايوجد اسعار
                                                            @endif</div> </div>
                                                    <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count+2]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                                    <button type="button" class="btn btn-light">اختیار</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count = $count+3 ?>
                    @endfor
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                <div class="col-sm-3 imges">
                    <img src="{{asset('img/dre/88.jpg')}}">
                    <img src="{{asset('img/dre/99.jpg')}}">
                </div>
                <div class="col-sm-9 imgs">
                    <img src="{{asset('img/dre/HEADPHONES.jpg')}}" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new products -->
<div id="deno" class="carousel slide" data-ride="carousel" style="margin-top: 40px;">
    <div class="col-sm-12">
        <div class="carousel-inner2">
            <?php $count = 0 ; ?>
            @for($i=0; $i<round((count($categories[2]->products)/4)+1);$i++)
                <div class="carousel-item {{$i==0 ? 'active' : ''}}">
                    <div class="show2-prod" style="background-image: linear-gradient(180deg, #fff, #828282)">
                        <div class="container">
                            <div class="row">
                                @if(isset($categories[2]->products[$count]))
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="content-pro text-center">
                                            <img src="{{ asset('storage/'.$categories[2]->products[$count]->product_images[0]->image) }}" class="phone">
                                            <div class="name-mobile">{{$categories[2]->products[$count]->title}}</div>
                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> @if(count($categories[2]->products[$count]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count]->stores)>0)
                                                        <?php $min=$categories[2]->products[$count]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count]->stores);$i++)
                                                            <?php if ($min> $categories[2]->products[$count]->stores[$i]->pivot->price)
                                                                $min= $categories[2]->products[$count]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        <?php $max=$categories[2]->products[$count]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count]->stores);$i++)
                                                            <?php if ($max< $categories[2]->products[$count]->stores[$i]->pivot->price)
                                                                $max= $categories[2]->products[$count]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        {{$max}}-{{$min}}
                                                    @else
                                                        لايوجد اسعار
                                                    @endif</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                @endif
                                @if(isset($categories[2]->products[$count+1]))
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="content-pro text-center NYW">
                                            <img src="{{ asset('storage/'.$categories[2]->products[$count+1]->product_images[0]->image) }}" class="phone">
                                            <div class="name-mobile">{{$categories[2]->products[$count+1]->title}}</div>
                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> @if(count($categories[2]->products[$count+1]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count+1]->stores)>0)
                                                        <?php $min=$categories[2]->products[$count+1]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+1]->stores);$i++)
                                                            <?php if ($min> $categories[2]->products[$count+1]->stores[$i]->pivot->price)
                                                                $min= $categories[2]->products[$count+1]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        <?php $max=$categories[2]->products[$count+1]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+1]->stores);$i++)
                                                            <?php if ($max< $categories[2]->products[$count+1]->stores[$i]->pivot->price)
                                                                $max= $categories[2]->products[$count+1]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        {{$max}}-{{$min}}
                                                    @else
                                                        لايوجد اسعار
                                                    @endif</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count+1]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                @endif
                                @if(isset($categories[2]->products[$count+2]))
                                    <div class="col-lg-3 col-md-4">
                                        <div class="content-pro text-center KAIDISI">
                                            <img src="{{ asset('storage/'.$categories[2]->products[$count+2]->product_images[0]->image) }}" class="phone">
                                            <div class="name-mobile">{{$categories[2]->products[$count+2]->title}}</div>
                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> @if(count($categories[2]->products[$count+2]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count+2]->stores)>0)
                                                        <?php $min=$categories[2]->products[$count+2]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+2]->stores);$i++)
                                                            <?php if ($min> $categories[2]->products[$count+2]->stores[$i]->pivot->price)
                                                                $min= $categories[2]->products[$count+2]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        <?php $max=$categories[2]->products[$count+2]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+2]->stores);$i++)
                                                            <?php if ($max< $categories[2]->products[$count+2]->stores[$i]->pivot->price)
                                                                $max= $categories[2]->products[$count+2]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        {{$max}}-{{$min}}
                                                    @else
                                                        لايوجد اسعار
                                                    @endif</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count+2]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                @endif
                                @if(isset($categories[2]->products[$count+3]))
                                    <div class="col-lg-3">
                                        <div class="content-pro text-center NYX">
                                            <img src="{{ asset('storage/'.$categories[2]->products[$count+3]->product_images[0]->image) }}" class="phone">
                                            <div class="name-mobile">{{$categories[2]->products[$count+3]->title}}</div>
                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> @if(count($categories[2]->products[$count+3]->stores)>0) <span>ل.س</span> @endif <div class="price" style="display: inline-block">  @if(count($categories[2]->products[$count+3]->stores)>0)
                                                        <?php $min=$categories[2]->products[$count+3]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+3]->stores);$i++)
                                                            <?php if ($min> $categories[2]->products[$count+3]->stores[$i]->pivot->price)
                                                                $min= $categories[2]->products[$count+3]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        <?php $max=$categories[2]->products[$count+3]->stores[0]->pivot->price ?>
                                                        @for($i=0;$i<count($categories[2]->products[$count+3]->stores);$i++)
                                                            <?php if ($max< $categories[2]->products[$count+3]->stores[$i]->pivot->price)
                                                                $max= $categories[2]->products[$count+3]->stores[$i]->pivot->price ?>
                                                        @endfor
                                                        {{$max}}-{{$min}}
                                                    @else
                                                        لايوجد اسعار
                                                    @endif</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في {{count($categories[2]->products[$count+3]->stores)}} متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count = $count+4 ?>
            @endfor
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#deno" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#deno" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- End Products -->
<!-- Start About-Us -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 ">
                <h3>Get to Know Us</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers Press</a></li>
                    <li><a href="#">Releases</a></li>
                    <li><a href="#">E-DALELY Cares</a></li>
                    <li><a href="#">Gift a Smile</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Connect with</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Join Us</h3>
                <ul>
                    <li><a href="#">Sell on E-Dalely</a></li>
                    <li><a href="#">Sell under E-Dalely</a></li>
                    <li><a href="#">Accelerator</a></li>
                    <li><a href="#">Become an Affiliate</a></li>
                    <li><a href="#">Fulfilment by E-Dalely</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Let Us Help</h3>
                <ul>
                    <li><a href="#"> Your Account</a></li>
                    <li><a href="#">E-Dalely App Download </a></li>
                    <li><a href="#"> E-Dalely Assistant Download</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <hr>
            <div class="imag">
                <img src="{{asset('img/logo/logo-3.png')}}">
            </div>
            <div class="row" style="width: 1140px;">
                <div class="col-md-2 col-sm-4 col-xs-4 text-center">
                    <div class="dlely-card">
                        <div>E-DALELY Points</div>
                        <img src="{{asset('img/icon/4.png')}}">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 text-center">
                    <div class="work-us">

                        <div><span>Get It On</span>Google Play</div>
                        <img src="{{asset('img/icon/3.png')}}">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 text-center">
                    <div class="work-us" style="padding-top: 3px">
                        <div>App Store</div>
                        <img src="{{asset('img/icon/2.png')}}">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 visiter text-center">
                    <ul>
                        المتصلین
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 visiter text-cnter">
                    <ul>
                        الزیارات
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('/js/projec1.js')}}"></script>
<script src="{{url('/js/jquery-3.5.1.js')}}"></script>
<script src="{{url('/js/popper.main.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<script src="{{url('/js/flickity.pkgd.min.js')}}"></script>
</body>
</html>
