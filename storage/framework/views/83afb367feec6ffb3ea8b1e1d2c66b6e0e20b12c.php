<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>


        /* Button used to open the contact form - fixed at the bottom of the page */


        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 40%;
            right: 40%;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }



        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
    </style>

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('/css/bootstrap.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(url('/css/bootstrap.min.css')); ?>" >
    <link rel="stylesheet" href="<?php echo e(url('/fontawesome/css/all.css')); ?>">
    <link href="<?php echo e(url('/css/project.css')); ?>" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

       <?php if(auth()->guard()->check()): ?>
            <div class="container">
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-4 py-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="<?php echo e(route('categories.index')); ?>">category</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('products.index')); ?>">product</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('brands.index')); ?>">brand</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('countries.index')); ?>">country</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('custom_fields.index')); ?>">custom_field</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('languages.index')); ?>">language</a>
                            </li>






                            <li class="list-group-item">
                                <a href="<?php echo e(route('trashed.index')); ?>">trashed brands</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <main class="py-4">
                            <?php echo $__env->yieldContent('content'); ?>
                        </main>
                    </div>
                </div>
            </div>
       <?php else: ?>
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
       <?php endif; ?>

    </div>
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

<?php /**PATH C:\xampp\htdocs\edalely\resources\views/layouts/app.blade.php ENDPATH**/ ?>