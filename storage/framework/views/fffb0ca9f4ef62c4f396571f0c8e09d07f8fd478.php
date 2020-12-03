<!DOCTYPE html>

<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scal=1, user-scalable=no">  <!-- First Mobile Meta -->

    <title>E-DALELY Design</title>

    <link rel="stylesheet" href="<?php echo e(url('/css/bootstrap.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(url('/fontawesome/css/all.css')); ?>">
    <link href="<?php echo e(url('/css/project.css')); ?>" rel="stylesheet">

</head>
<body>




<div class="upper-bar">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-xs-12 imag">
            <img src="<?php echo e(url('/img/logo/logo-4.png')); ?>">
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
                    <?php $__currentLoopData = $streets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $street): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($street->id); ?>"><?php echo e($street->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="customer-select sel2">
                <select>
                    <option>المدينة</option>
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="customer-select sel1">
                <select>

                    <option>المحافظة</option>
                    <?php $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($governorate->id); ?>"><?php echo e($governorate->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <span class="lang">اللغة</span><i class="fa fa-map-marker"></i>
        </div>

    </div>
</div>


<!-- End Upper Bar -->


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
<!-- Start Navbar-->
<div class="navbars">
    <div class="container">
        <div class="row text-right">
            <div class="col-sm-12">

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a class="nav-link" href="#"><?php echo e($category->name); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <img src="<?php echo e(asset('img/icon/1.png')); ?>">
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
                <img src="<?php echo e(asset('/img/cover/22.png')); ?>">
            </div>
            <div class="col-md-6 img">
                <img src="<?php echo e(asset('/img/cover/11.png')); ?>">
            </div>
        </div>
    </div>
</div>





<div class="show-prod">
    <div class="container">
        <div class="text-right mini">صدر حدیثا</div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="content-pro text-center">

                        <img src="<?php echo e(asset('storage/'.$recentProductImages[0]->image)); ?>" class="new">

                    <div class="name-prod"><?php echo e($recentProducts[0]->title); ?></div>
                    <div class="color-prod"> اللون :<?php echo e($recentProducts[0]->customfields[0]->pivot->value); ?>  </div>
                    <div class="stars">
                        <span class="fa fa-star  checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 3000-2800</div> </div>
                    <div class="avilble"><div  style="display: inline-block">متوفر في 5 متاجر</div><span class="fa fa-check-circle"></span></div>
                    <button type="button" class="btn btn-light">اختیار</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="content-pro text-center NYW">
                    <img src="<?php echo e(asset('storage/'.$recentProductImages[1]->image)); ?>" class="new">
                    <div class="name-prod"><?php echo e($recentProducts[1]->title); ?></div>
                    <div class="color-prod">اللون :  <?php echo e($recentProducts[1]->customfields[0]->pivot->value); ?> </div>
                    <div class="stars">
                        <span class="fa fa-star  checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 1300-1100</div> </div>
                    <div class="avilble"><div  style="display: inline-block">متوفر في 5 متاجر</div><span class="fa fa-check-circle"></span></div>
                    <button type="button" class="btn btn-light">اختیار</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="content-pro text-center KAIDISI">
                    <img src="<?php echo e(asset('storage/'.$recentProductImages[2]->image)); ?>" class="new">
                    <div class="name-prod"> <?php echo e($recentProducts[2]->title); ?></div>
                    <div class="color-prod"> اللون :<?php echo e($recentProducts[2]->customfields[0]->pivot->value); ?>  </div>
                    <div class="stars">
                        <span class="fa fa-star  checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 1900-1700</div> </div>
                    <div class="avilble"><div  style="display: inline-block">متوفر في 3 متاجر</div><span class="fa fa-check-circle"></span></div>
                    <button type="button" class="btn btn-light">اختیار</button>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content-pro text-center NYX">
                    <img src="<?php echo e(asset('storage/'.$recentProductImages[3]->image)); ?>" class="new">
                    <div class="name-prod"><?php echo e($recentProducts[3]->title); ?></div>
                    <div class="color-prod"> اللون :<?php echo e($recentProducts[3]->customfields[0]->pivot->value); ?>  </div>
                    <div class="stars">
                        <span class="fa fa-star  checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 2400-2000</div> </div>
                    <div class="avilble"><div  style="display: inline-block">متوفر في 5 متاجر</div><span class="fa fa-check-circle"></span></div>
                    <button type="button" class="btn btn-light">اختیار</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show second div of products -->
