<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart || Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
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
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Uren's Cart Area -->
        <div class="kenne-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    @if (!auth()->user()->carts->isEmpty())
                                        <thead>
                                            <tr>
                                                <th class="kenne-product-remove">remove</th>
                                                <th class="kenne-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="kenne-product-price">Unit Price</th>
                                                <th class="kenne-product-quantity">Quantity</th>
                                                <th class="kenne-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                    @endif
                                    <tbody>
                                        @forelse (auth()->user()->carts as $cart)
                                        <tr>
                                            <td class="kenne-product-remove">
                                                <a href="{{ route('cart.destroy', ['id' => $cart->basket_id]) }}">
                                                    <i class="fa fa-trash" title="Remove"></i>
                                                </a>
                                            </td>
                                            <td class="kenne-product-thumbnail">
                                                <a href="{{ route('single-product', ['product' => $cart->product]) }}">
                                                    <img height="100" src="{{ asset('allImages/' . $cart->product->cover[0]) }}" alt="Uren's Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="kenne-product-name">
                                                <a href="{{ route('single-product', ['product' => $cart->product]) }}">{{ $cart->product->item_name }}</a>
                                            </td>
                                            <td class="kenne-product-price">
                                                <span class="amount">{{ $currency }} {{ $cart->product->item_price }}</span>
                                            </td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <form class="formIncrease cart-plus-minus " action="{{ route('UpdateCart') }}" method="POST">
                                                    @csrf   
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="{{ $cart->basket_quantity }}" name="quantity" type="text">
                                                        <input name="cart_item_id" type="hidden" value="{{ $cart->basket_id }}">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">{{ $currency }} {{ $cart->product->item_price * $cart->basket_quantity }}</span>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="d-flex justify-content-center">
                                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                            <lottie-player src="https://lottie.host/179298d9-6a9d-4ef1-b990-54ff5c9ce37c/wYvvlRW4JC.json" background="##FFFFFF" speed="1" style="width: 450px; height: 450px" loop autoplay direction="1" mode="normal"></lottie-player>
                                        </div>
                                    @endforelse
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                            @if (!auth()->user()->carts->isEmpty())
                                {{-- <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">

                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart"
                                                    type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            @endif

                            @if (!auth()->user()->carts->isEmpty())
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                @php
                                                    $total = 0;
                                                    $all = auth()->user()->carts;
                                                    foreach ($all as $cart) {
                                                        $total += $cart->product->item_price * $cart->basket_quantity;
                                                    }
                                                @endphp
                                                <li>Total <span>{{ $currency }} {{ $total }}</span></li>
                                            </ul>
                                            <a href="{{ route('checkout') }}">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Cart Area End Here -->

        <!-- Brand Area End Here -->

        <!-- Begin Kenne's Footer Area -->
        @include('includes.footer')

        <!-- Kenne's Footer Area End Here -->
        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

    <!-- JS
============================================ -->
    <script>
        function quantityBack() {
            console.log('hello nega')
        }
    </script>
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
