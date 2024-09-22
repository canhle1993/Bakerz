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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/lastudioicons.css">
    <link rel="stylesheet" href="assets/css/vendor/dliconoutline.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Header Start -->
    <div class="header-section header-transparent header-sticky">
        <div class="container position-relative">

            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3 col-7">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ route('client.home')}}">
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
                                <a  href="{{ route('client.home') }}"  class="menu-item-link"><span >Home</span></a>
                            </li>
                            <li class="position-static">
                                <a class="menu-item-link" href="{{ route('shop_all')}}"><span>Shop</span></a>
                                <ul class="sub-menu sub-menu-mega">
                                    <li class="mega-menu-item">
                                        <ul>
                                            <li class="mega-menu-item-title">Product Types</li>
                                            <li><a class="sub-item-link" href="{{ route('product-simple') }}"><span>Product Simple</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('product-grouped') }}"><span>Product Grouped</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('product-affiliate') }}"><span>Product Affiliate</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <ul>
                                            <li class="mega-menu-item-title">Others</li>
                                            <li><a class="sub-item-link" href="{{ route('cart') }}"><span>Cart</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('wishlist') }}"><span>Wishlist</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('checkout') }}"><span>Checkout</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('order-tracking') }}"><span>Order Tracking</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="{{ route('client.home')}}">
                                                    <img src="assets/images/product/featured-product-01.png" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="{{ route('client.home')}}">
                                                    <img src="assets/images/product/featured-product-01.png" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('client.home')}}"><span>Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a class="sub-item-link" href="{{ route('about') }}"><span>About</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('our-chef') }}"><span>Our Chef</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('faq') }}"><span>FAQs</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('pricing-plan') }}"><span>Pricing Plans</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('coming-soon') }}"><span>Coming Soon</span></a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('client.home')}}"><span>Blog</span></a>
                                <ul class="sub-menu">
                                    <li><a class="sub-item-link" href="{{ route('blog-detail') }}"><span>Blog Details</span></a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('contact') }}"><span>Contact</span></a></li>
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
                            <!-- header-primary-menu d-flex justify-content-center -->
                            <div class="header-meta__action d-flex justify-content-end">
                            @auth
                            <li >
                                <a  class=" action" href="{{ route('client.profile', ['userid' => Auth::user()->user_id]) }}">Profile</a>
                            </li>
                            <li >
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a  class="action" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            @endauth
                            @guest

                            <li >
                            <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a  class="action" href="{{ route('login') }}">Login</a>
                            </li>

                            @endguest
                            </div>
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
            <form action="{{ route('search') }}" method="GET">
                <input class="search-popup__field border-0 border-bottom bg-transparent text-white w-100 tra py-3" type="text" placeholder="Search…">
                <button class="search-popup__icon text-white border-0 bg-transparent position-absolute top-50 end-0 translate-middle-y"><i class="lastudioicon-zoom-1"></i></button>
            </form>
        </div>
        <button class="search-popup__close position-absolute top-0 end-0 m-8 p-3 lh-1 border-0 text-white fs-4"><i class="lastudioicon-e-remove"></i></button>
    </div>
    <!-- Search End -->

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
 
    <!-- Slider Section Strat -->
    <div class="slider-section slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01" style="background-image: url(assets/images/slider/slider-01.jpg);">
                    <div class="container">

                        <!-- Slider Content Start -->
                        <div class="slider-content text-center mx-auto">
                            <img class="slider-content__shape" width="95" height="108" src="assets/images/slider/shape-01.png" alt="Shape">
                            <h1 class="slider-content__title text-white">Bring The Best Experience </h1>
                            <a class="slider-content__btn btn btn-primary btn-hover-black" href="single-product.html">Order Now </a>
                        </div>
                        <!-- Slider Content Start -->

                    </div>
                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01" style="background-image: url(assets/images/slider/slider-02.jpg);">
                    <div class="container">

                        <!-- Slider Content Start -->
                        <div class="slider-content text-center custom-ms-01">
                            <img class="slider-content__shape" width="95" height="62" src="assets/images/slider/shape-02.png" alt="Shape">
                            <h1 class="slider-content__title text-white">Taste That Lasts Forever </h1>
                            <a class="slider-content__btn btn btn-primary btn-hover-black" href="single-product.html">Order Now </a>
                        </div>
                        <!-- Slider Content Start -->

                    </div>
                </div>
                <!-- Single Slider End -->

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider Section End -->

    <div class="section-padding-01">
        

