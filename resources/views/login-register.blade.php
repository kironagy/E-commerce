<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Or Register || Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars.min.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/ion-fonts.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{ asset('assets/css/timecircles.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <!--         <div class="loading">
            <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
            </div>
        </div> -->
        <!-- Loading Area End Here -->

        <!-- Begin Main Header Area Two -->
        @include('includes.header')
        <!-- Main Header Area End Here Two -->

        <!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">

                    <ul>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Login Register Area -->
        <div class="kenne-login-register_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                        <!-- Login Form s-->
                        <form action="{{ route('signin.submit') }}" method="POST">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">Login</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                        @error('email')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                        @error('password')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" name="remember_me" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                    </div>
                                    @error('account')
                                        <div>{{ $message }}</div>
                                    @enderror
                                    <div class="col-md-12">
                                        <button class="kenne-login_btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="{{ route('signup.submit') }}" method="POST">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">Register</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" placeholder="First Name">
                                        @error('first_name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" placeholder="Last Name">
                                        @error('last_name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                        @error('email')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                        @error('password')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password"
                                            placeholder="Confirm Password">
                                        @error('confirm_password')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="kenne-register_btn">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Login Register Area  End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area ">
            <div class="container">
                <div class="brand-nav border-top ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel brand-slider slider-nav"
                                data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }'
                                data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/1.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/2.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/3.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/4.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/5.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/6.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/1.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/2.png" alt="Brand Images">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

        <!-- Begin Kenne's Footer Area -->
        <div class="kenne-footer_area bg-smoke_color">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-area">
                                <div class="newsletter-logo">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/footer/logo/1.png" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc">Subscribe to our newsleter, Enter your emil address</p>
                                <div class="newsletter-form_wrap">
                                    <form
                                        action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        method="post" id="mc-embedded-subscribe-form"
                                        name="mc-embedded-subscribe-form" class="newsletters-form validate"
                                        target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email"
                                                    autocomplete="off" placeholder="Enter email address" />
                                                <button class="newsletter-btn" id="mc-submit"><i
                                                        class="ion-android-mail"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Shopping</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Product</a></li>
                                            <li><a href="javascript:void(0)">My Cart</a></li>
                                            <li><a href="javascript:void(0)">Wishlist</a></li>
                                            <li><a href="javascript:void(0)">Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Account</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Login</a></li>
                                            <li><a href="javascript:void(0)">Register</a></li>
                                            <li><a href="javascript:void(0)">Help</a></li>
                                            <li><a href="javascript:void(0)">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Men</a></li>
                                            <li><a href="javascript:void(0)">Women</a></li>
                                            <li><a href="javascript:void(0)">Jeans</a></li>
                                            <li><a href="javascript:void(0)">Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2023 <a href="javascript:void(0)">Kenne.</a> All rights
                                    reserved.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment">
                                <img src="assets/images/footer/payment/1.png" alt="Kenne's Payment Method">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Footer Area End Here -->
        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <!-- Barrating JS -->
    <script src="{{ asset('assets/js/plugins/jquery.barrating.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/plugins/jquery.counterup.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- Jquery-ui JS -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <!-- jQuery Zoom JS -->
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <!-- Timecircles JS -->
    <script src="{{ asset('assets/js/plugins/timecircles.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