<div class="back-of products">
    <div class="text-right mio">
        العودة الى المدارس
    </div>
    <div class="show2-prod">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-pro text-center">
                        <img src="img/products/3.jpg" class="shcool">
                        <div class="name-prod">ترمس ماء صغیر </div>
                        <div class="color-prod"> نصف لیتر </div>
                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 900-700</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 10 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="content-pro text-center NYW">
                        <img src="img/products/r.jpg" class="shcool">
                        <div class="name-prod"> ترمس ماء صغیر</div>
                        <div class="color-prod"> نصف لیتر</div>
                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 900-700</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 10 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="content-pro text-center KAIDISI">
                        <img src="img/products/d.jpg" class="shcool">
                        <div class="name-prod">ترمس ماء صغیر</div>
                        <div class="color-prod"> نصف لیتر</div>
                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 1700-1500</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 8 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="content-pro text-center NYX">
                        <img src="img/products/aa.jpg" class="shcool">
                        <div class="name-prod">حافظة طعام بلاستیكیة</div>
                        <div class="color-prod"> حجم وسط</div>
                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 1100-1000</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 5 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show market-->
<div class="show-market">
    <img src="<?php echo e(asset('/img/dre/11.png')); ?>">
    <img src="<?php echo e(asset('/img/dre/22.png')); ?>">
    <img src="<?php echo e(asset('/img/dre/33.png')); ?>">
    <img src="<?php echo e(asset('/img/dre/44.png')); ?>">
    <img src="<?php echo e(asset('/img/dre/55.png')); ?>">
</div>
<!-- show 3 products -->
<div class="back-of products">
    <div class="text-right mio">
        موبایلات واكسسوارات
    </div>
    <div class="show2-prod">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-pro text-center">
                        <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                        <div class="name-mobile">Xiaomi OPPO A52</div>

                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="content-pro text-center NYW">
                        <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                        <div class="name-mobile">Xiaomi Redmi Note7</div>

                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="content-pro text-center KAIDISI">
                        <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                        <div class="name-mobile">I Phone 7 plus</div>

                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="content-pro text-center NYX">
                        <img src="img/products/item_XXL_-1.jpg" class="phone">
                        <div class="name-mobile">Xiaomi Redmi 9  Prime</div>

                        <div class="stars">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                        <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                        <button type="button" class="btn btn-light">اختیار</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------- -->
<div class="show-der">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img text-center">
                <img src="<?php echo e(asset('/img/dre/66.jpg')); ?>">
            </div>
            <div class="col-lg-6 img text-center">
                <img src="<?php echo e(asset('/img/dre/77.jpg')); ?>">
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
                        <div class="subscriber text-center">
                            <div class="name-market">الریم سنتر-سوبر ماركت</div>
                            <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(2).jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">سنتر امیرة-سوبر ماركت</div>
                            <img src="img/icons%5C/street-market-business-company-logo_23-2148462526.jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">صیدلیة ریم</div>
                            <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(3).jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">سنتر المصري-سوبر ماركت</div>
                            <img src="img/icons/colorful-market-logo-with-gradient_23-2148472540.jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">شركة عدوان-معرض دیكور</div>
                            <img src="img/icons/images%20(1).jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">شركة مكیفات- A C S</div>
                            <img src="img/icons/images%20(2).jpg">
                            <div class="postion-market">حلب</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">شركة شاھین - مكیاجات</div>
                            <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(4).jpg">
                            <div class="postion-market">دمشق</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">الریم سنتر-سوبر ماركت</div>
                            <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(2).jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                        <div class="subscriber text-center">
                            <div class="name-market">الریم سنتر-سوبر ماركت</div>
                            <img src="img/icons/%D8%AA%D9%86%D8%B2%D9%8A%D9%84%20(2).jpg">
                            <div class="postion-market">السویداء</div>
                            <button type="button" class="btn btn-light">زیارة</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12">

                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="show2-prod">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-12">
                                        <div class="content-pro text-center">
                                            <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi OPPO A52</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="content-pro text-center NYW">
                                            <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi Redmi Note7</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="content-pro text-center KAIDISI NYX">
                                            <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                            <div class="name-mobile">I Phone 7 plus</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="show2-prod">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-12">
                                        <div class="content-pro text-center">
                                            <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi OPPO A52</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="content-pro text-center NYW">
                                            <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi Redmi Note7</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="content-pro text-center KAIDISI NYX">
                                            <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                            <div class="name-mobile">I Phone 7 plus</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div><div class="carousel-item">

                        <div class="show2-prod">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-12">
                                        <div class="content-pro text-center">
                                            <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi OPPO A52</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="content-pro text-center NYW">
                                            <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                            <div class="name-mobile">Xiaomi Redmi Note7</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="content-pro text-center KAIDISI NYX">
                                            <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                            <div class="name-mobile">I Phone 7 plus</div>

                                            <div class="stars">
                                                <span class="fa fa-star  checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                            <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                            <button type="button" class="btn btn-light">اختیار</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                <div class="col-sm-3 imges">
                    <img src="<?php echo e(asset('img/dre/88.jpg')); ?>">
                    <img src="<?php echo e(asset('img/dre/99.jpg')); ?>">
                </div>
                <div class="col-sm-9 imgs">
                    <img src="<?php echo e(asset('img/dre/HEADPHONES.jpg')); ?>" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new products -->
