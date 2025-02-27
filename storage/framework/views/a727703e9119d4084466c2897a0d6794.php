<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account || One</title>
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
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Page Content Area -->
        <main class="page-content">
            <div class="account-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                        href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                        aria-selected="true">profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab"
                                        href="#account-orders" role="tab" aria-controls="account-orders"
                                        aria-selected="false">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-details-tab" data-bs-toggle="tab"
                                        href="#account-details" role="tab" aria-controls="account-details"
                                        aria-selected="false">Account Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="<?php echo e(route('logout')); ?>"
                                        role="tab" aria-selected="false">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                                    aria-labelledby="account-dashboard-tab">
                                    <div class="myaccount-dashboard">
                                        <p>Hello <b><?php echo e(auth()->user()->user_name); ?></b> </p>
                                        <div class="d-flex align-items-center">
                                            <div> your refler code is </div>
                                            <div class="fs-4 fw-bold"> <?php echo e(auth()->user()->user_Referralcode); ?> </div>
                                        </div>
                                        <p>From your account dashboard you can view your recent orders, manage your
                                            shipping and
                                            billing addresses and <a href="javascript:void(0)">edit your password and
                                                account
                                                details</a>.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-orders" role="tabpanel"
                                    aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                        <h4 class="small-title">MY ORDERS</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>ORDER</th>
                                                        <th>DATE</th>
                                                        <th>STATUS</th>
                                                        <th>TOTAL</th>
                                                    </tr>
                                                    <?php
                                                        $orders = App\Models\Order::where(
                                                            'basket_userid',
                                                            auth()->user()->id,
                                                        )->get();
                                                    ?>
                                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><a class="account-order-id"
                                                                    href="javascript:void(0)">#<?php echo e($order->id); ?></a>
                                                            </td>
                                                            <td><?php echo e($order->created_at); ?></td>
                                                            <td><?php echo e($order->status); ?></td>
                                                            <td><?php echo e($order->total); ?>L.E</td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-address" role="tabpanel"
                                    aria-labelledby="account-address-tab">
                                    <div class="myaccount-address">
                                        <p>The following addresses will be used on the checkout page by default.</p>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="small-title">Billing Adress</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                            <div class="col">
                                                <h4 class="small-title">Shipping Address</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel"
                                    aria-labelledby="account-details-tab">
                                    <div class="myaccount-details">
                                        <form method="POST" action="<?php echo e(route('editProfile')); ?>" class="kenne-form">
                                            <?php echo csrf_field(); ?>
                                            <div class="kenne-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-firstname"> Name*</label>
                                                    <input value="<?php echo e(auth()->user()->user_name); ?>" name="user_name"
                                                        type="text" id="account-details-firstname">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-email">Email*</label>
                                                    <input value="<?php echo e(auth()->user()->user_email); ?>" name="email"
                                                        type="email" id="account-details-email">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-oldpass">Current Password(leave blank
                                                        to leave
                                                        unchanged)</label>
                                                    <input name="currentPassword" type="password"
                                                        id="account-details-oldpass">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-newpass">New Password (leave blank to
                                                        leave
                                                        unchanged)</label>
                                                    <input name="NewPassword" type="password"
                                                        id="account-details-newpass">
                                                </div>

                                                <div class="single-input">
                                                    <button class="kenne-btn kenne-btn_dark" type="submit"><span>SAVE
                                                            CHANGES</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kenne's Account Page Area End Here -->
        </main>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
</body>

</html>
<?php /**PATH /home2/crevelme/one-store.crevel-eg.com/resources/views/my-account.blade.php ENDPATH**/ ?>