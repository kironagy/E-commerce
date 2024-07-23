<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishlist || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

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
                                        <?php $__empty_1 = true; $__currentLoopData = auth()->user()->favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td class="kenne-product_remove"><a
                                                        href="<?php echo e(route('wishlist.destroy', ['id' => $favorite->favorite_id])); ?>">
                                                        <i class="fa fa-trash" title="Remove"></i></a></td>
                                                <td class="kenne-product-thumbnail"><a href="javascript:void(0)"><img
                                                            height="200"
                                                            src="<?php echo e(asset('allImages/' . $favorite->product->cover[0])); ?>"
                                                            alt="Kenne's Wishlist Thumbnail"></a>
                                                </td>
                                                <td class="kenne-product-name"><a
                                                        href="javascript:void(0)"><?php echo e($favorite->product->item_name); ?></a>
                                                </td>
                                                <td class="kenne-product-price"><span
                                                        class="amount"><?php echo e($currency); ?>

                                                        <?php echo e($favorite->product->item_price); ?></span></td>
                                                <td class="kenne-product-stock-status"><span
                                                        class="<?php echo e($favorite->product->quantity == 7 ? 'stock' : ($favorite->product->quantity < 7 ? 'out-stock' : 'in-stock')); ?>">
                                                        <?php echo e($favorite->product->quantity == 7 ? 'stock' : ($favorite->product->quantity < 7 ? 'out of stock' : 'in stock')); ?>

                                                    </span></td>
                                                <td class="kenne-cart_btn"><a
                                                        href="<?php echo e(route('cart.save', ['product' => $favorite->product->id])); ?>">add
                                                        to cart</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                             <center>
                                    <iframe width="200" height="200"
                                        src="https://lottie.host/embed/f862d380-1202-42f1-970e-de64f668ed37/QSbMUK1jEH.json"></iframe>
                                </center>
                                        <?php endif; ?>
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
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Kenne's Footer Area End Here -->
        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

    <!-- JS
============================================ -->

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
<?php /**PATH /home2/crevelme/one-store.crevel-eg.com/resources/views/wishlist.blade.php ENDPATH**/ ?>