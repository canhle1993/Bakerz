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

        <!-- Header Start -->
        <div class="header-section header-transparent header-sticky">
            <div class="container position-relative">

                <div class="row align-items-center">
                    <div class="col-lg-3 col-xl-3 col-7">
                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="<?php echo e(route('client.home')); ?>">
                                <img class="white-logo" src="assets/images/logo-white.svg" width="229" height="62" alt="Logo">
                            </a>
                        </div>
                        <!-- Header Logo End -->
                    </div>
                    <div class="col-lg-7 col-xl-6 d-none d-lg-block">
                        <!-- Header Menu Start -->
                        <div class="header-menu">
                            <ul class="header-primary-menu d-flex justify-content-center">
                                <li >
                                    <a  href="<?php echo e(route('client.home')); ?>"  class="menu-item-link"><span >Home</span></a>
                                </li>
                                <li class="position-static">
                                    <a class="menu-item-link" href="<?php echo e(route('client.home')); ?>"><span>Shop</span></a>
                                    <ul class="sub-menu sub-menu-mega">
                                        <li class="mega-menu-item">
                                            <ul>
                                                <li class="mega-menu-item-title">Product Types</li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('product-simple')); ?>"><span>Product Simple</span></a></li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('product-grouped')); ?>"><span>Product Grouped</span></a></li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('product-affiliate')); ?>"><span>Product Affiliate</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <ul>
                                                <li class="mega-menu-item-title">Others</li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('cart')); ?>"><span>Cart</span></a></li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('wishlist')); ?>"><span>Wishlist</span></a></li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('checkout')); ?>"><span>Checkout</span></a></li>
                                                <li><a class="sub-item-link" href="<?php echo e(route('order-tracking')); ?>"><span>Order Tracking</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item banner-menu-content-wrap">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(route('client.home')); ?>">
                                                        <img src="assets/images/product/featured-product-01.png" alt="Shop">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item banner-menu-content-wrap">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(route('client.home')); ?>">
                                                        <img src="assets/images/product/featured-product-01.png" alt="Shop">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item-link" href="<?php echo e(route('client.home')); ?>"><span>Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a class="sub-item-link" href="<?php echo e(route('about')); ?>"><span>About</span></a></li>
                                        <li><a class="sub-item-link" href="<?php echo e(route('our-chef')); ?>"><span>Our Chef</span></a></li>
                                        <li><a class="sub-item-link" href="<?php echo e(route('faq')); ?>"><span>FAQs</span></a></li>
                                        <li><a class="sub-item-link" href="<?php echo e(route('pricing-plan')); ?>"><span>Pricing Plans</span></a></li>
                                        <li><a class="sub-item-link" href="<?php echo e(route('coming-soon')); ?>"><span>Coming Soon</span></a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-item-link" href="<?php echo e(route('client.home')); ?>"><span>Blog</span></a>
                                    <ul class="sub-menu">
                                        <li><a class="sub-item-link" href="<?php echo e(route('blog-detail')); ?>"><span>Blog Details</span></a></li>
                                    </ul>
                                </li>
                                <li><a class="menu-item-link" href="<?php echo e(route('contact')); ?>"><span>Contact</span></a></li>
                            </ul>
                        </div>
                        <!-- Header Menu End -->
                    </div>
                    <div class="col-lg-2 col-xl-3 col-5">
                        <!-- Header Meta Start -->
                        <div class="header-meta">
                            <ul class="header-meta__action d-flex justify-content-end">
                                <li><button class="action search-open"><i class="lastudioicon-zoom-1"></i></button></li>
                                <li>
                                    <button class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
                                        <i class="lastudioicon-shopping-cart-2"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">3</span>
                                    </button>
                                </li>
                                <?php if(auth()->guard()->check()): ?>
                                <li >
                                    <a  class="menu-item-link" href="<?php echo e(route('client.profile', ['userid' => Auth::user()->user_id])); ?>">Profile</a>
                                </li>
                                <li >
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <a  class="menu-item-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>

                                <li >
                                <form id="login-form" action="<?php echo e(route('login')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <a  class="menu-item-link" href="<?php echo e(route('login')); ?>">Login</a>
                                </li>

                                <?php endif; ?>
                                <li class="d-lg-none">
                                    <button class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i class="lastudioicon-menu-8-1"></i></button>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Meta End -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Header End -->

        <!-- Search Start  -->
        <div class="search-popup position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center p-6 bg-black bg-opacity-75">
            <div class="search-popup__form position-relative">
                <form action="" method="GET">
                    <input class="search-popup__field border-0 border-bottom bg-transparent text-white w-100 tra py-3" type="text" placeholder="Search…">
                    <button class="search-popup__icon text-white border-0 bg-transparent position-absolute top-50 end-0 translate-middle-y"><i class="lastudioicon-zoom-1"></i></button>
                </form>
            </div>
            <button class="search-popup__close position-absolute top-0 end-0 m-8 p-3 lh-1 border-0 text-white fs-4"><i class="lastudioicon-e-remove"></i></button>
        </div>
        <!-- Search End -->

    <!-- offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-menu bg-secondary" id="offcanvasMenu">
        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"><i class="lastudioicon-e-remove"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="mobile-primary-menu">
                <li>
                    <a href="#" class="menu-item-link active"><span>Home</span></a>
                    <ul class="sub-menu">
                        <li><a class="sub-item-link" href="index.html"><span>Cake Shop 01</span></a></li>
                        <li><a class="sub-item-link" href="index-2.html"><span>Cake Shop 02</span></a></li>
                        <li><a class="sub-item-link" href="index-3.html"><span>Cake Shop 03</span></a></li>
                        <li><a class="sub-item-link" href="index-4.html"><span>Cake Shop 04</span></a></li>
                        <li><a class="sub-item-link" href="index-5.html"><span>Cake Shop 05</span></a></li>
                        <li><a class="sub-item-link" href="index-6.html"><span>Cake Shop 06</span></a></li>
                        <li><a class="sub-item-link" href="index-7.html"><span>Bread Shop</span></a></li>
                        <li><a class="sub-item-link" href="index-8.html"><span>Bread Shop 02</span></a></li>
                        <li><a class="sub-item-link" href="index-9.html"><span>Cake Shop Fullscreen</span></a></li>
                    </ul>
                </li>
                <li class="position-static">
                    <a class="menu-item-link" href="#"><span>Shop</span></a>
                    <ul class="sub-menu sub-menu-mega">
                        <li class="mega-menu-item">
                            <ul>
                                <li class="mega-menu-item-title">Shop Layouts</li>
                                <li><a class="sub-item-link" href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                                <li><a class="sub-item-link" href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                                <li><a class="sub-item-link" href="shop.html"><span>Shop 4 Columns</span></a></li>
                                <li><a class="sub-item-link" href="shop-five-columns.html"><span>Shop 5 Columns</span></a></li>
                            </ul>
                        </li>
                        <li class="mega-menu-item">
                            <ul>
                                <li class="mega-menu-item-title">Product Types</li>
                                <li><a class="sub-item-link" href="single-product.html"><span>Product Simple</span></a></li>
                                <li><a class="sub-item-link" href="single-product-grouped.html"><span>Product Grouped</span></a></li>
                                <li><a class="sub-item-link" href="single-product-variable.html"><span>Product Variable</span></a></li>
                                <li><a class="sub-item-link" href="single-product-affiliate.html"><span>Product Affiliate</span></a></li>
                                <li><a class="sub-item-link" href="single-product-Custom.html"><span>Custom Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="mega-menu-item">
                            <ul>
                                <li class="mega-menu-item-title">Others</li>
                                <li><a class="sub-item-link" href="shop-account.html"><span>My Account</span></a></li>
                                <li><a class="sub-item-link" href="shop-cart.html"><span>Cart</span></a></li>
                                <li><a class="sub-item-link" href="shop-wishlist.html"><span>Wishlist</span></a></li>
                                <li><a class="sub-item-link" href="shop-checkout.html"><span>Checkout</span></a></li>
                                <li><a class="sub-item-link" href="shop-compare.html"><span>Compare</span></a></li>
                                <li><a class="sub-item-link" href="shop-order-tracking.html"><span>Order Tracking</span></a></li>
                            </ul>
                        </li>
                        <li class="mega-menu-item banner-menu-content-wrap">
                            <ul>
                                <li>
                                    <a href="shop.html">
                                        <img src="assets/images/product/featured-product-01.png" alt="Shop">
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="menu-item-link" href="#"><span>Pages</span></a>
                    <ul class="sub-menu">
                        <li><a class="sub-item-link" href="about.html"><span>About</span></a></li>
                        <li><a class="sub-item-link" href="contact.html"><span>Contact</span></a></li>
                        <li><a class="sub-item-link" href="contact-2.html"><span>Contact 2</span></a></li>
                        <li><a class="sub-item-link" href="our-chef.html"><span>Our Chef</span></a></li>
                        <li><a class="sub-item-link" href="faq.html"><span>FAQs</span></a></li>
                        <li><a class="sub-item-link" href="pricing.html"><span>Pricing Plans</span></a></li>
                        <li><a class="sub-item-link" href="404.html"><span>404 Not Found</span></a></li>
                        <li><a class="sub-item-link" href="coming-soon.html"><span>Coming Soon</span></a></li>
                    </ul>
                </li>
                <li><a class="menu-item-link" href="#"><span>Blog</span></a>
                    <ul class="sub-menu">
                        <li><a class="sub-item-link" href="blog-right-sidebar.html"><span>Blog Right Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-left-sidebar.html"><span>Blog Left Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-no-sidebar.html"><span>Blog No Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-grid-right-sidebar.html"><span>Blog Grid Right Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-grid-left-sidebar.html"><span>Blog Grid Left Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-grid-no-sidebar.html"><span>Blog Grid No Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-details-right-sidebar.html"><span>Blog Post Right Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-details-left-sidebar.html"><span>Blog Post Left Sidebar</span></a></li>
                        <li><a class="sub-item-link" href="blog-details.html"><span>Blog Details</span></a></li>
                    </ul>
                </li>
                <li><a class="menu-item-link" href="contact.html"><span>Contact</span></a></li>
            </ul>
            <ul class="hotline-wrapper offcanvas-hotline">
                <li>
                    <div class="hotline">
                        <i class="lastudioicon lastudioicon-support248"></i>
                        <div class="hotline-content">
                            <span class="hotline-text">Hotline</span>
                            <a class="hotline-link" href="tel:0123456789">(012) 345-6789</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hotline">
                        <i class="lastudioicon lastudioicon-pin-check"></i>
                        <div class="hotline-content">
                            <span class="hotline-text">Store Location</span>
                            <a class="hotline-link" href="#/">6391 Elgin St. Celina, Delaware 10299</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- offcanvas Menu End -->

    <!-- Offcanvas Cart Start  -->
    <div class="offcanvas offcanvas-end offcanvas-cart" id="offcanvasCart">

        <div class="offcanvas-header">
            <h4 class="offcanvas-title">My Cart</h4>
            <button type="button" class="btn-close text-secondary" data-bs-dismiss="offcanvas"><i class="lastudioicon lastudioicon-e-remove"></i></button>
        </div>

        <div class="offcanvas-body">
            <!-- Offcanvas Cart Items Start  -->
            <ul class="offcanvas-cart-items">
                <li>
                    <!-- Mini Cart Item Start  -->
                    <div class="mini-cart-item">
                        <a href="#/" class="mini-cart-item__remove"><i class="lastudioicon lastudioicon-e-remove"></i></a>
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="assets/images/mini-cart/cart-1.png" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">Macaron Cake</a></h6>
                            <span class="mini-cart-item__quantity">1 × $4.99</span>
                        </div>
                    </div>
                    <!-- Mini Cart Item End  -->
                </li>
                <li>
                    <!-- Mini Cart Item Start  -->
                    <div class="mini-cart-item">
                        <a href="#/" class="mini-cart-item__remove"><i class="lastudioicon lastudioicon-e-remove"></i></a>
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="assets/images/mini-cart/cart-2.png" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">Cream Muffin</a></h6>
                            <span class="mini-cart-item__quantity">1 × $4.99</span>
                        </div>
                    </div>
                    <!-- Mini Cart Item End  -->
                </li>
                <li>
                    <!-- Mini Cart Item Start  -->
                    <div class="mini-cart-item">
                        <a href="#/" class="mini-cart-item__remove"><i class="lastudioicon lastudioicon-e-remove"></i></a>
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="assets/images/mini-cart/cart-3.png" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">Brownie</a></h6>
                            <span class="mini-cart-item__quantity">1 × $4.99</span>
                        </div>
                    </div>
                    <!-- Mini Cart Item End  -->
                </li>
                <li>
                    <!-- Mini Cart Item Start  -->
                    <div class="mini-cart-item">
                        <a href="#/" class="mini-cart-item__remove"><i class="lastudioicon lastudioicon-e-remove"></i></a>
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="assets/images/mini-cart/cart-4.png" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">Chocolate Muffin</a></h6>
                            <span class="mini-cart-item__quantity">1 × $4.99</span>
                        </div>
                    </div>
                    <!-- Mini Cart Item End  -->
                </li>
                <li>
                    <!-- Mini Cart Item Start  -->
                    <div class="mini-cart-item">
                        <a href="#/" class="mini-cart-item__remove"><i class="lastudioicon lastudioicon-e-remove"></i></a>
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="assets/images/mini-cart/cart-5.png" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">No-bake chocolate</a></h6>
                            <span class="mini-cart-item__quantity">1 × $4.99</span>
                        </div>
                    </div>
                    <!-- Mini Cart Item End  -->
                </li>
            </ul>
            <!-- Offcanvas Cart Items End  -->
        </div>

        <div class="offcanvas-footer d-flex flex-column gap-4">

            <!-- Mini Cart Total End  -->
            <div class="mini-cart-totla">
                <span class="label">Subtotal:</span>
                <span class="value">$24.95</span>
            </div>
            <!-- Mini Cart Total End  -->

            <!-- Mini Cart Button End  -->
            <div class="mini-cart-btn d-flex flex-column gap-2">
                <a class="d-block btn btn-secondary btn-hover-primary" href="#">View cart</a>
                <a class="d-block btn btn-secondary btn-hover-primary" href="#">Checkout</a>
            </div>
            <!-- Mini Cart Button End  -->

        </div>

    </div>
    <!-- Offcanvas Cart End -->

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Order Tracking</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Order Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Order Tracking Section Start -->
    <div class="tracking">
        <div class="tracking-col tracking-col-form">
            <form class="tracking-form" action="#">
                <div class="row row-cols-1 g-4">
                    <div class="col">
                        <p class="tracking-form-text">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                    </div>
                    <div class="col">
                        <label>Order ID</label>
                        <input class="form-field" type="text" placeholder="First Name">
                    </div>
                    <div class="col">
                        <label>Billing email</label>
                        <input class="form-field" type="text" placeholder="Last Name">
                    </div>
                    <div class="col text-center mt-10">
                        <button class="btn btn-dark btn-hover-primary">Track</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tracking-col d-none d-md-block">
            <div class="tracking-bg" data-bg-image="assets/images/bg/order-tracking.jpg"></div>
        </div>
    </div>
    <!-- Order Tracking Section End -->

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
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/others/order-tracking.blade.php ENDPATH**/ ?>