<div class="container">
    <!-- Section Title Strat -->
    <div class="section-title text-center max-width-720 mx-auto">
        <h2 class="section-title__title">Products suitable for health</h2>
        <p>We always bring the healthiest dishes</p>
    </div>
    <!-- Section Title End -->

    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 mb-n50">
                <div class="col mb-50">
                    <!-- Product Item Start -->
                    <div class="product-item text-center">
                        <div class="product-item__badge">Hot</div>
                        <div class="product-item__image border w-100">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-8-500x625.jpg" alt="Product"></a>
                            <ul class="product-item__meta">
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-item__content pt-5">
                            <h5 class="product-item__title"><a href="single-product.html">Brownie</a></h5>
                            <span class="product-item__price">$4.99</span>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
                <div class="col mb-50">
                    <!-- Product Item Start -->
                    <div class="product-item text-center">
                        <div class="product-item__badge d-none">@@badge</div>
                        <div class="product-item__image border w-100">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-7-500x625.jpg" alt="Product"></a>
                            <ul class="product-item__meta">
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-item__content pt-5">
                            <h5 class="product-item__title"><a href="single-product.html">Red Velvet</a></h5>
                            <span class="product-item__price">$5.00</span>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
                <div class="col mb-50">
                    <!-- Product Item Start -->
                    <div class="product-item text-center">
                        <div class="product-item__badge d-none">@@badge</div>
                        <div class="product-item__image border w-100">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-6-500x625.jpg" alt="Product"></a>
                            <ul class="product-item__meta">
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-item__content pt-5">
                            <h5 class="product-item__title"><a href="single-product.html">Cream Muffin</a></h5>
                            <span class="product-item__price">$7.55</span>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
                <div class="col mb-50">
                    <!-- Product Item Start -->
                    <div class="product-item text-center">
                        <div class="product-item__badge d-none">@@badge</div>
                        <div class="product-item__image border w-100">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-5-500x625.jpg" alt="Product"></a>
                            <ul class="product-item__meta">
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                </li>
                                <li class="product-item__meta-action">
                                    <a class="shadow-1 labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-item__content pt-5">
                            <h5 class="product-item__title"><a href="single-product.html">Macaron Cake</a></h5>
                            <span class="product-item__price">$9.44</span>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>

            </div>
        </div>

    </div>

