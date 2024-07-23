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
    <?php
        if (!is_null(auth()->user()->user_Referralcode)) {
            $all = App\Models\User::where('user_InviteCode', auth()->user()->user_Referralcode)->get();
        } else {
            $all = collect(); // Return an empty collection if user_Referralcode is null
        }
    ?>

    <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            if (!is_null($user->user_Referralcode)) {
                $all5 = App\Models\User::where('user_InviteCode', 'LIKE', $user->user_Referralcode)->get();
            } else {
                $all5 = collect(); // Return an empty collection if user_Referralcode is null
            }
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <div id='count3' class="text-center fs-4 fw-bold my-3">
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
                                <div id='count2' class="text-center fs-4 fw-bold my-3">
                                    <?php if(isset($all5)): ?>
                                        <?php echo e($all5->count() ?? 0); ?>

                                    <?php else: ?>
                                        0
                                    <?php endif; ?>
                                </div>
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
                                <div id='count1' class="text-center fs-4 fw-bold my-3">
                                    <?php echo e($all->count() ?? 0); ?>

                                </div>
                                <div class="text-center fs-6 fw-bold text-capitalize">referals 10% users</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <div action="<?php echo e(route('wallet.save')); ?>" method="POST" class="balance-card">
                        <?php echo csrf_field(); ?>
                        <p class="total-balance">total balnce</p>
                        <p class="balance my-3"><?php echo e(auth()->user()->user_wallet); ?> <?php echo e($currency); ?></p>
                        <?php if(auth()->user()->user_wallet > 0): ?>
                            <button class="withdraw-button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-bs-whatever="@mdo">withdraw</button>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <section class="mt-5">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item me-5" role="presentation">
                        <button class="nav-link active  text-capitalize text-dark" id="home-tab"
                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                            aria-controls="home-tab-pane" aria-selected="true">my team</button>
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
                                        <th scope="col">user id</th>
                                        <th scope="col">user name</th>
                                        <th scope="col">percentage</th>
                                    </tr>
                                </thead>

                                <?php if(isset($all)): ?>
                                    <tbody>
                                        <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->id); ?></td>
                                                <td><?php echo e($user->user_name); ?></td>
                                                <td>10%</td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($all5)): ?>
                                            <?php $__currentLoopData = $all5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->id); ?></td>
                                                    <td><?php echo e($user->user_name); ?></td>
                                                    <td>5%</td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                <?php endif; ?>
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
                                <?php
                                    $usersOrders = App\Models\User::where(
                                        'user_InviteCode',
                                        auth()->user()->user_Referralcode,
                                    )
                                        ->whereHas('carts', function ($query) {
                                            $query->where('item_price', '!=', 0);
                                        })
                                        ->orderBy('id', 'asc')
                                        ->take(2)
                                        ->get();
                                ?>
                                <tbody>
                                    <?php $__currentLoopData = $usersOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $user->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <th class="text-nowrap" scope="row"><?php echo e($cart->basket_id); ?></th>
                                                <td class="text-nowrap">ahmed</td>
                                                <td class="text-nowrap">10%</td>

                                                <?php if($cart->product->item_price != 0): ?>
                                                    <td class="text-nowrap"><?php echo e($cart->product->item_price); ?></td>
                                                <?php endif; ?>

                                                <td class="text-nowrap"><?php echo e($cart->basket_time); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>



    <div class="modal fade modal-wrapper" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content" style="width: 500px; height: 400px; overflow: hidden;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Withdrawal process</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="withdrawalForm" action="<?php echo e(route('wallet.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input hidden type="text" id='method' name='method'>
                        <div class="mb-4">
                            <label for="recipient-name" class="col-form-label">Withdrawal number</label>
                            <input type="text" class="form-control" name='withdrawal_number' id="recipient-name">
                        </div>
                        <label for="recipient-name" class="col-form-label mb-3">Withdrawal method</label>
                        <div class="mb-3 d-flex align-items-center justify-content-center">

                            <div>
                                <img style="width: 100px; " class="image-option rounded-3 me-3"
                                    src="data:image/png;base64,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"
                                    data-image="Vodafone Cashe" alt="">
                            </div>
                            <div>
                                <img style="width: 100px; height: 65px; " class="image-option rounded-3 me-3"
                                    src="data:image/jpeg;base64,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"
                                    data-image="Insta Pay" alt="">
                            </div>
                            <div>
                                <img style="width: 100px; height: 65px; " class="image-option rounded-3 me-3"
                                    src="data:image/png;base64,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"
                                    data-image="Pank Transfare" alt="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn"
                                style="background-color: #172B4D;color:white;padding: 5px"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn"
                                style="background-color: #172B4D;color:white;padding: 5px">Send
                                request</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script defer>
        let count1 = document.querySelector("#count1");
        let count2 = document.querySelector("#count2");
        let count3 = document.querySelector("#count3");

        count3.innerText = +count1.innerText + +count2.innerText;
    </script>
    <script>
        let selectedMethod = null;
        let paymentMethod = document.querySelectorAll(".payment-method");
        let method = document.getElementById("method");
        document.querySelectorAll('.image-option').forEach(item => {
            item.addEventListener('click', function(e) {
                document.querySelectorAll('.image-option').forEach(div => div.classList.remove('selected'));
                this.classList.add('selected');
                selectedMethod = this.getAttribute('data-image');
                method.value = selectedMethod;
            });
        });
    </script>
</body>

</html>
<?php /**PATH H:\KDEV\NewOne2\NewOne2\resources\views/wallet.blade.php ENDPATH**/ ?>