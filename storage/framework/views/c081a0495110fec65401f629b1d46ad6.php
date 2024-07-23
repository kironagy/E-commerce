<!doctype html>

<html class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/bootstrap.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/style.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/font-awesome.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/fontawesome-stars.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/ion-fonts.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/slick.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/nice-select.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/timecircles.css')); ?>>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>One Store</title>
</head>
<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide {
        width: 60%;
    }

    .swiper-slide:nth-child(2n) {
        width: 40%;
    }

    .swiper-slide:nth-child(3n) {
        width: 20%;
    }


    .container_zipy {
        background-color: white;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        height: 90vh;
    }


    .status-bar {
        display: flex;
        align-items: center;
    }

    .status-icon {
        width: 20px;
        height: 20px;
        background-color: black;
        border-radius: 50%;
    }

    .time {
        margin-left: 10px;
    }

    .status-icons {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    .status-icons div {
        width: 20px;
        height: 20px;
        margin-left: 10px;
    }

    .settings-icon {
        background-color: gray;
    }

    .battery-icon {
        background-color: gray;
    }

    .back-button {
        font-size: 24px;
    }

    main {
        padding: 20px;
    }

    .product-image img {
        width: 100%;
        border-radius: 10px;
        margin-top: 40px;
    }

    .auction-details {
        background-color: #efefef;
        /* padding: 20px; */
        border-radius: 10px;
        width: 100%;
        /*   margin-top: 20px; */
    }

    .bid-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .bid-info div {
        display: flex;
        flex-direction: column;
    }

    .bid-button {
        width: 100%;
        background-color: black;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .details {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .details h2 {
        margin: 0 0 10px 0;
    }

    .details p {
        margin: 5px 0;
    }

    .details span {
        font-weight: bold;
    }
</style>

<body class="template-color-1">

    <!-- navbar -->
    <div class="main-wrapper">

        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end of navbar -->
        <div>
            <img class="w-100 vh-100 position-absolute top-0" style="z-index: -1000;"
                src="<?php echo e(asset('assets/images/slider/1-1.jpg')); ?>" alt="">
        </div>
        <!--auction cards -->
        <div class="container auction_container d-flex justify-content-center align-items-center w-100 vh-50 "
            style="transform: translateY(180px);">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                        use Carbon\Carbon;

                        $currentDateTime = Carbon::now();
                        $auctions = App\Models\Auction::where('TimeEnd', '>', $currentDateTime)->get();
                    ?>

                    <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide rounded-3">
                            <div class="card_aucation rounded-3 w-100">
                                <div class="content p-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="rounded-3 mt-3" style="width:300px; height:200px"
                                            src="/allImages/<?php echo e($auction->img); ?>" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter<?php echo e($auction->id); ?>"alt="">
                                    </div>
                                    <div class="d-flex justify-content-center mt-4 align-items-center text">
                                        <div class="d-flex flex-column me-3">
                                            <div class="fs-sm">Start bid</div>
                                            <div class="fw-simebold">
                                                <?php echo e($auction->endPrice ? $auction->endPrice : $auction->startPrice); ?><?php echo e($currency); ?>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="fs-sm">Auction ends in</div>
                                            <div class="fw-simebold countdown" data-end-time="<?php echo e($auction->TimeEnd); ?>">
                                            </div>
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


    <!-- Button trigger modal -->
    <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade modal-wrapper " data-bs-focus="false"id="exampleModalCenter<?php echo e($auction->id); ?>">
            <div class="modal-dialog modal-dialog-centered d-flex align-itmes-center justify-content-center m-auto"
                role="document" style="width:600px">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="container_zipy">
                                <main>
                                    <div class="product-image" style="display: flex; justify-content: center;">
                                        <img style="width: 300px;" src="/allImages/<?php echo e($auction->img); ?>"
                                            alt="Rolex Watch">
                                    </div>
                                    <div class="auction-details">
                                        <div class="bid-info">
                                            <div class="highest-bid">
                                                <span>highest bid</span>
                                                <span><?php echo e($auction->endPrice ? $auction->endPrice : $auction->startPrice); ?>

                                                    L.E</span>
                                            </div>
                                            <div class="auction-ends">
                                                <span>auction ends in</span>
                                                <div class="fw-simebold countdown"
                                                    data-end-time="<?php echo e($auction->TimeEnd); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="bid-button" onclick="Bid(<?php echo e($auction->id); ?>)">Bid Now</button>
                                        <div class="details">
                                            <h2>Details</h2>
                                            <p><span>Owned :</span> <?php echo e($auction->owned); ?></p>
                                            <p><span>Brand :</span> <?php echo e($auction->Barnd); ?></p>
                                            <p><span>sence :</span> <?php echo e($auction->sience); ?></p>
                                            <p><span>Country :</span> <?php echo e($auction->country); ?></p>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function Bid(id) {

            Swal.fire({
                title: "Add the bid",
                html: `<form id="bidForm" method="POST" action="<?php echo e(route('addBid')); ?>"><?php echo csrf_field(); ?><input type="text" name="bid_amount" class="swal2-input" required><input type="hidden" name="id" value='${id}' class="swal2-input" required><button class="swal2-confirm swal2-styled mt-3  " type="submit">Submit Bid</button></form>`,
                showConfirmButton: false,
                showClass: {
                    popup: 'animate__animated animate__fadeInUp animate__faster',
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutDown animate__faster',
                }
            });

        }
    </script>
    <?php if($errors->any()): ?>
        <script>
            var errorMessages = [];

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                errorMessages.push("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: errorMessages.join('<br>')
            });
        </script>
    <?php endif; ?>
    <?php if(session('success')): ?>
        <script>
            // Initialize SweetAlert with success message
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '<?php echo e(session('success')); ?>'
            });
        </script>
    <?php endif; ?>
    <!-- end of auction cards -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function updateCountdown() {
                const countdownElements = document.querySelectorAll('.countdown');
                countdownElements.forEach(function(element) {
                    const endTime = new Date(element.getAttribute('data-end-time')).getTime();
                    const now = new Date().getTime();
                    const distance = endTime - now;

                    if (distance < 0) {
                        element.innerHTML = 'Auction ended';
                    } else {
                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        element.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                    }
                });
            }

            setInterval(updateCountdown, 1000);
            updateCountdown();
        });
    </script>
</body>

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
<script src=<?php echo e(asset('assets/js/main.js')); ?>></script>

</html>
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
<?php /**PATH H:\KDEV\.git_2\resources\views/auction.blade.php ENDPATH**/ ?>