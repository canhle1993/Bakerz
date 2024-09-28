<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerz Bite</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/lastudioicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/dliconoutline.css')); ?>">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ion.rangeSlider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightgallery-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Checkout</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section section section-padding-03">
        <div class="container custom-container">
            <form action="<?php echo e(route('cart.cart_checkout')); ?>" class="checkout-form" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="row g-8">

                    <div class="col-lg-7">

                        <!-- Billing Address -->
                        <div id="billing-form">
                            <h4 class="mb-4">Billing Address</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Consignee name*</label>
                                    <input class="form-field" type="text" placeholder="Name..." required>
                                </div>
                                <div class="col-md-6">
                                    <label>Consignee phone number*</label>
                                    <input name="delivery_phone" class="form-field" type="text" placeholder="Phone..." required>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div id="sa" style="display: contents;">
                                    <label>Shipping address*</label>
                                    <input name="delivery_address" class="form-field" type="text" placeholder="Address..."  required></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5">
                        

                        <!-- Checkout Summary Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Cart Total</h4>

                            <table class="checkout-summary-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <?php
                                    $total = 0;
                                ?>

                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $total += $details['quantity'] * $details['price'];
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e($details['name']); ?></td>
                                            <td><?php echo e($details['quantity']); ?> × <?php echo e(number_format($details['price'], 2)); ?> $</td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <tfoot>
                                    <tr>
                                        <th class="border-top total">Grand Total</th>
                                        <th class="border-top amount"><strong id="total-price"><?php echo e(number_format($total, 2)); ?> $</strong></th>
                                    </tr>
                                </tfoot>

                            </table>

                        </div>
                        <!-- Checkout Summary End -->

                        <!-- Payment Method Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Payment Method</h4>

                            <div class="checkout-payment-method">
                                <div class="single-method form-check">
                                    <input class="form-check-input" onclick="ggg()" type="radio" id="payment_bank" name="payment-method" checked>
                                    <label class="form-check-label" for="payment_bank">Home delivery</label>
                                    <p>Please fill in all information and pay before ordering.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" onclick="rrr()" type="radio" id="payment_check" name="payment-method" >
                                    <label class="form-check-label" for="payment_check">Pick up at store</label>
                                    <p>Please fill in all information and pay before ordering.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="checkbox" id="accept_terms">
                                    <label class="form-check-label" for="accept_terms">I’ve read and accept the terms &amp; conditions</label>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-dark btn-primary-hover rounded-0 mt-6" id="place-order-btn" disabled>Place order</button>

                        </div>
                        <!-- Payment Method End -->
                        
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Product Section End -->

    <div class="bg-dark-four dark-footer">
        <!-- Footer Strat -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End -->
    </div>

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.7.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugins JS -->
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lightgallery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ajax.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>

    <!-- Activation JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <!-- Vendors JS -->

    <script>
         $(window).on("scroll", function (event) {
            var scroll = $(window).scrollTop();
            if (scroll <= 0) {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).removeClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo-white.svg')); ?>"
                );
            } else {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).addClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo.svg')); ?>"
                );
            }
        });
        function rrr(){
                document.getElementById('sa').style.display = 'none';
            }
        function ggg(){
                document.getElementById('sa').style.display = 'contents';
            }

            document.getElementById('accept_terms').addEventListener('change', function() {
        var placeOrderButton = document.getElementById('place-order-btn');
        // Enable the button only if the checkbox is checked
        if (this.checked) {
            placeOrderButton.removeAttribute('disabled');
        } else {
            placeOrderButton.setAttribute('disabled', 'disabled');
        }
    });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/others/checkout.blade.php ENDPATH**/ ?>