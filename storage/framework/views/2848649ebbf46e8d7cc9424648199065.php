<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Or Register || One</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->


    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome-stars.min.css')); ?>">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ion-fonts.css')); ?>">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
    <!-- Timecircles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/timecircles.css')); ?>">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

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
        <!-- Begin Kenne's Login Register Area -->
        <div class="kenne-login-register_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                        <!-- Login Form s-->
                        <form action="<?php echo e(route('signin.submit')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="login-form">
                                <h4 class="login-title"><?php echo e(__('message.Login')); ?></h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label><?php echo e(__('message.Email_Address')); ?></label>
                                        <input type="email" name="email" placeholder="Email Address">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label><?php echo e(__('message.Password')); ?></label>
                                        <input type="password" name="password" placeholder="Password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" name="remember_me" id="remember_me">
                                            <label for="remember_me"><?php echo e(__('message.Remember_Me')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="#"><?php echo e(__('message.Forgotten_pasward')); ?></a>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['account'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="col-md-12">
                                        <button class="kenne-login_btn"><?php echo e(__('message.Login')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="<?php echo e(route('signup.submit')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="login-form">
                                <h4 class="login-title"><?php echo e(__('message.Register')); ?></h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label><?php echo e(__('message.First_Name')); ?></label>
                                        <input type="text" name="first_name" placeholder="First Name">
                                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label><?php echo e(__('message.Last_Name')); ?></label>
                                        <input type="text" name="last_name" placeholder="Last Name">
                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <label><?php echo e(__('message.Email_Address')); ?></label>
                                        <input type="email" name="email" placeholder="Email Address">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <label><?php echo e(__('message.Referal_Code')); ?></label>
                                        <input type="text" name="referalCode" placeholder="referal code">

                                    </div>
                                    <div class="col-md-6">
                                        <label><?php echo e(__('message.Password')); ?></label>
                                        <input type="password" name="password" placeholder="Password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label><?php echo e(__('message.Confirm_Password')); ?></label>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-12">
                                        <button class="kenne-register_btn"><?php echo e(__('message.Register')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Login Register Area  End Here -->
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
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')); ?>"></script>
    <!-- Modernizer JS -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.2.min.js')); ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Slick Slider JS -->
    <script src="<?php echo e(asset('assets/js/plugins/slick.min.js')); ?>"></script>
    <!-- Barrating JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery.barrating.min.js')); ?>"></script>
    <!-- Counterup JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery.counterup.js')); ?>"></script>
    <!-- Nice Select JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery.nice-select.js')); ?>"></script>
    <!-- Sticky Sidebar JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery.sticky-sidebar.js')); ?>"></script>
    <!-- Jquery-ui JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.ui.touch-punch.min.js')); ?>"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="<?php echo e(asset('assets/js/plugins/theia-sticky-sidebar.min.js')); ?>"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo e(asset('assets/js/plugins/waypoints.min.js')); ?>"></script>
    <!-- jQuery Zoom JS -->
    <script src="<?php echo e(asset('assets/js/plugins/jquery.zoom.min.js')); ?>"></script>
    <!-- Timecircles JS -->
    <script src="<?php echo e(asset('assets/js/plugins/timecircles.js')); ?>"></script>

    <!-- Main JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home2/crevelme/one-store.crevel-eg.com/resources/views/login-register.blade.php ENDPATH**/ ?>