</div>

    <!-- Product Section Strat -->
    <div class="section-padding-01" style="padding-bottom: 0px !important;">
        <div class="container">

            <!-- Section Title Strat -->
            <div class="section-title text-center max-width-720 mx-auto">
                <h2 class="section-title__title">Most recently purchased product</h2>
            </div>
            <!-- Section Title End -->

            <div class="row g-6 gx-lg-10">
                <div class="col-lg-4 col-md-6">
                    <!-- Product Item Start -->
                    <div class="product-item border text-center">
                        <div class="product-item__badge">Hot</div>
                        <div class="product-item__image">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-1.jpg" alt="Product"></a>
                            <ul class="product-item__meta meta-middle">
                                <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                            </ul>
                        </div>
                        <div class="product-item__content pb-3">
                            <h5 class="product-item__title"><a href="single-product.html">Italian Loaf</a></h5>
                            <span class="product-item__price fs-2">$4.99</span>
                            <a href="single-product.html" class="product-item__arrow"><img width="40" height="15" src="assets/images/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Product Item Start -->
                    <div class="product-item border text-center">
                        <div class="d-none">Hot</div>
                        <div class="product-item__image">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-2.jpg" alt="Product"></a>
                            <ul class="product-item__meta meta-middle">
                                <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                            </ul>
                        </div>
                        <div class="product-item__content pb-3">
                            <h5 class="product-item__title"><a href="single-product.html">Croissant Italy Cake</a></h5>
                            <span class="product-item__price fs-2">$5.00</span>
                            <a href="single-product.html" class="product-item__arrow"><img width="40" height="15" src="assets/images/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Product Item Start -->
                    <div class="product-item border text-center">
                        <div class="d-none">Hot</div>
                        <div class="product-item__image">
                            <a href="single-product.html"><img width="350" height="350" src="assets/images/product/product-3.jpg" alt="Product"></a>
                            <ul class="product-item__meta meta-middle">
                                <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                            </ul>
                        </div>
                        <div class="product-item__content pb-3">
                            <h5 class="product-item__title"><a href="single-product.html">Chocolate Muffin</a></h5>
                            <span class="product-item__price fs-2">$7.55</span>
                            <a href="single-product.html" class="product-item__arrow"><img width="40" height="15" src="assets/images/arrow.svg" alt="arrow"></a>
                        </div>
                    </div>
                    <!-- Product Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Product Section End -->
