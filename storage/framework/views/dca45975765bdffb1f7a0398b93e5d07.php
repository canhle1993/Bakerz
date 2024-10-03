<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerfresh - Cake Shop HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/lastudioicons.css">
    <link rel="stylesheet" href="./assets/css/vendor/dliconoutline.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="./assets/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    <div class="section section-padding-03">
        <div class="container custom-container">
            <div class="row">

                <div class="col-12">

                    <!-- Cart Table For Tablet & Up Devices Start -->
                    <div class="table-responsive">
                        <table class="wishlist-table table text-center align-middle mb-6 d-none d-md-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="title text-start">Product</th>
                                    <th class="product-stock-status">Stock Status</th>
                                    <th class="price">Price</th>
                                    <th class="total"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake"></a></th>
                                    <th class="text-start"><a href="single-product.html">Croissant Italy Cake</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$110.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Select Option</a></td>
                                </tr>
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin"></a></th>
                                    <th class="text-start"><a href="single-product.html">Chocolate Muffin</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$19.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <th class="wishlist-remove"><button class="remove-btn"><i class="lastudioicon lastudioicon-e-remove"></i></button></th>
                                    <th class="wishlist-thumb"><a href="single-product.html"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin"></a></th>
                                    <th class="text-start"><a href="single-product.html">Chocolate Muffin</a></th>
                                    <td class="stock in-stock">In Stock</td>
                                    <td>$19.00</td>
                                    <td class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Table For Tablet & Up Devices End -->

                    <!-- Cart Table For Mobile Devices Start -->
                    <div class="cart-products-mobile d-md-none">
                        <div class="cart-product-mobile">
                            <div class="cart-product-mobile-thumb">
                                <a href="single-product.html" class="cart-product-mobile-image"><img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake" width="90" height="103"></a>
                                <button class="cart-product-mobile-remove"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                            </div>
                            <div class="cart-product-mobile-content">
                                <h5 class="cart-product-mobile-title"><a href="single-product.html">Croissant Italy Cake</a></h5>
                                <span class="cart-product-mobile-quantity">1 x $110.00</span>
                                <span class="wishlist-cart">
                                    <a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a>
                                </span>
                            </div>
                        </div>
                        <div class="cart-product-mobile">
                            <div class="cart-product-mobile-thumb">
                                <a href="single-product.html" class="cart-product-mobile-image"><img src="assets/images/product/product-tab-2.png" alt="Chocolate Muffin" width="90" height="103"></a>
                                <button class="cart-product-mobile-remove"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                            </div>
                            <div class="cart-product-mobile-content">
                                <h5 class="cart-product-mobile-title"><a href="single-product.html">Chocolate Muffin</a></h5>
                                <span class="cart-product-mobile-quantity">1 x $19.00</span>
                                <span class="wishlist-cart"><a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Table For Mobile Devices End -->

                </div>

            </div>
        </div>
    </div>
    <!-- Wishlist Section End -->

    <div class="bg-dark-four dark-footer">
        <!-- Footer Strat -->
    <div class="footer-section">

        <!-- Footer Widget Section Strat -->
        <div class="footer-widget-section">
            <div class="container custom-container">
                <div class="row gy-6">
                    <div class="col-md-4">
                        <!-- Footer Widget Section Strat -->
                        <div class="footer-widget">
                            <div class="footer-widget__logo">
                                <a class="logo-dark" href="<?php echo e(route('client.home')); ?>"><img src="assets/images/logo.svg" alt="Logo"></a>
                                <a class="logo-white d-none" href="index.html"><img src="assets/images/logo-white.svg" alt="Logo"></a>
                            </div>
                            <div class="footer-widget__social">
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-facebook"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-pinterest"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Footer Widget Section End -->
                    </div>
                    <div class="col-md-8">
                        <!-- Footer Widget Wrapper Strat -->
                        <div class="footer-widget-wrapper d-flex flex-wrap gap-4">

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Categories</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('category')); ?>">Sweet Breads</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Baked Goods</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Cakes</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Cheesecakes</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('delivery')); ?>">Delivery</a></li>
                                    <li><a href="<?php echo e(route('checkout')); ?>">Payment</a></li>
                                    <li><a href="<?php echo e(route('exchange-return-policy')); ?>">Exchange & Return Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                                    <li><a href="<?php echo e(route('blog-detail')); ?>">Latest Post</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Strat -->
        <div class="footer-copyright footer-copyright-two">
            <div class="container">
                <!-- Footer Copyright Text Strat -->
                <div class="footer-copyright-text text-center">
                    <p>&copy; 2024 <strong> Bakerz Bite </strong> Made with <i class="lastudioicon-heart-1"></i> by <a href="https://aptechvietnam.com.vn/">Aptech</a></p>
                </div>
                <!-- Footer Copyright Text End -->
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->
    </div>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/countdown.min.js"></script>
    <script src="./assets/js/ion.rangeSlider.min.js"></script>
    <script src="./assets/js/lightgallery.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>

    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/others/wishlist.blade.php ENDPATH**/ ?>