<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart || One</title>
    <meta name="robots" content="noindex, follow" />
    
    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/bootstrap.min.css')); ?>>
    <!-- Fontawesome -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/font-awesome.min.css')); ?>>
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/fontawesome-stars.min.css')); ?>>
    <!-- Ion Icon -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/ion-fonts.css')); ?>>
    <!-- Slick CSS -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/slick.css')); ?>>
    <!-- Animation -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/animate.min.css')); ?>>
    <!-- jQuery Ui -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>>
    <!-- Nice Select -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/nice-select.css')); ?>>
    <!-- Timecircles -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/timecircles.css')); ?>>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/style.css')); ?>>

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
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <?php if(!auth()->user()->carts->isEmpty()): ?>
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
                                <?php endif; ?>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="kenne-product-remove">
                                                <a href="<?php echo e(route('cart.destroy', ['id' => $cart->basket_id])); ?>">
                                                    <i class="fa fa-trash" title="Remove"></i>
                                                </a>
                                            </td>
                                            <td class="kenne-product-thumbnail">
                                                <a href="<?php echo e(route('single-product', ['product' => $cart->product])); ?>">
                                                    <img height="100"
                                                        src="<?php echo e(asset('allImages/' . $cart->product->cover[0])); ?>"
                                                        alt="Uren's Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="kenne-product-name">
                                                <a
                                                    href="<?php echo e(route('single-product', ['product' => $cart->product])); ?>"><?php echo e($cart->product->item_name); ?></a>
                                            </td>
                                            <td class="kenne-product-price">
                                                <span class="amount"><?php echo e($currency); ?>

                                                    <?php echo e($cart->product->item_price); ?></span>
                                            </td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <form class="formIncrease cart-plus-minus "
                                                    action="<?php echo e(route('UpdateCart')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box"
                                                            value="<?php echo e($cart->basket_quantity); ?>" name="quantity"
                                                            type="text">
                                                        <input name="cart_item_id" type="hidden"
                                                            value="<?php echo e($cart->basket_id); ?>">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                        </div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo e($currency); ?>

                                                    <?php echo e($cart->product->item_price * $cart->basket_quantity); ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="d-flex justify-content-center">
                                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                            <lottie-player
                                                src="https://lottie.host/179298d9-6a9d-4ef1-b990-54ff5c9ce37c/wYvvlRW4JC.json"
                                                background="##FFFFFF" speed="1" style="width: 450px; height: 450px"
                                                loop autoplay direction="1" mode="normal"></lottie-player>
                                        </div>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>
                        <?php if(!auth()->user()->carts->isEmpty()): ?>
                            
                        <?php endif; ?>

                        <?php if(!auth()->user()->carts->isEmpty()): ?>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <?php
                                                $total = 0;
                                                $all = auth()->user()->carts;
                                                foreach ($all as $cart) {
                                                    $total += $cart->product->item_price * $cart->basket_quantity;
                                                }
                                            ?>
                                            <li>Total <span><?php echo e($currency); ?> <?php echo e($total); ?></span></li>
                                        </ul>
                                        <a href="<?php echo e(route('checkout')); ?>">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Cart Area End Here -->

        <!-- Brand Area End Here -->

        <!-- Begin Kenne's Footer Area -->
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <script src=<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>></script>


    <script src=<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')); ?>></script>
    <!-- Modernizer JS -->
    <script src=<?php echo e(asset('assets/js/vendor/modernizr-3.11.2.min.js')); ?>></script>
    <!-- Bootstrap JS -->
    <script src=<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>></script>

    <!-- Slick Slider JS -->
    <script src=<?php echo e(asset('assets/js/plugins/slick.min.js')); ?>></script>
    <!-- Barrating JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery.barrating.min.js')); ?>></script>
    <!-- Counterup JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery.counterup.js')); ?>></script>
    <!-- Nice Select JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery.nice-select.js')); ?>></script>
    <!-- Sticky Sidebar JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery.sticky-sidebar.js')); ?>></script>
    <!-- Jquery-ui JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery-ui.min.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/plugins/jquery.ui.touch-punch.min.js')); ?>></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src=<?php echo e(asset('assets/js/plugins/theia-sticky-sidebar.min.js')); ?>></script>
    <!-- Waypoints JS -->
    <script src=<?php echo e(asset('assets/js/plugins/waypoints.min.js')); ?>></script>
    <!-- jQuery Zoom JS -->
    <script src=<?php echo e(asset('assets/js/plugins/jquery.zoom.min.js')); ?>></script>
    <!-- Timecircles JS -->
    <script src=<?php echo e(asset('assets/js/plugins/timecircles.js')); ?>></script>

    <!-- Main JS -->
    <script src=<?php echo e(asset('assets/js/main.js')); ?>></script>

</body>

</html>
<?php /**PATH /home2/crevelme/one-store.crevel-eg.com/resources/views/cart.blade.php ENDPATH**/ ?>