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
{{--@foreach($products as $product)--}}
{{--    <div><span>{{$product->title}}</span></div>--}}
{{--    <div><span>{{$product->created_at}}</span></div>--}}
{{--@endforeach--}}
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
{{--<div class="btn-danger text-center">{{(count($categories[2]->products))}}</div>--}}
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

                    <i class="fa fa-user-circle "> </i>  <div class="user">تسجیل الدخول</div>
                </div> </div>
        </div>
    </div>

</div>

<!-- End landing -->
</div>

        @yield('content')

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
<!-- End About-Us -->
<script src="{{url('/js/projec1.js')}}"></script>
<script src="{{url('/js/jquery-3.5.1.js')}}"></script>
<script src="{{url('/js/popper.main.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<script src="{{url('/js/flickity.pkgd.min.js')}}"></script>
</body>
</html>
