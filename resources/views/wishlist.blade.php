<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishlist || Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/fontawesome-stars.min.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="assets/css/timecircles.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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
                    <h2> </h2>

                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!--Begin Kenne's Wishlist Area -->
        <div class="kenne-wishlist_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="kenne-product_remove">remove</th>
                                            <th class="kenne-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="kenne-product-price">Unit Price</th>
                                            <th class="kenne-product-stock-status">Stock Status</th>
                                            <th class="kenne-cart_btn">add to cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse (auth()->user()->favorites as $favorite)
                                            <tr>
                                                <td class="kenne-product_remove"><a href="{{ route('wishlist.destroy', ['id' => $favorite->favorite_id]) }}">
                                                    <i class="fa fa-trash"
                                                    title="Remove"></i></a></td>
                                                <td class="kenne-product-thumbnail"><a href="javascript:void(0)"><img src="{{ asset('allImages/'.$favorite->product->cover[0]) }}" alt="Kenne's Wishlist Thumbnail"></a>
                                                </td>
                                                <td class="kenne-product-name"><a href="javascript:void(0)">{{ $favorite->product->item_name }}</a>
                                                </td>
                                                <td class="kenne-product-price"><span class="amount">{{ $currency }} {{ $favorite->product->item_price }}</span></td>
                                                <td class="kenne-product-stock-status"><span class="{{ ($favorite->product->quantity == 7 ? 'stock' : ($favorite->product->quantity < 7 ? 'out-stock' : 'in-stock'))   }}">
                                                    {{ ($favorite->product->quantity == 7 ? 'stock' : ($favorite->product->quantity < 7 ? 'out of stock' : 'in stock'))   }}
                                                </span></td>
                                                <td class="kenne-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="kenne-product_remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                    title="Remove"></i></a></td>
                                                <td class="kenne-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/3.jpg" alt="Kenne's Wishlist Thumbnail"></a>
                                                </td>
                                                <td class="kenne-product-name"><a href="javascript:void(0)">-------</a>
                                                </td>
                                                <td class="kenne-product-price"><span class="amount">{{ $currency }} 00</span></td>
                                                <td class="kenne-product-stock-status"><span class="out-stock">out stock</span></td>
                                                <td class="kenne-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Wishlist Area End Here -->
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
                                    <form action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter email address" />
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
                                <span>Copyright &copy; 2023 <a href="javascript:void(0)">Kenne.</a> All rights reserved.</span>
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
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <!-- Timecircles JS -->
    <script src="assets/js/plugins/timecircles.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
