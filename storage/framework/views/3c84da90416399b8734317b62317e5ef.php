<!doctype html>
<html class="no-js" lang="en" dir="<?php echo e(__('message.dir')); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
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
    <!-- link aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="template-color-1">

    <div class="main-wrapper">
        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <img class="rounded-3" src="<?php echo e(asset('assets/images/splash.gif')); ?>">

            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Main Header Area -->
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main Header Area End Here -->

        <!-- Begin Slider Area -->
        <div class="slider-area">

            <div class="kenne-element-carousel home-slider arrow-style"
                data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": false,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 7000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }'
                data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1
                }}
            ]'>
                <div class="slide-item bg-1 animation-style-01">
                    <div class="slider-progress"></div>
                    <div class="container" style="">
                        <div class="slide-content ">
                            <span>Exclusive Offer -20% Off This Week</span>
                            <h2>Accessories <br> Explore Trending</h2>
                            <p class="short-desc">Aliquam error eos cumque aut repellat quasi accusantium inventore
                                necessitatibus. Vel quisquam distinctio in inventore dolorum.</p>
                            <div class="slide-btn">
                                <a class="kenne-btn" href="shop-left-sidebar.html"><?php echo e(__('message.Shop_Now')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item bg-2 animation-style-01">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="slide-content">
                            <span>Exclusive Offer -10% Off This Week</span>
                            <h2>Stylist <br> Female Clothes</h2>
                            <p class="short-desc-2">Made from Soft, Durable, US-grown Supima cotton.</p>
                            <div class="slide-btn">
                                <a class="kenne-btn" href="shop-left-sidebar.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Service Area -->
        <div class="service-area">
            <div class="container">
                <div class="service-nav">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service-item">
                                <div class="content">
                                    <h4><?php echo e(__('message.Money_Return')); ?></h4>
                                    <p><?php echo e(__('message.30_days')); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service-item">
                                <div class="content">
                                    <h4><?php echo e(__('message.Online_Support')); ?></h4>
                                    <p><?php echo e(__('message.Support 24 hours a day')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img " data-aos="zoom-in-up">
                                <a href="javascrip:void(0)">
                                    <img class="rounded-3" src="/assets/images/slider/378x252AR.png" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img " data-aos="zoom-in-up">
                                <a href="javascrip:void(0)">
                                    <img class="rounded-3" src=<?php echo e(asset('assets/images/slider/378x252AR2.png')); ?> alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img " data-aos="zoom-in-up">
                                <a href="javascrip:void(0)">
                                    <img class="rounded-3" src=<?php echo e(asset('assets/images/slider/unnamednew2.png')); ?> alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 style="position: relative;top:-40px;"><?php echo e(__('message.All_Product')); ?></h3>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content kenne-tab_content">
                            <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": true,
                                        "dots": false,
                                        "spaceBetween": 30
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

                                <?php $__currentLoopData = App\Models\Product::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                            data-bs-target="#modal_product<?php echo e($item->id); ?>">
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area Two -->
        <div class="banner-area banner-area-2">
            <div class="container">
                <div class="row" style="overflow-x: hidden !important;">
                    <div class="col-md-6">
                        <div class="banner-item img-hover_effect" data-aos="fade-right">
                            <div class="banner-img">
                                <a href="javascrip:void(0)">
                                    <img class="img-full rounded-3" src=<?php echo e(asset('assets/images/belle_3.webp')); ?> alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="javascrip:void(0)">
                                    <img class="img-full rounded-3" src=<?php echo e(asset('assets/images/download_4.webp')); ?>

                                        alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Two End Here -->

        <!-- Begin Product Tab Area -->
        <div class="product-tab_area">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-start">
                            <h3 style="position: relative;top:-40px;"><?php echo e(__('message.All_Product')); ?></h3>
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    
                                    <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a data-bs-toggle="tab"
                                                class="<?php echo e(\App\Models\Category::first()->id == $category->id ? 'active' : null); ?>"
                                                href="#<?php echo e($category->categories_name); ?>_category_<?php echo e($category->id); ?>"><span><?php echo e($category->categories_name); ?></span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content kenne-tab_content">
                            <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div id="<?php echo e($category->categories_name); ?>_category_<?php echo e($category->id); ?>"
                                    class="tab-pane <?php echo e(\App\Models\Category::first()->id == $category->id ? 'active' : null); ?> show"
                                    role="tabpanel">
                                    <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                        data-slick-options='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "infinite": false,
                                        "arrows": true,
                                        "dots": false,
                                        "spaceBetween": 30
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
                                        <?php $__currentLoopData = $category->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a
                                                            href="<?php echo e(route('single-product', ['product' => $item->id])); ?>">
                                                            <img class="primary-img"
                                                                src="<?php echo e(asset('allImages/' . json_decode($item->cover)[0])); ?>"
                                                                alt="Kenne's Product Image">

                                                            <img class="secondary-img"
                                                                src="<?php echo e(asset('allImages/' . json_decode($item->cover)[1])); ?>"
                                                                alt="Kenne's Product Image">
                                                        </a>
                                                        
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                                    data-bs-target="#<?php echo e($category->categories_name); ?>_modal_product_<?php echo e($item->id); ?>">
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Quick View"><i
                                                                            class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="<?php echo e(route('wishlist.save', ['product' => $item->id])); ?>"
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add To Wishlist"><i
                                                                            class="ion-ios-heart-outline"></i></a>
                                                                </li>

                                                                </li>
                                                                <li><a href="<?php echo e(route('cart.save', ['product' => $item->id])); ?>"
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Add To cart"><i
                                                                            class="ion-bag"></i></a>
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
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tab Area End Here -->
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Begin Kenne's Modal Area -->
        <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $category->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade modal-wrapper"
                    id="<?php echo e($category->categories_name); ?>_modal_product_<?php echo e($item->id); ?>">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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

                                                <?php $__currentLoopData = json_decode($item->item_img); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="single-slide">
                                                        <img src="<?php echo e(asset('allImages/' . $img)); ?>"
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

                                                <?php $__currentLoopData = json_decode($item->item_img); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="single-slide">
                                                        <img src="<?php echo e(asset('allImages/' . $img)); ?>"
                                                            alt="Kenne's Product Image">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="sp-content">
                                            <div class="col-12  p-3 p-md-2 d-flex flex-column ">
                                                <!-- product_name -->
                                                <div class="hedding fs-3 text-center fw-semibold mb-4">
                                                    <?php echo e($item->item_name); ?></div>
                                                <!-- end product_name -->
                                                <!-- description -->
                                                <div class="hedding fs-4   mb-2">DESCRIPTION</div>
                                                <div class="text-secondary fs-6"><?php echo e($item->item_desc); ?></div>
                                                <!-- end of description -->
                                                <!-- product-details -->
                                                <div class="mt-3">
                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed hedding"
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
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed hedding"
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
                                                                    <div class="fw-semibold text-secondary mb-3">Better
                                                                        traceability is central to
                                                                        improving our materials as well as social and
                                                                        environmental practices.</div>
                                                                    <div class="d-flex flex-column">
                                                                        <div class="d-flex align-items-center mb-2 ">
                                                                            <div>
                                                                                <img draggable="false"
                                                                                    src="<?php echo e(asset('assets/images/waving.png')); ?>">
                                                                            </div>
                                                                            <div class=" ms-3">
                                                                                Weaving : <span
                                                                                    class="hedding">egypt</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-2 ">
                                                                            <div>
                                                                                <img draggable="false"
                                                                                    src="<?php echo e(asset('assets/images/dying.png')); ?>">
                                                                            </div>
                                                                            <div class=" ms-3">
                                                                                Deying : <span
                                                                                    class="hedding">egypt</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-2 ">
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
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed hedding"
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
                                                <div class="fw-bold fs-4 me-2">
                                                    <?php echo e($item->item_price - $item->item_discount); ?><span
                                                        class="fs-6"><?php echo e($currency); ?></span> </div>
                                            </div>

                                            

                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="quantity" value="1"
                                                        type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>

                                            <div class="kenne-group_btn">
                                                <ul>
                                                    <li><a href="<?php echo e(route('cart.save', ['product' => $item->id])); ?>"
                                                            class="add-to_cart">Cart To Cart</a></li>
                                                    <li><a href="cart.html" class="add-to_cart">buy it now</a></li>
                                                    <li><a
                                                            href="<?php echo e(route('wishlist.save', ['product' => $item->id])); ?>"><i
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
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = \App\Models\Product::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade modal-wrapper" id="modal_product<?php echo e($item->id); ?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                                                <div class="single-slide">
                                                    <img src="<?php echo e(asset('allImages/' . $img)); ?>"
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
                                                <div class="single-slide">
                                                    <img src="<?php echo e(asset('allImages/' . $img)); ?>"
                                                        alt="Kenne's Product Image">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <div class="sp-content">
                                        <div class="col-12  p-3 p-md-2 d-flex flex-column ">
                                            <!-- product_name -->
                                            <div class="hedding fs-3 text-center fw-semibold mb-4">
                                                <?php echo e($item->item_name); ?></div>
                                            <!-- end product_name -->
                                            <!-- description -->
                                            <div class="hedding fs-4   mb-2">DESCRIPTION</div>
                                            <div class="text-secondary fs-6"><?php echo e($item->item_desc); ?></div>
                                            <!-- end of description -->
                                            <!-- product-details -->
                                            <div class="mt-3">
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed hedding"
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
                                                        <h2 class="accordion-header" id="flush-headingTwo">
                                                            <button class="accordion-button collapsed hedding"
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
                                                                <div class="fw-semibold text-secondary mb-3">Better
                                                                    traceability is central to
                                                                    improving our materials as well as social and
                                                                    environmental practices.</div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex align-items-center mb-2 ">
                                                                        <div>
                                                                            <img draggable="false"
                                                                                src="<?php echo e(asset('assets/images/waving.png')); ?>">
                                                                        </div>
                                                                        <div class=" ms-3">
                                                                            Weaving : <span
                                                                                class="hedding">egypt</span>
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
                                                                            Manufacturing : <span
                                                                                class="hedding">egypt</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingThree">
                                                            <button class="accordion-button collapsed hedding"
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
                                            <div class="fw-bold fs-4 me-2">
                                                <?php echo e($item->item_price - $item->item_discount); ?><span
                                                    class="fs-6"><?php echo e($currency); ?></span> </div>
                                        </div>

                                        

                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" name="quantity" value="1"
                                                    type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>

                                        <div class="kenne-group_btn">
                                            <ul>
                                                <li><a href="<?php echo e(route('cart.save', ['product' => $item->id])); ?>"
                                                        class="add-to_cart">Cart To Cart</a></li>
                                                <li><a href="cart.html" class="add-to_cart">buy it now</a></li>
                                                <li><a href="<?php echo e(route('wishlist.save', ['product' => $item->id])); ?>"><i
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<?php /**PATH H:\KDEV\NewOne2\NewOne2\resources\views/index.blade.php ENDPATH**/ ?>