<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Single Product || Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="/assets/css/fontawesome-stars.min.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="/assets/css/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="/assets/css/timecircles.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

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
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Single Product Area -->
        <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider kenne-element-carousel"
                                    data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                                    <?php $__currentLoopData = $product->item_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="single-slide zoom">
                                            <img src="<?php echo e(asset('allImages/' . $img)); ?>" alt="Kenne's Product Image">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3"
                                    data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }'
                                    data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    <?php $__currentLoopData = $product->item_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="single-slide">
                                            <img src="<?php echo e(asset('allImages/' . $img)); ?>" alt="Kenne's Product Thumnail">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sp-content">

                                <div class="col-12  p-3 p-md-2 d-flex flex-column ">
                                    <!-- product_name -->
                                    <div class="hedding fs-3 text-center fw-semibold mb-4"><?php echo e($product->item_name); ?>

                                    </div>
                                    <!-- end product_name -->
                                    <!-- description -->
                                    <div class="hedding fs-4   mb-2">DESCRIPTION</div>
                                    <div class="text-secondary fs-6"><?php echo e($product->item_desc); ?></div>
                                    <!-- end of description -->
                                    <!-- product-details -->
                                    <div class="mt-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed hedding" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        PRODUCT DETAILS </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body d-flex flex-column">
                                                        <?php echo $product->details; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed hedding" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        TRACEABILITY
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingTwo"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body d-flex flex-column">
                                                        <div class="fw-semibold text-secondary mb-3">Better traceability
                                                            is central to
                                                            improving our materials as well as social and environmental
                                                            practices.</div>
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center mb-2 ">
                                                                <div>
                                                                    <img draggable="false"
                                                                        src="<?php echo e(asset('assets/images/waving.png')); ?>">
                                                                </div>
                                                                <div class=" ms-3">
                                                                    Weaving : <span class="hedding">egypt</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2 ">
                                                                <div>
                                                                    <img draggable="false"
                                                                        src="<?php echo e(asset('assets/images/dying.png')); ?>">
                                                                </div>
                                                                <div class=" ms-3">
                                                                    Deying : <span class="hedding">egypt</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2 ">
                                                                <div>
                                                                    <img draggable="false"
                                                                        src="<?php echo e(asset('assets/images/manufact.png')); ?>">
                                                                </div>
                                                                <div class=" ms-3">
                                                                    Manufacturing : <span class="hedding">egypt</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed hedding" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                        aria-controls="flush-collapseThree">
                                                        SHIPPING
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingThree"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="col-12  mb-3">
                                                            <li class="more_details">
                                                                Express Shipping Delivery in
                                                                <?php echo e($product->from_shipping_days); ?>-<?php echo e($product->to_shipping_days); ?>

                                                                working days
                                                            </li>
                                                            <li class="more_details">
                                                                <?php echo e($product->shippingPrice); ?><?php echo e($currency); ?>

                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-4 me-2">
                                        <?php echo e($product->item_price - $product->item_discount); ?><span
                                            class="fs-6"><?php echo e($currency); ?></span> </div>
                                </div>

                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-cart_btn me-2" href="cart.html">Add To Cart</a></li>
                                        <li><a class="qty-cart_btn" href="cart.html">buy it now</a></li>
                                        <li><a class="qty-wishlist_btn"
                                                href="<?php echo e(route('wishlist.save', ['product' => $product->id])); ?>"
                                                data-bs-toggle="tooltip" title="Add To Wishlist"><i
                                                    class="ion-android-favorite-outline"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tab Area Two End Here -->

        <!-- Begin Product Area -->
        <div class="product-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>more products</h3>
                            <div class="product-arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="kenne-element-carousel product-slider slider-nav"
                            data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }'
                            data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                            <?php
                                $items = App\Models\Product::All();
                            ?>

                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-item">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="<?php echo e(route('single-product', ['product' => $item->id])); ?>">
                                                <img class="primary-img"
                                                    src="<?php echo e(asset('allImages/' . $item->cover[0])); ?>"
                                                    alt="Kenne's Product Image">

                                                <img class="secondary-img"
                                                    src="<?php echo e(asset('allImages/' . $item->cover[1])); ?>"
                                                    alt="Kenne's Product Image">
                                            </a>
                                            
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter<?php echo e($item->id); ?>">
                                                        <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                            data-placement="right" title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="<?php echo e(route('wishlist.save', ['product' => $item->id])); ?>"
                                                            data-bs-toggle="tooltip" data-placement="right"
                                                            title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                    </li>

                                                    </li>
                                                    <li><a href="<?php echo e(route('cart.save', ['product' => $item->id])); ?>"
                                                            data-bs-toggle="tooltip" data-placement="right"
                                                            title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a
                                                        href="<?php echo e(route('single-product', ['product' => $item->id])); ?>"><?php echo e($item->item_name); ?></a>
                                                </h3>
                                                <div class="price-box">
                                                    <span
                                                        class="new-price"><?php echo e($currency . ($item->item_price - $item->item_discount)); ?></span>
                                                    <?php if($item->item_discount): ?>
                                                        <span
                                                            class="old-price"><?php echo e($currency . $item->item_discount); ?></span>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <!-- Brand Area End Here -->

                        <!-- Begin Kenne's Footer Area -->
                        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <!-- Kenne's Footer Area End Here -->
                        <!-- Begin Kenne's Modal Area -->
                        <?php
                            if (!isset($items)) {
                                if (isset($id)) {
                                    $items = App\Models\Product::where('item_subcat', $id)->get();
                                } else {
                                    $items = App\Models\Product::all();
                                }
                            }

                        ?>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="modal fade modal-wrapper" id="exampleModalCenter<?php echo e($item->id); ?>">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal-inner-area sp-area row">
                                                <div class="col-lg-5">
                                                    <div class="sp-img_area">
                                                        <div class="kenne-element-carousel sp-img_slider slick-img-slider"
                                                            data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                    }'>
                                                            <?php $__currentLoopData = $item->item_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="single-slide red">
                                                                    <img src="/allImages/<?php echo e($img); ?>"
                                                                        alt="Kenne's Product Image">
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </div>
                                                        <div class="kenne-element-carousel sp-img_slider-nav arrow-style-2 arrow-style-3"
                                                            data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider",
                                   "focusOnSelect": true,
                                   "arrows" : true,
                                   "spaceBetween": 30
                                  }'
                                                            data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                                                            <?php $__currentLoopData = $item->item_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="single-slide red">
                                                                    <img src="/allImages/<?php echo e($img); ?>"
                                                                        alt="Kenne's Product Thumnail">
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-6">
                                                    <div class="sp-content">
                                                        <div class="sp-heading">
                                                            <h5><a href="#"><?php echo e($item->item_name); ?></a></h5>
                                                        </div>

                                                        <div class="price-box">
                                                            <span
                                                                class="new-price new-price-2"><?php echo e($item->item_price); ?><?php echo e($currency); ?></span>
                                                        </div>
                                                        <div class="mt-3">
                                                            <div class="accordion accordion-flush"
                                                                id="accordionFlushExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header"
                                                                        id="flush-headingOne">
                                                                        <button
                                                                            class="accordion-button collapsed hedding"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#flush-collapseOne"
                                                                            aria-expanded="false"
                                                                            aria-controls="flush-collapseOne">
                                                                            PRODUCT DETAILS </button>
                                                                    </h2>
                                                                    <div id="flush-collapseOne"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-headingOne"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body d-flex flex-column">
                                                                            <?php echo $item->details; ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header"
                                                                        id="flush-headingTwo">
                                                                        <button
                                                                            class="accordion-button collapsed hedding"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#flush-collapseTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="flush-collapseTwo">
                                                                            TRACEABILITY
                                                                        </button>
                                                                    </h2>
                                                                    <div id="flush-collapseTwo"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-headingTwo"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body d-flex flex-column">
                                                                            <div
                                                                                class="fw-semibold text-secondary mb-3">
                                                                                Better
                                                                                traceability is central to
                                                                                improving our materials as well as
                                                                                social and
                                                                                environmental practices.</div>
                                                                            <div class="d-flex flex-column">
                                                                                <div
                                                                                    class="d-flex align-items-center mb-2 ">
                                                                                    <div>
                                                                                        <img draggable="false"
                                                                                            src="<?php echo e(asset('assets/images/waving.png')); ?>">
                                                                                    </div>
                                                                                    <div class=" ms-3">
                                                                                        Weaving : <span
                                                                                            class="hedding">egypt</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex align-items-center mb-2 ">
                                                                                    <div>
                                                                                        <img draggable="false"
                                                                                            src="<?php echo e(asset('assets/images/dying.png')); ?>">
                                                                                    </div>
                                                                                    <div class=" ms-3">
                                                                                        Deying : <span
                                                                                            class="hedding">egypt</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex align-items-center mb-2 ">
                                                                                    <div>
                                                                                        <img draggable="false"
                                                                                            src="<?php echo e(asset('assets/images/manufact.png')); ?>">
                                                                                    </div>
                                                                                    <div class=" ms-3">
                                                                                        Manufacturing : <span
                                                                                            class="hedding">egypt</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header"
                                                                        id="flush-headingThree">
                                                                        <button
                                                                            class="accordion-button collapsed hedding"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#flush-collapseThree"
                                                                            aria-expanded="false"
                                                                            aria-controls="flush-collapseThree">
                                                                            SHIPPING
                                                                        </button>
                                                                    </h2>
                                                                    <div id="flush-collapseThree"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-headingThree"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body">
                                                                            <div class="col-12  mb-3">
                                                                                <li class="more_details">
                                                                                    Express Shipping Delivery in
                                                                                    <?php echo e($item->from_shipping_days); ?>-<?php echo e($item->to_shipping_days); ?>

                                                                                    working days
                                                                                </li>
                                                                                <li class="more_details">
                                                                                    <?php echo e($item->shippingPrice); ?><?php echo e($currency); ?>

                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="quantity">
                                                            <label>Quantity</label>
                                                            <div class="cart-plus-minus">
                                                                <input class="cart-plus-minus-box" value="1"
                                                                    type="text">
                                                                <div class="dec qtybutton"><i
                                                                        class="fa fa-angle-down"></i></div>
                                                                <div class="inc qtybutton"><i
                                                                        class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="kenne-group_btn">
                                                            <ul>
                                                                <li><a href="cart.html" class="add-to_cart">Cart To
                                                                        Cart</a></li>
                                                                <li><a href="cart.html"><i
                                                                            class="ion-android-favorite-outline"></i></a>
                                                                </li>
                                                                <li><a href="cart.html"><i
                                                                            class="ion-ios-shuffle-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="kenne-tag-line">
                                                            <h6>Tags:</h6>
                                                            <a href="javascript:void(0)">Scraf</a>,
                                                            <a href="javascript:void(0)">hoodie</a>,
                                                            <a href="javascript:void(0)">jacket</a>
                                                        </div>
                                                        <div class="kenne-social_link">
                                                            <ul>
                                                                <li class="facebook">
                                                                    <a href="https://www.facebook.com"
                                                                        data-bs-toggle="tooltip" target="_blank"
                                                                        title="Facebook">
                                                                        <i class="fab fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="twitter">
                                                                    <a href="https://twitter.com"
                                                                        data-bs-toggle="tooltip" target="_blank"
                                                                        title="Twitter">
                                                                        <i class="fab fa-twitter-square"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="youtube">
                                                                    <a href="https://www.youtube.com"
                                                                        data-bs-toggle="tooltip" target="_blank"
                                                                        title="Youtube">
                                                                        <i class="fab fa-youtube"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="google-plus">
                                                                    <a href="https://www.plus.google.com/discover"
                                                                        data-bs-toggle="tooltip" target="_blank"
                                                                        title="Google Plus">
                                                                        <i class="fab fa-google-plus"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="instagram">
                                                                    <a href="https://rss.com" data-bs-toggle="tooltip"
                                                                        target="_blank" title="Instagram">
                                                                        <i class="fab fa-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Kenne's Modal Area End Here -->
                        <!-- Scroll To Top Start -->
                        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
                        <!-- Scroll To Top End -->

                    </div>

                    <!-- JS
