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
                                <img class="white-logo" alt="Logo">
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
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Product Details</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Simple Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Single Product Section Start -->
    <div class="section section-margin-top section-padding-03">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img d-flex overflow-hidden flex-row">

                        <!-- Single Product Image Start -->
                        <div class="single-product-vertical-tab swiper-container order-2">

                            <div class="swiper-wrapper popup-gallery" id="popup-gallery">
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-1.png">
                                    <img class="w-100" src="assets/images/product/product-7-1.png" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-2.png">
                                    <img class="w-100" src="assets/images/product/product-7-2.png" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-3.png">
                                    <img class="w-100" src="assets/images/product/product-7-3.png" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-4.png">
                                    <img class="w-100" src="assets/images/product/product-7-4.png" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-5.png">
                                    <img class="w-100" src="assets/images/product/product-7-5.png" alt="Product">
                                </a>
                                <a class="swiper-slide h-auto" href="assets/images/product/product-7-6.png">
                                    <img class="w-100" src="assets/images/product/product-7-6.png" alt="Product">
                                </a>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-vertical-next swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                            <div class="swiper-button-vertical-prev swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="product-thumb-vertical overflow-hidden swiper-container order-1">

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-1.png" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-2.png" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-3.png" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-4.png" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-5.png" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/product-tab-6.png" alt="Product">
                                </div>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <!--
                                <div class="swiper-button-vertical-next  swiper-button-next"><i class="lastudioicon-right-arrow"></i></div>
                                <div class="swiper-button-vertical-prev swiper-button-prev"><i class="lastudioicon-left-arrow"></i></div>
                            -->
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>
                <div class="col-lg-6">

                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">

                        <!-- Product Head Start -->
                        <div class="product-head mb-3">

                            <!-- Price Start -->
                            <span class="product-head-price">$4.99</span>
                            <!-- Price End -->

                            <!-- Rating Start -->
                            <div class="review-rating">
                                <span class="review-rating-bg">
                                    <span class="review-rating-active" style="width: 90%"></span>
                                </span>
                                <a href="#/" class="review-rating-text">(1 Review)</a>
                            </div>
                            <!-- Rating End -->

                        </div>
                        <!-- Product Head End -->

                        <!-- Description Start -->
                        <p class="desc-content">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                        <!-- Description End -->

                        <!-- Product Quantity, Cart Button, Wishlist and Compare Start -->
                        <ul class="product-cta">
                            <li>
                                <!-- Quantity Start -->
                                <div class="quantity">
                                    <div class="cart-plus-minus"></div>
                                </div>
                                <!-- Quantity End -->
                            </li>
                            <li>
                                <!-- Cart Button Start -->
                                <div class="cart-btn">
                                    <div class="add-to_cart">
                                        <a class="btn btn-dark btn-hover-primary" href="#/" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Cart Button End -->
                            </li>
                            <li>
                                <!-- Action Button Start -->
                                <div class="actions">
                                    <a href="#/" title="Wishlist" class="action compare" data-bs-toggle="modal" data-bs-target="#modalWishlist"><i class="lastudioicon-heart-2"></i></a>
                                    <a href="#/" title="Compare" class="action wishlist" data-bs-toggle="modal" data-bs-target="#modalCompare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
                                </div>
                                <!-- Action Button End -->
                            </li>
                        </ul>
                        <!-- Product Quantity, Cart Button, Wishlist and Compare End -->

                        <!-- Product Meta Start -->
                        <ul class="product-meta">
                            <li class="product-meta-wrapper">
                                <span class="product-meta-name">SKU:</span>
                                <span class="product-meta-detail">REF. LA-199</span>
                            </li>
                            <li class="product-meta-wrapper">
                                <span class="product-meta-name">category:</span>
                                <span class="product-meta-detail">
                                    <a href="#">Cake, </a>
                                    <a href="#">New</a>
                                </span>
                            </li>
                            <li class="product-meta-wrapper">
                                <span class="product-meta-name">Tags:</span>
                                <span class="product-meta-detail">
                                    <a href="#">Cake 1</a>
                                </span>
                            </li>
                        </ul>
                        <!-- Product Meta End -->

                        <!-- Product Shear Start -->
                        <div class="product-share">
                            <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                            <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                            <a href="#"><i class="lastudioicon-b-pinterest"></i></a>
                            <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                        </div>
                        <!-- Product Shear End -->

                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>

            <div class="row section-margin">
                <!-- Single Product Tab Start -->
                <div class="col-lg-12 single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="product-desc-row">
                                <div class="product-desc-img">
                                    <img src="assets/images/product/product-tab.jpg" alt="Image">
                                </div>
                                <div class="product-desc-content">
                                    <h5 class="product-desc-title">We Love Cake</h5>
                                    <p class="product-desc-text">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Pellentesque vulputate quam a quam volutpat, sed ullamcorper erat commodo. Vestibulum sit amet ipsum vitae mauris mattis vulputate lacinia nec neque. Aenean quis consectetur nisi, ac interdum elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <table class="table border mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>Color</span></td>
                                            <td>Blue, Gray, Green, Red, Yellow</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Size</span></td>
                                            <td>Large, Medium, Small</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="review">

                                <!-- Review Top Start -->
                                <div class="review-top d-flex mb-4 align-items-center">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/avatar/testimoial-1.png">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details ms-3">
                                        <!-- Rating Start -->
                                        <div class="review-rating mb-2">
                                            <span class="review-rating-bg">
                                                <span class="review-rating-active" style="width: 90%"></span>
                                            </span>
                                        </div>
                                        <!-- Rating End -->
                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex">
                                            <h5 class="title me-1">Admin - </h5>
                                            <span>January 19, 2021</span>
                                        </div>
                                        <!-- Review Title & Date End -->
                                        <p>Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.</p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- Review Top End -->

                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">
                                            <h5 class="title mb-2">Add a review</h5>
                                            <p class="comments-area_text">Your email address will not be published. Required fields are marked *</p>
                                            <!-- Comment form Start -->
                                            <form action="#" class="comments-area_form">
                                                <div class="row">

                                                    <!-- Input Name Start -->
                                                    <div class="col-md-6 mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input class="comments-area_input" type="text" required="required" name="Name">
                                                    </div>
                                                    <!-- Input Name End -->

                                                    <!-- Input Email Start -->
                                                    <div class="col-md-6 mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input class="comments-area_input" type="text" required="required" name="email">
                                                    </div>
                                                    <!-- Input Email End -->

                                                </div>
                                                <!-- Comment Texarea Start -->
                                                <div class="mb-3">
                                                    <label>Comment</label>
                                                    <textarea class="comments-area_textarea" required="required"></textarea>
                                                </div>
                                                <!-- Comment Texarea End -->

                                                <!-- Comment Submit Button Start -->
                                                <div class="comment-form-submit">
                                                    <button class="btn btn-dark btn-hover-primary">Submit</button>
                                                </div>
                                                <!-- Comment Submit Button End -->

                                            </form>
                                            <!-- Comment form End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Comments ans Replay End -->

                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- Single Product Tab End -->
            </div>

        </div>
    </div>
    <!-- Single Product Section End -->

    <!-- Product Section Strat -->
    <div class="section-padding-03 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Strat -->
                    <div class="section-title">
                        <h2 class="section-title__title">Related Product</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <!-- Product Active Strat -->
            <div class="product-active">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-8-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Brownie</a></h5>
                                    <span class="product-item__price ">$4.99</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-7-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                                    <span class="product-item__price ">$5.00</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-6-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Cream Muffin</a></h5>
                                    <span class="product-item__price ">$7.55</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">@badge</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-5-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">Macaron Cake</a></h5>
                                    <span class="product-item__price ">$9.44</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">
                                <div class="product-item__badge d-none">Hot</div>
                                <div class="product-item__image border w-100">
                                    <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-4-500x625.jpg" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title"><a href="single-product.html">No-bake chocolate</a></h5>
                                    <span class="product-item__price ">$4.99</span>
                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                    </div>

                    <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                </div>
            </div>
            <!-- Product Active End -->

        </div>
    </div>
    <!-- Product Section End -->

    <!-- Scroll Top Start -->
    <a href="#/" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->

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

    <div class="quickview-product-modal modal fade" id="modalCart">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Cart Successfully!
                </div>
            </div>
        </div>
    </div>

    <div class="quickview-product-modal modal fade" id="modalWishlist">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Wishlist Successfully!
                </div>
            </div>
        </div>
    </div>

    <div class="quickview-product-modal modal fade" id="modalCompare">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Compare Successfully!
                </div>
            </div>
        </div>
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
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/product-types/product-simple.blade.php ENDPATH**/ ?>