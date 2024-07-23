<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

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
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Checkout Area -->
        <div class="checkout-area">
            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <form id="formSubmit" action="{{ route('checkoutCheck') }}" method="post">@csrf
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>City <span class="required">*</span></label>
                                            <input name="city" placeholder="City" type="text" id="city">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input name="address" placeholder="Street address" type="text"
                                                id="adderss">
                                        </div>
                                    </div>
                                    {{--
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input placeholder="" type="text" id="Ticket" name="Ticket">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Build Number <span class="required">*</span></label>
                                            <input placeholder='Build Number' type="text" id="buildNum" name="buildNum">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Phone Number <span class="required">*</span></label>
                                            <input placeholder='Phone Number' type="text" required id="phoneNumber" name="phoneNumber">
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list checkout-form-list-2">
                                            <label>Order Notes</label>
                                            <textarea name="notes" id="checkout-mess" cols="30" rows="10"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">

                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                    </div> --}}
                                    <div class="col-md-12">

                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a
                                                returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <input id="ship-box" type="checkbox">
                                    <label>pay online ?</label>
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <form id="onlineForm" action="{{ route('credit') }}" method="post">@csrf
                                    <div id="payBut" class="btn btn-dark col-12 bg-dark p-3">Pay for now</div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach (auth()->user()->carts as $cart)
                                            @php
                                                $total += $cart->product->item_price * $cart->basket_quantity;
                                            @endphp
                                            <tr class="cart_item">
                                                <td class="cart-product-name">{{ $cart->product->item_name }}<strong
                                                        class="product-quantity">
                                                        × {{ $cart->basket_quantity }}</strong></td>
                                                <td class="cart-product-total"><span
                                                        class="amount">{{ $currency }}{{ $cart->product->item_price * $cart->basket_quantity }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">{{ $currency }}{{ $total }}</span>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <form action="{{ route('coupon_code') }}" method="POST"
                                                    class="coupon-all">
                                                    @csrf
                                                    <div class="coupon d-flex align-items-center">
                                                        <input id="coupon_code" class="input-text"
                                                            style="width:200px;" name="coupon_code"
                                                            placeholder="Coupon code" type="text">

                                                        <input class="button" name="apply_coupon"
                                                            value="Apply coupon" type="submit">
                                                    </div>
                                                </form>

                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">{{ $currency }}
                                                        @if (isset($discound))
                                                            {{ $total - $total * ($discound->discount / 100) }}
                                                        @else
                                                            {{ $total }}
                                                        @endif
                                                    </span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="#payment-1">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class=""
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Direct Bank Transfer.
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have
                                                        cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">

                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have
                                                        cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have
                                                        cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="formSubmitButton" class="order-button-payment">
                                        <input value="Place order" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Checkout Area End Here -->

        <!-- Begin Brand Area -->

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if ($errors->any())
        <script>
            var errorMessages = [];

            @foreach ($errors->all() as $error)
                errorMessages.push("{{ $error }}");
            @endforeach

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: errorMessages.join('<br>')
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            // Initialize SweetAlert with success message
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}'
            });
        </script>
    @endif
    <script>
        formSubmitButton.onclick = function() {
            formSubmit.submit();
        }
        payBut.onclick = function() {
            document.getElementById('onlineForm').submit()
        }
    </script>
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
    <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>
