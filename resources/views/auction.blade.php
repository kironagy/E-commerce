<!doctype html>

<html class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-stars.min.css">
    <link rel="stylesheet" href="assets/css/ion-fonts.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/timecircles.css">
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
  </style>

<body class="template-color-1">

    <!-- navbar -->
    <div class="main-wrapper">

        @include('includes.header')
        <!--end of navbar -->
        <div>
            <img class="w-100 vh-100 position-absolute top-0" style="z-index: -1000;"
                src="./assets/images/slider/1-1.jpg" alt="">
        </div>
        <!--auction cards -->
        <div class="container auction_container d-flex justify-content-center align-items-center w-100 vh-50 "
            style="transform: translateY(180px);">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @php
                    use Carbon\Carbon;
                
                    $currentDateTime = Carbon::now();
                    $auctions = App\Models\Auction::where('TimeEnd', '>', $currentDateTime)->get();
                @endphp
                
                @foreach ($auctions as $auction)
                    <div class="swiper-slide rounded-3">
                        <div class="card_aucation rounded-3 w-100">
                            <div class="content p-2">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="rounded-3 mt-3" src="/allImages/{{ $auction->img }}" alt="">
                                </div>
                                <div class="d-flex justify-content-center mt-4 align-items-center text">
                                    <div class="d-flex flex-column me-3">
                                        <div class="fs-sm">Start bid</div>
                                        <div class="fw-simebold">{{ $auction->startPrice }}{{ $currency }}</div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fs-sm">Auction ends in</div>
                                        <div class="fw-simebold countdown" data-end-time="{{ $auction->TimeEnd }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>
    </div>

    <!-- end of auction cards -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    function updateCountdown() {
        const countdownElements = document.querySelectorAll('.countdown');
        countdownElements.forEach(function (element) {
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
<script src="assets/js/main.js"></script>

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
