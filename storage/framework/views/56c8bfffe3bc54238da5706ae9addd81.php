<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?php echo e(asset('assets2/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('assets2/js/pace.min.js')); ?>"></script>

    <!--plugins-->
    <link href="<?php echo e(asset('assets2/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets2/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?php echo e(asset('assets2/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets2/css/bootstrap-extended.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets2/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets2/css/icons.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="<?php echo e(asset('assets2/css/dark-theme.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets2/css/semi-dark.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets2/css/header-colors.css')); ?>" rel="stylesheet" />

    <title>Dashkote - Bootstrap5 Admin Template</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?php echo e(asset('assets2/images/logo-icon-2.png')); ?>" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">ONE</h4>
                </div>
                <div class="toggle-icon ms-auto">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <a href="/">
                    <div class="parent-icon">
                        <ion-icon name="home-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <li>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <ion-icon name="cog-sharp"></ion-icon>
                        </div>
                        <div class="menu-title">website settings</div>
                    </a>
                    <ul>
                        <li><a href="">
                                <ion-icon name="ellipse-outline"></ion-icon>
                                website slider
                            </a>
                        </li>
                        <li><a href="">
                                <ion-icon name="ellipse-outline"></ion-icon>website panners
                            </a>
                        </li>
                        <li><a href="">
                                <ion-icon name="ellipse-outline"></ion-icon>website socialmedia
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <ion-icon name="brush-sharp"></ion-icon>
                        </div>
                        <div class="menu-title">Design Area</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/designs">
                                <ion-icon name="ellipse-outline"></ion-icon>
                                workshop
                            </a>
                        </li>
                        <li> <a href="/admin/clients-designs">
                                <ion-icon name="ellipse-outline"></ion-icon>Clients Designs
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="shirt-sharp"></ion-icon>
                        </div>
                        <div class="menu-title">Products Area</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/products">
                                <ion-icon name="ellipse-outline"></ion-icon>Add products
                            </a>
                        </li>
                        <li> <a href="/admin/promo-codes">
                                <ion-icon name="ellipse-outline"></ion-icon>promo code
                            </a>
                        </li>
                        <li> <a href="/admin/orders">
                                <ion-icon name="ellipse-outline"></ion-icon>orders
                            </a>
                        </li>
                        <li> <a href="/admin/auctions">
                                <ion-icon name="ellipse-outline"></ion-icon>auctions
                            </a>
                        </li>
                        <li> <a href="/admin/categories">
                                <ion-icon name="ellipse-outline"></ion-icon>catigories
                            </a>
                        </li>
                        <li> <a href="/admin/sub-categories">
                                <ion-icon name="ellipse-outline"></ion-icon>sub catigories
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Users</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/users">
                                <ion-icon name="ellipse-outline"></ion-icon>All users
                            </a>
                        </li>
                        <li>
                            <a href="icons-boxicons.html">
                                <ion-icon name="ellipse-outline"></ion-icon>Wallet
                            </a>
                        </li>
                        <li> <a href="/admin/withdraws">
                                <ion-icon name="ellipse-outline"></ion-icon>Withdraw
                            </a>
                        </li>
                        <li> <a href="icons-feather-icons.html">
                                <ion-icon name="ellipse-outline"></ion-icon>invoices
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                        <ion-icon name="search-sharp"></ion-icon>
                    </div>
                    <input class="form-control" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon">
                        <ion-icon name="close-sharp"></ion-icon>
                    </div>
                </form>
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-button">
                            <a class="nav-link" href="javascript:;">
                                <div class="">
                                    <ion-icon name="search-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dark-mode-icon" href="javascript:;">
                                <div class="mode-icon">
                                    <ion-icon name="moon-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <span class="notify-badge">8</span>
                                    <ion-icon name="notifications-sharp"></ion-icon>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-primary">
                                                <ion-icon name="cart-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14
                                                        Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-success">
                                                <ion-icon name="document-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-info">
                                                <ion-icon name="checkmark-done-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Product Approved <span
                                                        class="msg-time float-end">2 hrs ago</span></h6>
                                                <p class="msg-info">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-warning">
                                                <ion-icon name="send-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Time Response <span class="msg-time float-end">28
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger">
                                                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Comments <span class="msg-time float-end">4
                                                        hrs
                                                        ago</span></h6>
                                                <p class="msg-info">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-primary">
                                                <ion-icon name="albums-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1
                                                        day
                                                        ago</span></h6>
                                                <p class="msg-info">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-success">
                                                <ion-icon name="shield-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Your item is shipped <span
                                                        class="msg-time float-end">5 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-warning">
                                                <ion-icon name="cafe-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2
                                                        weeks
                                                        ago</span></h6>
                                                <p class="msg-info">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="<?php echo e(asset('assets2/images/avatars/06.png')); ?>" class="user-img"
                                        alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="<?php echo e(asset('assets2/images/avatars/06.png')); ?>" alt=""
                                                class="rounded-circle" width="54" height="54">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">UI
                                                    Developer</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="settings-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="speedometer-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Dashboard</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="wallet-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Earnings</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="cloud-download-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Downloads</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="log-out-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Dashboard</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="javascript:;">
                                        <ion-icon name="home-outline"></ion-icon>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">One</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary">Settings</button>
                            <button type="button"
                                class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
                                    class="dropdown-item" href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item"
                                    href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="fs-5">
                                        <ion-icon name="person-add-outline"></ion-icon>
                                    </div>
                                    <div>
                                        <p class="mb-0">Followers</p>
                                    </div>
                                    <div class="fs-5 ms-auto">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h5 class="mb-0">1,037</h5>
                                    </div>
                                    <div class="ms-auto" id="chart1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="fs-5">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </div>
                                    <div>
                                        <p class="mb-0">Likes</p>
                                    </div>
                                    <div class="fs-5 ms-auto">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h5 class="mb-0">23,758</h5>
                                    </div>
                                    <div class="ms-auto" id="chart2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="fs-5">
                                        <ion-icon name="chatbox-outline"></ion-icon>
                                    </div>
                                    <div>
                                        <p class="mb-0">Comments</p>
                                    </div>
                                    <div class="fs-5 ms-auto">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h5 class="mb-0">1,139</h5>
                                    </div>
                                    <div class="ms-auto" id="chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="fs-5">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </div>
                                    <div>
                                        <p class="mb-0">Messages</p>
                                    </div>
                                    <div class="fs-5 ms-auto">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h5 class="mb-0">1,037</h5>
                                    </div>
                                    <div class="ms-auto" id="chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Statistics</h6>
                                    <div class="ms-auto">
                                        <div class="d-flex align-items-center font-13 gap-2">
                                            <span class="border px-1 rounded cursor-pointer"><i
                                                    class="bx bxs-circle me-1 text-primary"></i>Downloads</span>
                                            <span class="border px-1 rounded cursor-pointer"><i
                                                    class="bx bxs-circle me-1 text-success"></i>Earnings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-container1">
                                    <canvas id="chart5"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Top Categories</h6>
                                    <div class="dropdown options ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-container6">
                                    <div class="piechart-legend">
                                        <h2 class="mb-1">$85K</h2>
                                        <h6 class="mb-0">Total Sales</h6>
                                    </div>
                                    <canvas id="chart6"></canvas>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-top">
                                    Clothing
                                    <span class="badge bg-tiffany rounded-pill">55</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Electronics
                                    <span class="badge bg-success rounded-pill">20</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Furniture
                                    <span class="badge bg-warning rounded-pill">10</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Customers</h6>
                                    <div class="dropdown options ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                                    <div class="col-lg-7 col-xl-7 col-xxl-7">
                                        <div class="chart-container5">
                                            <div class="piechart-legend">
                                                <h2 class="mb-1">48K</h2>
                                                <h6 class="mb-0">Customers</h6>
                                            </div>
                                            <canvas id="chart7"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xl-5 col-xxl-5">
                                        <div class="">
                                            <div class="d-flex align-items-start gap-2 mb-3">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" class="text-info"></ion-icon>
                                                </div>
                                                <div>
                                                    <p class="mb-1">Current Customers</p>
                                                    <p class="mb-0 h5">66%</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start gap-2 mb-3">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" class="text-danger"></ion-icon>
                                                </div>
                                                <div>
                                                    <p class="mb-1">New Customers</p>
                                                    <p class="mb-0 h5">48%</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <ion-icon name="ellipse-sharp" class="text-success"></ion-icon>
                                                </div>
                                                <div>
                                                    <p class="mb-1">Retargeted Customers</p>
                                                    <p class="mb-0 h5">25%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card radius-10 bg-transparent shadow-none w-100">
                            <div class="card-body p-0">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="widget-icon radius-10 bg-gradient-purple text-white">
                                                <ion-icon name="wallet-sharp" role="img" class="md hydrated"
                                                    aria-label="wallet sharp">
                                                </ion-icon>
                                            </div>

                                        </div>
                                        <h4 class="my-3">$4,580</h4>
                                        <div class="progress mt-1" style="height: 5px;">
                                            <div class="progress-bar bg-gradient-purple" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>
                                        <p class="mb-0 mt-2">Earned This Month <span class="float-end">+2.4%</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="card radius-10 mb-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="widget-icon-2 bg-gradient-branding text-white">
                                                <ion-icon name="people-sharp" role="img" class="md hydrated"
                                                    aria-label="people sharp">
                                                </ion-icon>
                                            </div>

                                        </div>
                                        <h4 class="my-3">8,126</h4>
                                        <div class="progress mt-1" style="height: 5px;">
                                            <div class="progress-bar bg-gradient-branding" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>
                                        <p class="mb-0 mt-2">New Clients <span class="float-end">+5.3%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">User Activity</h6>
                                    <div class="dropdown options ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-container3">
                                    <canvas id="chart8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card radius-10 bg-transparent shadow-none w-100">
                            <div class="card-body p-0">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-2">Total Session</p>
                                                <h4 class="mb-0">15,690 <span
                                                        class="ms-1 font-13 text-success">+36%</span></h4>
                                            </div>
                                            <div class="fs-5">
                                                <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="mt-3" id="chart9"></div>
                                    </div>
                                </div>
                                <div class="card radius-10 mb-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <p class="mb-2">Page Views</p>
                                                <h4 class="mb-0">28,963 <span
                                                        class="ms-1 font-13 text-danger">-4.5%</span></h4>
                                            </div>
                                            <div class="fs-5">
                                                <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="mt-3" id="chart10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!--end row-->


                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Recent Orders</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#ID</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content-->
        </div>
        <!--end page content wrapper-->


        <!--start footer-->
        <footer class="footer">
            <div class="footer-text">
                Copyright © 2024. All right reserved.
            </div>
        </footer>
        <!--end footer-->


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
            </button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1">
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                            value="option3" checked>
                        <label class="form-check-label" for="SemiDark">Semi Dark</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end switcher-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->


    <!-- JS Files-->
    <script src="<?php echo e(asset('assets2/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/js/bootstrap.bundle.min.js')); ?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('assets2/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/plugins/apexcharts-bundle/js/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/plugins/chartjs/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets2/js/index.js')); ?>"></script>
    <!-- Main JS-->
    <script src="<?php echo e(asset('assets2/js/main.js')); ?>"></script>


</body>

</html>
<?php /**PATH H:\KDEV\NewOne2\NewOne2\resources\views/Dashboard.blade.php ENDPATH**/ ?>