<div id="deno" class="carousel slide" data-ride="carousel" style="margin-top: 40px;">

    <div class="col-sm-12">

        <div class="carousel-inner2">
            <div class="carousel-item active">

                <div class="show2-prod" style="background-image: linear-gradient(180deg, #fff, #828282)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="content-pro text-center">
                                    <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi OPPO A52</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="content-pro text-center NYW">
                                    <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi Redmi Note7</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="content-pro text-center KAIDISI">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-pro text-center NYX">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">

                <div class="show2-prod" style="background-image: linear-gradient(180deg, #fff, #828282)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="content-pro text-center">
                                    <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi OPPO A52</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="content-pro text-center NYW">
                                    <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi Redmi Note7</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="content-pro text-center KAIDISI">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="content-pro text-center NYX">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">

                <div class="show2-prod" style="background-image: linear-gradient(180deg, #fff, #828282)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="content-pro text-center">
                                    <img src="img/products/item_XXL_131564764_f31e89053c188.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi OPPO A52</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="content-pro text-center NYW">
                                    <img src="img/products/item_XXL_130957469_7055fcc06e0cf.jpg" class="phone">
                                    <div class="name-mobile">Xiaomi Redmi Note7</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="content-pro text-center KAIDISI">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="content-pro text-center NYX">
                                    <img src="img/products/item_XXL_122884175_24662feb43a7f.jpg" class="phone">
                                    <div class="name-mobile">I Phone 7 plus</div>

                                    <div class="stars">
                                        <span class="fa fa-star  checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div> <span>ل.س</span>  <div class="price" style="display: inline-block"> 560.000-500.000</div> </div>
                                    <div class="avilble"><div  style="display: inline-block">متوفر في 9 متاجر</div><span class="fa fa-check-circle"></span></div>
                                    <button type="button" class="btn btn-light">اختیار</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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
                <img src="<?php echo e(asset('img/logo/logo-3.png')); ?>">
            </div>
            <div class="row" style="width: 1140px;">
                <div class="col-md-2 col-sm-4 col-xs-4 text-center">
                    <div class="dlely-card">
                        <div>E-DALELY Points</div>
                        <img src="<?php echo e(asset('img/icon/4.png')); ?>">
                    </div>

                </div>
                <div class="col-md-2 col-sm-4 text-center">
                    <div class="work-us">

                        <div><span>Get It On</span>Google Play</div>
                        <img src="<?php echo e(asset('img/icon/3.png')); ?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 text-center">
                    <div class="work-us" style="padding-top: 3px">
                        <div>App Store</div>
                        <img src="<?php echo e(asset('img/icon/2.png')); ?>">
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
<script src="<?php echo e(url('/js/projec1.js')); ?>"></script>
<script src="<?php echo e(url('/js/jquery-3.5.1.js')); ?>"></script>
<script src="<?php echo e(url('/js/popper.main.js')); ?>"></script>
<script src="<?php echo e(url('/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('/js/flickity.pkgd.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\edalely\resources\views/welcome.blade.php ENDPATH**/ ?>