</div>
    <!-- Product Section Start -->
    <div class="section-padding-03 custom-container-four" >
        <div class="product-row">
            <div class="product-wrapper pe-md-5 pe-lg-6 pe-xl-8 pe-xxl-11 order-md-1 order-2">
                <!-- Section Title Strat -->
                <div class="section-title-05">
                    <h5 class="section-title-05__title"><span>Promotional Products</span></h5>
                    <a href="shop.html" class="read-more"><span>show more</span><i class="lastudioicon lastudioicon-right-arrow"></i></a>
                </div>
                <!-- Section Title End -->

                <div class="product-active-two">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <!-- swiper-slide start -->
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-9-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Raisin Bread</a></h5>
                                        <span class="product-item__price">$4.99</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-15-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Poppy Roll</a></h5>
                                        <span class="product-item__price">$5.00</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-16-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Wheat Loaf</a></h5>
                                        <span class="product-item__price">$7.55</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-17-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Corn Ciabatta</a></h5>
                                        <span class="product-item__price">$9.44</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- swiper-slide end-->

                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                </div>

            </div>
            <div class="boxbanner-wrapper order-md-2 order-1">
                <!-- Ad Banner Start -->
                <a href="single-product.html" class="boxbanner-bg boxbanner" data-bg-image="assets/images/banner/add-banner.jpg">
                    <span class="boxbanner-subtitle">only buy in stores</span>
                    <span class="boxbanner-title">Discount</span>
                    <span class="boxbanner-discount">50%</span>
                    <div class="boxbanner-btn-area">
                        <span class="boxbanner-btn">Store Location <i class="lastudioicon lastudioicon-right-arrow"></i></span>
                    </div>
                </a>
                <!-- Ad Banner End -->
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Product Section Start -->
    <div class="section-padding-03 custom-container-four pt-0">
        <div class="product-row">
            <div class="product-wrapper ps-md-5 ps-lg-6 ps-xl-8 ps-xxl-11 order-2 ">
                <!-- Section Title Strat -->
                <div class="section-title-05">
                    <h5 class="section-title-05__title"><span>What’s Hot</span></h5>
                    <a href="shop.html" class="read-more"><span>show more</span><i class="lastudioicon lastudioicon-right-arrow"></i></a>
                </div>
                <!-- Section Title End -->

                <div class="product-active-three">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <!-- swiper-slide start -->
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-12-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Raisin Bread</a></h5>
                                        <span class="product-item__price">$4.99</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-13-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Poppy Bun</a></h5>
                                        <span class="product-item__price">$5.00</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-11-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Olivetta Bread</a></h5>
                                        <span class="product-item__price">$7.55</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-05 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="250" height="250" src="assets/images/product/product-17-500x625.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Corn Ciabatta</a></h5>
                                        <span class="product-item__price">$9.44</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to compare" aria-label="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                    </ul>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- swiper-slide end-->

                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                </div>

            </div>
            <div class="boxbanner-wrapper order-1">
                <!-- Ad Banner Start -->
                <a href="single-product.html" class="boxbanner-bg boxbanner" data-bg-image="assets/images/banner/add-banner-two.jpg">
                    <div class="boxbanner-two">
                        <span class="boxbanner-title">a new cookie</span>
                        <span class="boxbanner-discount-two">from only 4$</span>
                    </div>
                    <div class="boxbanner-btn-area">
                        <span class="boxbanner-btn">Store Location <i class="lastudioicon lastudioicon-right-arrow"></i></span>
                    </div>
                </a>
                <!-- Ad Banner End -->
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Product Deal Section Start -->
    <div class="custom-container-four container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Strat -->
                <div class="section-title-05">
                    <h5 class="section-title-05__title"><span>Seasonal Products</span></h5>
                    <a href="shop.html" class="read-more"><span>show more</span><i class="lastudioicon lastudioicon-right-arrow"></i></a>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-12">
                <div class="product-active-four mt-4">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <!-- swiper-slide start -->
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-06 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="350" height="350" src="assets/images/product/m5-prod1.jpg" alt="Product"></a>
                                        <ul class="product-item__meta meta-middle">
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">White Chocolate Rasberry</a></h5>
                                        <span class="product-item__price">$4.99</span>
                                        <p class="product-item__text">Aliqua id fugiat nostrud irure ex duis ea quis id…</p>
                                        <a href="#/" class="product-item__btn" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-06 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="350" height="350" src="assets/images/product/m5-prod2.jpg" alt="Product"></a>
                                        <ul class="product-item__meta meta-middle">
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Caramel Apple</a></h5>
                                        <span class="product-item__price">$5.00</span>
                                        <p class="product-item__text">Aliqua id fugiat nostrud irure ex duis ea quis id…</p>
                                        <a href="#/" class="product-item__btn" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-06 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="350" height="350" src="assets/images/product/m5-prod3.jpg" alt="Product"></a>
                                        <ul class="product-item__meta meta-middle">
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">German Chocolate Cake</a></h5>
                                        <span class="product-item__price">$7.55</span>
                                        <p class="product-item__text">Aliqua id fugiat nostrud irure ex duis ea quis id…</p>
                                        <a href="#/" class="product-item__btn" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item product-item-06 border text-center">
                                    <div class="product-item__image">
                                        <a href="single-product.html"><img width="350" height="350" src="assets/images/product/m5-prod2.jpg" alt="Product"></a>
                                        <ul class="product-item__meta meta-middle">
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
                                            </li>
                                            <li class="product-item__meta-action">
                                                <a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Caramel Apple</a></h5>
                                        <span class="product-item__price">$9.44</span>
                                        <p class="product-item__text">Aliqua id fugiat nostrud irure ex duis ea quis id…</p>
                                        <a href="#/" class="product-item__btn" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- swiper-slide end-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Deal Section End -->


    <!-- Banner Section Strat -->
    <div class="banner-section pt-5" >
        <div class="row row-cols-1 row-cols-md-2 g-0">
            <div class="col">
                <!-- Banner Item Strat -->
                <a href="shop.html" class="banner-item" style="background-image: url(assets/images/banner-01.jpg);">
                    <div class="banner-item__content">
                        <h3 class="banner-item__title text-white">Cupcake</h3>
                        <span class="banner-item__btn text-white">Shop Now</span>
                    </div>
                    <div class="banner-item__badge text-white">01.</div>
                </a>
                <!-- Banner Item End -->
            </div>
            <div class="col">
                <!-- Banner Item Strat -->
                <a href="shop.html" class="banner-item" style="background-image: url(assets/images/banner-02.jpg);">
                    <div class="banner-item__content">
                        <h3 class="banner-item__title text-white">Pastry</h3>
                        <span class="banner-item__btn text-white">Shop Now</span>
                    </div>
                    <div class="banner-item__badge text-white">01.</div>
                </a>
                <!-- Banner Item End -->
            </div>
            <div class="col">
                <!-- Banner Item Strat -->
                <a href="shop.html" class="banner-item" style="background-image: url(assets/images/banner-03.jpg);">
                    <div class="banner-item__content">
                        <h3 class="banner-item__title text-white">Muffin</h3>
                        <span class="banner-item__btn text-white">Shop Now</span>
                    </div>
                    <div class="banner-item__badge text-white">01.</div>
                </a>
                <!-- Banner Item End -->
            </div>
            <div class="col">
                <!-- Banner Item Strat -->
                <a href="shop.html" class="banner-item" style="background-image: url(assets/images/banner-04.jpg);">
                    <div class="banner-item__content">
                        <h3 class="banner-item__title text-white">Waffle</h3>
                        <span class="banner-item__btn text-white">Shop Now</span>
                    </div>
                    <div class="banner-item__badge text-white">01.</div>
                </a>
                <!-- Banner Item End -->
            </div>
        </div>
    </div><br>
    <!-- Banner Section End -->
    <!-- Testimonial Section Strat -->
    <div class="customer-review" data-bg-image="assets/images/bg/tesmonial-bg-2.jpg">
        <h5 class="customer-review-title">Customer reviews</h5>
        <div class="customer-review-mark">
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="20" fill="none" viewBox="0 0 62 20">
                <path fill="#C2943A" d="M6 4l1.347 4.146h4.36L8.18 10.708l1.347 4.146L6 12.292l-3.527 2.562 1.347-4.146L.294 8.146h4.359L6 4zM31 0l2.245 6.91h7.266l-5.878 4.27 2.245 6.91L31 13.82l-5.878 4.27 2.245-6.91-5.878-4.27h7.266L31 0zM56 4l1.347 4.146h4.36l-3.527 2.562 1.347 4.146L56 12.292l-3.527 2.562 1.347-4.146-3.526-2.562h4.359L56 4z" />
            </svg>
        </div>
    </div>
    <div class="testimonial-section">

        <!-- Testimonial Active Strat -->
        <div class="testimonial-active-two">
            <div class="swiper">
                <div class="swiper-wrapper">

                    <!-- swiper-slide start -->
                    <!-- Testimonial Item Strat -->
                    <div class="swiper-slide">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. I don't think I have ever eaten a better cake. I will be back again</p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src="assets/images/avatar/testimoial-1.png" alt="Author">
                            </div>
                            <span class="testimonial-two_name">Esther Howard</span>
                            <span class="testimonial-two_position">New Yourk</span>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                    <!-- Testimonial Item Strat -->
                    <div class="swiper-slide">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. I don't think I have ever eaten a better cake. I will be back again</p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src="assets/images/avatar/testimoial-2.png" alt="Author">
                            </div>
                            <span class="testimonial-two_name">Elanor Pera</span>
                            <span class="testimonial-two_position">Canada</span>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                    <!-- Testimonial Item Strat -->
                    <div class="swiper-slide">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. I don't think I have ever eaten a better cake. I will be back again</p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src="assets/images/avatar/testimoial-3.png" alt="Author">
                            </div>
                            <span class="testimonial-two_name">Krishna Barbe</span>
                            <span class="testimonial-two_position">Singapore</span>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                    <!-- Testimonial Item Strat -->
                    <div class="swiper-slide">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. I don't think I have ever eaten a better cake. I will be back again</p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src="assets/images/avatar/testimoial-2.png" alt="Author">
                            </div>
                            <span class="testimonial-two_name">Esther Howard</span>
                            <span class="testimonial-two_position">Dubai</span>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                    <!-- swiper-slide end-->

                </div>
            </div>
        </div>
        <!-- Testimonial Active End -->

    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Post Section Start -->
    <div class="section-padding-03 custom-container-four container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Strat -->
                <div class="section-title-05">
                    <h5 class="section-title-05__title"><span>The Most Popular Blogs</span></h5>
                    <a href="blog-no-sidebar.html" class="read-more"><span>show more</span><i class="lastudioicon lastudioicon-right-arrow"></i></a>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-12">
                <div class="blog-active mt-4">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <!-- swiper-slide start -->
                            <div class="swiper-slide">
                                <!-- Blog Item Strat -->
                                <div class="blog-itemtwo">
                                    <a href="blog-details.html" class="blog-itemtwo__thumbnail">
                                        <img src="assets/images/blog/blog-5-1.jpg" alt="Blog">
                                    </a>
                                    <div class="blog-itemtwo__content">
                                        <div class="blog-itemtwo__meta">
                                            <div class="blog-itemtwo__meta-action">August 14, 2022</div>
                                            <div class="blog-itemtwo__meta-action"><a href="#"> - Bakery</a></div>
                                        </div>
                                        <h3 class="blog-itemtwo__title"><a href="blog-details.html">Things you should know about cakes</a></h3>
                                        <p class="blog-itemtwo__text">Things you should know about cakes Donec sed erat ut magna suscipit…</p>
                                        <div class="blog-btn-wrap">
                                            <a href="blog-details.html" class="blog-itemtwo__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 44 16">
                                                    <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Blog Item Strat -->
                                <div class="blog-itemtwo">
                                    <a href="blog-details.html" class="blog-itemtwo__thumbnail">
                                        <img src="assets/images/blog/blog-5-2.jpg" alt="Blog">
                                    </a>
                                    <div class="blog-itemtwo__content">
                                        <div class="blog-itemtwo__meta">
                                            <div class="blog-itemtwo__meta-action">August 14, 2022</div>
                                            <div class="blog-itemtwo__meta-action"><a href="#"> - Bakery</a></div>
                                        </div>
                                        <h3 class="blog-itemtwo__title"><a href="blog-details.html">Things you should know about cakes</a></h3>
                                        <p class="blog-itemtwo__text">Things you should know about cakes Donec sed erat ut magna suscipit…</p>
                                        <div class="blog-btn-wrap">
                                            <a href="blog-details.html" class="blog-itemtwo__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 44 16">
                                                    <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Blog Item Strat -->
                                <div class="blog-itemtwo">
                                    <a href="blog-details.html" class="blog-itemtwo__thumbnail">
                                        <img src="assets/images/blog/blog-5-3.jpg" alt="Blog">
                                    </a>
                                    <div class="blog-itemtwo__content">
                                        <div class="blog-itemtwo__meta">
                                            <div class="blog-itemtwo__meta-action">August 14, 2022</div>
                                            <div class="blog-itemtwo__meta-action"><a href="#"> - Bakery</a></div>
                                        </div>
                                        <h3 class="blog-itemtwo__title"><a href="blog-details.html">Things you should know about cakes</a></h3>
                                        <p class="blog-itemtwo__text">Things you should know about cakes Donec sed erat ut magna suscipit…</p>
                                        <div class="blog-btn-wrap">
                                            <a href="blog-details.html" class="blog-itemtwo__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 44 16">
                                                    <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Item End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Blog Item Strat -->
                                <div class="blog-itemtwo">
                                    <a href="blog-details.html" class="blog-itemtwo__thumbnail">
                                        <img src="assets/images/blog/blog-5-2.jpg" alt="Blog">
                                    </a>
                                    <div class="blog-itemtwo__content">
                                        <div class="blog-itemtwo__meta">
                                            <div class="blog-itemtwo__meta-action">August 14, 2022</div>
                                            <div class="blog-itemtwo__meta-action"><a href="#"> - Bakery</a></div>
                                        </div>
                                        <h3 class="blog-itemtwo__title"><a href="blog-details.html">Things you should know about cakes</a></h3>
                                        <p class="blog-itemtwo__text">Things you should know about cakes Donec sed erat ut magna suscipit…</p>
                                        <div class="blog-btn-wrap">
                                            <a href="blog-details.html" class="blog-itemtwo__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 44 16">
                                                    <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Item End -->
                            </div>
                            <!-- swiper-slide end-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Post Section End -->

     <!-- Newsletter Section Strat -->
     <div class="newsletter-section" style="background-image: url(assets/images/newsletter-bg.jpg);">
        <div class="container">

            <!-- Newsletter Section Strat -->
            <div class="newsletter text-center">
                <h2 class="newsletter__title text-white">Stay in touch & get 10% off</h2>

                <div class="newsletter__form">
                    <form action="#">
                        <input class="newsletter__field" type="text" placeholder="Your email address">
                        <button class="newsletter__btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <!-- Newsletter Section End -->

        </div>
    </div>
    <!-- Newsletter Section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->

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
                                <a class="logo-dark" href="{{ route('client.home')}}"><img src="assets/images/logo.svg" alt="Logo"></a>
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
                                    <li><a href="{{ route('category')}}">Sweet Breads</a></li>
                                    <li><a href="{{ route('category')}}">Baked Goods</a></li>
                                    <li><a href="{{ route('category')}}">Cakes</a></li>
                                    <li><a href="{{ route('category')}}">Cheesecakes</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('delivery')}}">Delivery</a></li>
                                    <li><a href="{{ route('checkout')}}">Payment</a></li>
                                    <li><a href="{{ route('exchange-return-policy')}}">Exchange & Return Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('about')}}">About Us</a></li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{ route('blog-detail')}}">Latest Post</a></li>
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

    <div class="quickview-product-modal modal fade" id="exampleProductModal">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="container">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="lastudioicon lastudioicon-e-remove"></i>
                    </button>
                    <div class="modal-body">
                        <!-- Single Product Top Area Start -->
                        <div class="row">
                            <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">

                                <!-- Product Details Image Start -->
                                <div class="product-details-img d-flex overflow-hidden flex-row">

                                    <!-- Single Product Image Start -->
                                    <div class="single-product-vertical-tab swiper-container order-2">

                                        <div class="swiper-wrapper">
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-1.png" alt="Product">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-2.png" alt="Product">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-3.png" alt="Product">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-4.png" alt="Product">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-5.png" alt="Product">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="assets/images/product/product-7-6.png" alt="Product">
                                            </a>
                                        </div>

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

                                    </div>
                                    <!-- Product Head End -->

                                    <!-- Description Start -->
                                    <p class="desc-content">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
                                    <!-- Description End -->

                                    <!-- Product Coler Variation Start -->
                                    <div class="product-color mb-2">
                                        <label for="colorBy">Color</label>
                                        <div class="select-wrapper">
                                            <select name="color" id="colorBy">
                                                <option value="manual">Chose an option</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="black">Black</option>
                                                <option value="yellow">Yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Product Coler Variation End -->

                                    <!-- Product Size Start -->
                                    <div class="product-size mb-5">
                                        <label for="sizeBy">Size</label>
                                        <div class="select-wrapper">
                                            <select name="size" id="sizeBy">
                                                <option value="manual">Chose an option</option>
                                                <option value="large">Large</option>
                                                <option value="medium">Medium</option>
                                                <option value="small">Small</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Product Size End -->

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
                                                    <a class="btn btn-dark btn-hover-primary" href="cart.html">Add to cart</a>
                                                </div>
                                            </div>
                                            <!-- Cart Button End -->
                                        </li>
                                        <li>
                                            <!-- Action Button Start -->
                                            <div class="actions">
                                                <a href="compare.html" title="Compare" class="action compare"><i class="lastudioicon-heart-2"></i></a>
                                                <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
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
                        <!-- Single Product Top Area End -->
                    </div>
                </div>
            </div>
        </div>
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
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>
