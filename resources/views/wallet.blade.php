<!doctype html>
<html class="no-js" lang="en">

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
    <!-- link aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<style>
    .card_wideaget {
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        height: 160px;
    }

    .card_wallet {
        background: #15294A;
        position: relative;
    }


    .balance-card {
        background-color: #172B4D;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        color: white;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .balance-card::before,
    .balance-card::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }

    .balance-card::before {
        background-color: #3B5998;
        top: -50px;
        left: -50px;
    }

    .balance-card::after {
        background-color: #FFCC4D;
        bottom: -50px;
        right: -50px;
    }

    .total-balance {
        margin: 0;
        font-size: 1.2em;
    }

    .balance {
        font-size: 2em;
        margin: 10px 0;
    }

    .withdraw-button {
        background-color: transparent;
        border: 1px solid #E2E2E2;
        border-radius: 5px;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 1em;
    }

    .withdraw-button:hover {
        background-color: #E2E2E2;
        color: #172B4D;
    }
</style>

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

        <!-- Begin Main Header Area -->
        @include('includes.header')
        <!-- Main Header Area End Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5 d-flex justify-content-center   ">
                <div class="col-12 col-md-7 row">
                    <div class="col-12 col-md-4 col-sm-6 mb-3">
                        <div class="card_wideaget p-3 rounded-3 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                            fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center fs-4 fw-bold my-3">
                                    {{ App\Models\User::where('user_InviteCode', auth()->user()->user_Referralcode)->count() }}
                                </div>
                                <div class="text-center fs-6 fw-bold text-capitalize">all referals users</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 mb-3">
                        <div class="card_wideaget p-3 rounded-3 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center fs-4 fw-bold my-3"> 1</div>
                                <div class="text-center fs-6 fw-bold text-capitalize">referals 5% users</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-sm-6 mb-3">
                        <div class="card_wideaget p-3 rounded-3 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center fs-4 fw-bold my-3"> 1</div>
                                <div class="text-center fs-6 fw-bold text-capitalize">referals 10% users</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <div class="balance-card">
                        <p class="total-balance">total balnce</p>
                        <p class="balance my-3">{{ auth()->user()->user_wallet }} {{ $currency }}</p>
                        <button class="withdraw-button">withdraw</button>
                    </div>
                </div>

            </div>
            <section class="mt-5">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item me-5" role="presentation">
                        <button class="nav-link active  text-capitalize text-dark" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">my team</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark text-capitalize" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane " aria-selected="false">my earn </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="table-responsive border rounded-3 p-3  mt-5">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">user id</th>
                                        <th scope="col">user name</th>
                                        <th scope="col">percentage</th>
                                    </tr>
                                </thead>
                                @php
                                    $all = App\Models\User::where(
                                        'user_InviteCode',
                                        auth()->user()->user_Referralcode,
                                    )->get();
                                @endphp
                                @if (!$all->isEmpty())
                                    
                               
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $all[0]->id }}</td>
                                        <td>{{ $all[0]->user_name }}</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $all[1]->id }}</td>
                                        <td>{{ $all[1]->user_name }}</td>
                                        <td>5%</td>
                                    </tr>
                                </tbody>
                                 @endif
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="table-responsive border rounded-3 p-3  mt-5">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-nowrap">#</th>
                                        <th scope="col" class="text-nowrap">user id</th>
                                        <th scope="col" class="text-nowrap">user name</th>
                                        <th scope="col" class="text-nowrap">percentage</th>
                                        <th scope="col" class="text-nowrap">amount</th>
                                        <th scope="col" class="text-nowrap">date</th>
                                    </tr>
                                </thead>
                                @php
                                $usersOrders = App\Models\User::where('user_InviteCode', auth()->user()->user_Referralcode)
                                    ->whereHas('carts', function ($query) {
                                        $query->where('item_price', '!=', 0);
                                    })
                                    ->orderBy('id', 'asc')
                                    ->take(2)
                                    ->get();
                            @endphp
                            <tbody>
                                @foreach ($usersOrders as $user)
                                @foreach ($user->carts as $cart)
                                    <tr>
                                    
                                        <th class="text-nowrap" scope="row">{{ $cart->basket_id }}</th>
                                        <td class="text-nowrap">ahmed</td>
                                        <td class="text-nowrap">10%</td>
                                        
                                        @if ($cart->product->item_price != 0)
                                            <td class="text-nowrap">{{ $cart->product->item_price }}</td> 
                                        @endif
                                    
                                        <td class="text-nowrap">{{ $cart->basket_time }}</td>
                                    </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