============================================ -->

                    <!-- jQuery JS -->
                    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
                    <script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
                    <!-- Modernizer JS -->
                    <script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
                    <!-- Bootstrap JS -->
                    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

                    <!-- Slick Slider JS -->
                    <script src="/assets/js/plugins/slick.min.js"></script>
                    <!-- Barrating JS -->
                    <script src="/assets/js/plugins/jquery.barrating.min.js"></script>
                    <!-- Counterup JS -->
                    <script src="/assets/js/plugins/jquery.counterup.js"></script>
                    <!-- Nice Select JS -->
                    <script src="/assets/js/plugins/jquery.nice-select.js"></script>
                    <!-- Sticky Sidebar JS -->
                    <script src="/assets/js/plugins/jquery.sticky-sidebar.js"></script>
                    <!-- Jquery-ui JS -->
                    <script src="/assets/js/plugins/jquery-ui.min.js"></script>
                    <script src="/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
                    <!-- Theia Sticky Sidebar JS -->
                    <script src="/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
                    <!-- Waypoints JS -->
                    <script src="/assets/js/plugins/waypoints.min.js"></script>
                    <!-- jQuery Zoom JS -->
                    <script src="/assets/js/plugins/jquery.zoom.min.js"></script>
                    <!-- Timecircles JS -->
                    <script src="/assets/js/plugins/timecircles.js"></script>

                    <!-- Main JS -->
                    <script src="/assets/js/main.js"></script>

</body>

</html>
<?php /**PATH D:\projects\New folder\newOne\resources\views/single-product.blade.php ENDPATH**/ ?>