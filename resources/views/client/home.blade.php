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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/lastudioicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/dliconoutline.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightgallery-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
            <form action="" method="GET">
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
    <div class="slider-section-seven slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-1.jpg);">
                    <div class="image movex">
                        <img class="img-center" src="assets/images/slider/slider-7-01.png" alt="Slider-Image">
                    </div>
                    <div class="slider-content-07 container">
                        <div class="row align-items-end">
                            <div class="col-12 col-sm-6 text-center text-sm-end pe-lg-16">
                                <h2 class="slider-content-07__title">Bread that <br>makes Friends</h2>
                                <a class="slider-content-07__btn btn slider-btn-01" href="shop.html">Discover</a>
                            </div>
                            <div class="col-12 col-sm-6">
                                <p class="slider-content-07__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-2.jpg);">
                    <div class="image movex">
                        <img class="img-center" src="assets/images/slider/slider-7-02.png" alt="Slider-Image">
                    </div>
                    <div class="slider-content-07 container">
                        <div class="row align-items-end">
                            <div class="col-12 col-sm-6 text-center text-sm-end pe-lg-16">
                                <h2 class="slider-content-07__title">Quality is our <br>Recipe</h2>
                                <a class="slider-content-07__btn btn slider-btn-01" href="shop.html">Discover</a>
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <p class="slider-content-07__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-3.jpg);">
                    <div class="image movex">
                        <img class="img-center" src="assets/images/slider/slider-7-03.png" alt="Slider-Image">
                    </div>
                    <div class="slider-content-07 container">
                        <div class="row align-items-end">
                            <div class="col-12 col-sm-6 text-center text-sm-end pe-lg-16">
                                <h2 class="slider-content-07__title">Love from <br>The oven</h2>
                                <a class="slider-content-07__btn btn slider-btn-01" href="shop.html">Discover</a>
                            </div>
                            <div class="col-12 col-sm-6">
                                <p class="slider-content-07__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->
            </div>
            <div class="swiper-pagination container"></div>
        </div>
    </div>
    <!-- Slider Section End -->

    <div class="section-padding-01" >


<div class="container" style="padding-bottom: 50px !important;">
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
    <div class="section-padding-01" style="padding-bottom: 25px !important;">
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
    <div class="category-section pt-4">
        <div class="container">

            <!-- Category Box Strat -->
            <div class="category-box">
                <div class="row row-cols-4">
                    <div class="col">

                        <!-- Category Box Item Strat -->
                        <div class="category-box-item">
                            <div class="category-box-item__wrapper text-center">
                                <div class="category-box-item__icon">
                                    <a href="shop.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" viewBox="0 0 70 70">
                                            <path fill="currentColor" d="M57.504 26.92l-1.328 2.656a6.562 6.562 0 0 0-4.77 2.894 6.562 6.562 0 0 0-10.937 0 6.6 6.6 0 0 0-1.779-1.791l3.482-1.024a29.288 29.288 0 0 0 16.527-12.566 14.692 14.692 0 0 1-1.195 9.832zM47.14 66.72h-6.634l1.056-30.588h-.007c0-.013.008-.024.008-.037a4.375 4.375 0 1 1 8.75-.03L47.14 66.718zM19.688 36.063a4.375 4.375 0 0 1 8.75.03c0 .014.006.025.007.038h-.008l1.056 30.588h-6.634l-3.172-30.656zm10.937.03a4.375 4.375 0 1 1 8.75 0L38.318 66.72h-6.636l-1.057-30.625zm-9.844-30.04a2.775 2.775 0 0 1 4.734-1.96l1.055 1.055a1.094 1.094 0 0 0 1.547 0l1.055-1.055a2.774 2.774 0 0 1 4.734 1.96 4.766 4.766 0 0 1-1.663 3.621l-4.9 4.198-4.898-4.199a4.76 4.76 0 0 1-1.664-3.62zm2.735 7.419l3.116 2.67a1.094 1.094 0 0 0 1.422 0l5.61-4.812c.109-.093.207-.197.31-.296l2.325-.317a8.65 8.65 0 0 0 7.123-6.171 14.608 14.608 0 0 1 3.576 8.841 11.084 11.084 0 0 1-6.578 3.14l-18.721 2.078c-.607.071-1.209.188-1.798.35a8.946 8.946 0 0 1 3.615-5.483zm-1.58 7.31l18.72-2.079A13.302 13.302 0 0 0 52.313 7.714l1.71 1.496a14.748 14.748 0 0 1 3.755 5.095 27.082 27.082 0 0 1-16.223 13.258L34.8 29.55a6.556 6.556 0 0 0-5.27 2.92 6.562 6.562 0 0 0-10.937 0 6.563 6.563 0 0 0-5.403-2.939 9.89 9.89 0 0 1 8.745-8.75zM14.76 60.86L8.75 35.97a4.375 4.375 0 1 1 8.75.123c0 .04.019.072.022.11h-.016l3.137 30.335a7.62 7.62 0 0 1-5.884-5.68zm40.482 0a7.617 7.617 0 0 1-5.884 5.687L52.5 36.203h-.016c0-.038.021-.071.021-.11a4.375 4.375 0 1 1 8.75-.122L55.241 60.86zM13.125 15.313l2.539-1.27a3.324 3.324 0 0 0 1.836-2.97 2.322 2.322 0 0 0-3.208-2.146 2.32 2.32 0 0 0-.752.503l-.415.414-.415-.414a2.32 2.32 0 0 0-3.96 1.642 3.323 3.323 0 0 0 1.838 2.973l2.537 1.268z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="category-box-item__content">
                                    <h3 class="category-box-item__title"><a href="shop.html">Sweet Breads</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Category Box Item End -->

                    </div>
                    <div class="col">

                        <!-- Category Box Item Strat -->
                        <div class="category-box-item">
                            <div class="category-box-item__wrapper text-center">
                                <div class="category-box-item__icon">
                                    <a href="shop.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" viewBox="0 0 70 70">
                                            <g fill="currentColor">
                                                <path d="M1.201 45.597a4.1 4.1 0 0 0 4.513.872 31.188 31.188 0 0 0 4.34 7.676l-1.119 1.119a4.106 4.106 0 0 0 0 5.8 4.099 4.099 0 0 0 5.8 0l1.12-1.12a31.188 31.188 0 0 0 7.677 4.342 4.1 4.1 0 0 0 6.671 4.512L35 64.001l4.796 4.796a4.1 4.1 0 0 0 6.672-4.512 31.186 31.186 0 0 0 7.677-4.341l1.12 1.118a4.099 4.099 0 0 0 5.8 0 4.106 4.106 0 0 0 0-5.799l-1.12-1.12a31.19 31.19 0 0 0 4.34-7.675 4.1 4.1 0 0 0 4.513-.872 4.1 4.1 0 0 0 0-5.801L64.001 35l4.796-4.796a4.1 4.1 0 0 0 0-5.801 4.1 4.1 0 0 0-4.512-.873 31.19 31.19 0 0 0-4.34-7.675l1.118-1.12a4.106 4.106 0 0 0 0-5.799 4.099 4.099 0 0 0-5.8 0l-1.119 1.119a31.185 31.185 0 0 0-7.677-4.342 4.1 4.1 0 0 0-6.671-4.512l-4.797 4.797-4.796-4.796a4.1 4.1 0 0 0-6.671 4.511 31.184 31.184 0 0 0-7.678 4.342l-1.119-1.119a4.099 4.099 0 0 0-5.8 0 4.106 4.106 0 0 0 0 5.8l1.119 1.119a31.187 31.187 0 0 0-4.34 7.675 4.1 4.1 0 0 0-4.513.873 4.1 4.1 0 0 0 0 5.8L5.997 35l-4.796 4.795a4.1 4.1 0 0 0 0 5.802zm6.75-.95l3.846-3.847 5.8 5.8-5.592 5.594a28.451 28.451 0 0 1-4.054-7.547zm17.4 17.401a28.457 28.457 0 0 1-7.546-4.054l5.594-5.593 5.8 5.8-3.847 3.847zM40.8 58.202l5.8-5.8 5.594 5.592a28.453 28.453 0 0 1-7.546 4.054L40.8 58.202zM52.401 46.6l5.8-5.8 3.847 3.847a28.455 28.455 0 0 1-4.054 7.547L52.4 46.6zm9.647-21.248L58.2 29.2l-5.8-5.8 5.593-5.594a28.451 28.451 0 0 1 4.054 7.546zm-17.402-17.4c2.71.964 5.24 2.323 7.547 4.053L46.6 17.598l-5.801-5.8 3.847-3.847zm-19.294 0l3.847 3.846-5.8 5.8-5.594-5.593a28.453 28.453 0 0 1 7.547-4.054zm-7.754 15.447l-5.8 5.8-3.847-3.847a28.454 28.454 0 0 1 4.054-7.547l5.593 5.594zM3.135 41.73l5.762-5.763c.534-.534.534-1.4 0-1.933L3.135 28.27a1.367 1.367 0 0 1 1.933-1.934L10.83 32.1c.535.535 1.4.533 1.934 0l7.734-7.734c.534-.534.534-1.4 0-1.933l-9.63-9.63a1.366 1.366 0 1 1 1.933-1.933l9.631 9.628c.534.534 1.4.534 1.934 0l7.734-7.734c.533-.533.533-1.4 0-1.933l-5.764-5.763a1.367 1.367 0 0 1 1.934-1.933l5.762 5.763c.534.534 1.4.534 1.934 0l5.762-5.763a1.367 1.367 0 0 1 1.935 1.933l-5.764 5.763a1.368 1.368 0 0 0 0 1.933l7.734 7.734a1.366 1.366 0 0 0 1.933 0l9.63-9.629a1.366 1.366 0 1 1 1.933 1.934l-9.629 9.63a1.368 1.368 0 0 0 0 1.933l7.734 7.734c.534.534 1.4.534 1.934 0l5.762-5.764a1.367 1.367 0 0 1 1.933 1.934l-5.762 5.763a1.367 1.367 0 0 0 0 1.934l5.762 5.762a1.367 1.367 0 0 1-1.933 1.934L59.168 37.9a1.366 1.366 0 0 0-1.934 0L49.5 45.633a1.368 1.368 0 0 0 0 1.934l9.63 9.63a1.366 1.366 0 1 1-1.933 1.933l-9.63-9.629a1.367 1.367 0 0 0-1.934 0l-7.734 7.734a1.368 1.368 0 0 0 0 1.934l5.764 5.762a1.367 1.367 0 0 1-1.934 1.933l-5.763-5.763a1.367 1.367 0 0 0-1.934 0l-5.762 5.763a1.368 1.368 0 0 1-1.934-1.933l5.763-5.762c.534-.534.534-1.4 0-1.934l-7.733-7.734a1.367 1.367 0 0 0-1.934 0l-9.63 9.629a1.366 1.366 0 1 1-1.933-1.933l9.629-9.63c.534-.534.534-1.4 0-1.934L12.764 37.9a1.368 1.368 0 0 0-1.934 0l-5.762 5.764a1.367 1.367 0 0 1-1.933-1.934z"></path>
                                                <path d="M37.9 35.967l7.734 7.734c.534.533 1.4.534 1.933 0l7.734-7.734c.534-.534.534-1.4 0-1.934L47.567 26.3a1.368 1.368 0 0 0-1.933 0L37.9 34.033a1.367 1.367 0 0 0 0 1.934zm8.7-6.767l5.801 5.8-5.8 5.8-5.8-5.8 5.8-5.8zm-12.567 2.9c.534.534 1.4.534 1.934 0l7.734-7.734c.533-.533.534-1.4 0-1.933l-7.734-7.734a1.368 1.368 0 0 0-1.934 0L26.3 22.433a1.368 1.368 0 0 0 0 1.933l7.734 7.734zM35 17.6l5.8 5.8-5.8 5.8-5.8-5.8 5.8-5.801zM22.433 43.7c.534.534 1.4.535 1.934 0l7.734-7.733c.534-.534.534-1.4 0-1.934L24.367 26.3a1.368 1.368 0 0 0-1.934 0L14.7 34.033a1.368 1.368 0 0 0 0 1.934l7.734 7.734zm.967-14.5l5.8 5.8-5.8 5.8-5.8-5.8 5.8-5.8zM35 40.468a1.367 1.367 0 1 0 0-2.734 1.367 1.367 0 0 0 0 2.734zm5.431 1.896a1.367 1.367 0 0 0-1.933 1.933L40.8 46.6 35 52.401l-5.801-5.8 2.303-2.304a1.367 1.367 0 0 0-1.934-1.933l-3.27 3.27a1.368 1.368 0 0 0 0 1.933l7.734 7.734c.534.534 1.4.534 1.934 0l7.734-7.734c.533-.534.534-1.4 0-1.934l-3.27-3.27z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="category-box-item__content">
                                    <h3 class="category-box-item__title"><a href="shop.html">Cakes</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Category Box Item End -->

                    </div>
                    <div class="col">

                        <!-- Category Box Item Strat -->
                        <div class="category-box-item">
                            <div class="category-box-item__wrapper text-center">
                                <div class="category-box-item__icon">
                                    <a href="shop.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" viewBox="0 0 70 70">
                                            <path fill="currentColor" d="M15.876 14.643l.033.013c2.306.924 4.978-.182 5.956-2.466l.053-.124c1.396-3.259 4.465-5.284 8.01-5.284 3.546 0 6.616 2.025 8.011 5.284l.053.124c.979 2.284 3.65 3.39 5.957 2.466l.11-.044c3.291-1.319 6.894-.58 9.402 1.927 2.508 2.508 3.246 6.11 1.927 9.403l-.044.11c-.924 2.306.182 4.978 2.466 5.956l.124.052c3.26 1.396 5.284 4.466 5.284 8.011 0 3.546-2.025 6.616-5.284 8.011a4.62 4.62 0 0 0-2.43 6.043 12.21 12.21 0 0 0 4.463 5.4C66.438 52.94 70 44.245 70 35c0-9.349-3.64-18.138-10.251-24.749C53.139 3.641 44.349 0 34.999 0c-9.318 0-18.08 3.618-24.684 10.189a12.197 12.197 0 0 0 5.561 4.454z"></path>
                                            <path fill="currentColor" d="M51.729 55.728c-1.873-4.41.187-9.53 4.59-11.416 1.752-.75 2.798-2.335 2.798-4.24 0-1.906-1.046-3.49-2.797-4.24l-.123-.054a8.668 8.668 0 0 1-4.622-4.676 8.666 8.666 0 0 1-.038-6.575l.044-.11c.709-1.77.328-3.63-1.02-4.978-1.347-1.347-3.208-1.728-4.977-1.02l-.11.044a8.668 8.668 0 0 1-6.574-.037 8.667 8.667 0 0 1-4.678-4.622l-.053-.123c-.75-1.752-2.335-2.797-4.24-2.797-1.905 0-3.49 1.045-4.24 2.796l-.053.125a8.667 8.667 0 0 1-4.677 4.62 8.668 8.668 0 0 1-6.575.038l-.033-.013a16.26 16.26 0 0 1-6.828-5.134C2.647 19.469 0 27.031 0 35c0 9.349 3.64 18.138 10.251 24.749C16.861 66.359 25.651 70 35 70c8.044 0 15.672-2.697 21.855-7.66a16.28 16.28 0 0 1-5.126-6.612zM10.133 32.762l2.9-2.9 2.772 2.771-2.9 2.9-2.772-2.77zm4.157 16.352l-2.771-2.771 2.9-2.9 2.772 2.77-2.9 2.901zm9.367 9.367l-2.771-2.771 2.9-2.9 2.771 2.77-2.9 2.901zm13.58 1.386l-2.77-2.772 2.9-2.9 2.771 2.772-2.9 2.9zM35 47.03c-6.645 0-12.031-5.386-12.031-12.031 0-6.645 5.386-12.031 12.031-12.031 6.645 0 12.031 5.386 12.031 12.031 0 6.645-5.386 12.031-12.031 12.031z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="category-box-item__content">
                                    <h3 class="category-box-item__title"><a href="shop.html">Baked Goods</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Category Box Item End -->

                    </div>
                    <div class="col">

                        <!-- Category Box Item Strat -->
                        <div class="category-box-item">
                            <div class="category-box-item__wrapper text-center">
                                <div class="category-box-item__icon">
                                    <a href="shop.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" viewBox="0 0 70 70">
                                            <g fill="currentColor">
                                                <path d="M17.037 40.097c0-.52.031-1.034.078-1.54C9.883 36.45 4.533 31.683 4.533 26.14c0-1.073.031-2.931.086-3.102 1.648 4.082 7.822 7.332 15.03 8.491l3.632-5.8a14.289 14.289 0 0 1 2.9-3.337 16.144 16.144 0 0 1 3.733-2.348c1.657-.755 3.46-1.276 5.405-1.563a1.695 1.695 0 0 1-.327-.995c0-.934.778-1.711 1.71-1.711.934 0 1.712.777 1.712 1.71 0 .265-.063.521-.172.747.242-.008.475-.008.716-.008 3.795 0 7.776.801 11.656 2.318-.054-9.48-11.368-17.186-25.303-17.186-13.966 0-25.303 7.76-25.303 17.271L0 28.192c0 7.667 7.38 14.152 17.558 16.376a19.41 19.41 0 0 1-.52-4.47zM33.631 8.394c.933 0 1.71.778 1.71 1.711s-.777 1.71-1.71 1.71c-.933 0-1.71-.777-1.71-1.71 0-.933.77-1.71 1.71-1.71zm-6.687 5.832c.933 0 1.71.778 1.71 1.711s-.777 1.71-1.71 1.71c-.933 0-1.71-.777-1.71-1.71 0-.933.777-1.71 1.71-1.71zm-6.345-3.942c.933 0 1.71.777 1.71 1.71 0 .934-.777 1.711-1.71 1.711a1.726 1.726 0 0 1-1.711-1.71c0-.933.777-1.711 1.71-1.711zm-3.943 7.885c.933 0 1.71.777 1.71 1.71 0 .934-.777 1.711-1.71 1.711-.933 0-1.71-.777-1.71-1.71 0-.934.777-1.711 1.71-1.711zm-4.798-4.635c.933 0 1.711.778 1.711 1.711s-.778 1.71-1.71 1.71a1.725 1.725 0 0 1-1.711-1.71c0-.925.777-1.71 1.71-1.71z"></path>
                                                <path d="M55.87 25.774a36.63 36.63 0 0 0-5.24-2.73c-3.974-1.672-7.978-2.496-11.657-2.496-5.948 0-11.034 2.162-13.708 6.415l-3.056 4.876-.965 1.54c-1.088 1.742-1.687 3.686-1.835 5.746-.14 1.898.109 3.888.7 5.894 1.742 5.926 6.5 12.022 13.421 16.369 5.607 3.515 11.626 5.256 16.944 5.256 5.91 0 10.949-2.146 13.608-6.384.04-.062 3.896-6.213 4.036-6.43 5.054-8.064-.42-20.638-12.247-28.056zm-.131 18.273c0 .934-.778 1.711-1.711 1.711s-1.71-.778-1.71-1.71c0-.934.777-1.711 1.71-1.711.933 0 1.71.777 1.71 1.71zm-2.232-12.511c.933 0 1.71.777 1.71 1.71 0 .934-.777 1.711-1.71 1.711-.933 0-1.71-.777-1.71-1.71 0-.934.777-1.711 1.71-1.711zm-7.364 8.227c0 .933-.778 1.71-1.71 1.71a1.74 1.74 0 0 1-1.517-.917 1.74 1.74 0 0 1-.202-.793c0-.933.777-1.711 1.71-1.711.444 0 .848.171 1.151.459.35.31.568.754.568 1.252zm2.395-7.03c0 .933-.778 1.711-1.71 1.711a1.727 1.727 0 0 1-1.712-1.71c0-.934.778-1.712 1.711-1.712s1.71.778 1.71 1.711zm-8.227-6.166c.708 0 1.33.45 1.586 1.073.086.202.132.412.132.645 0 .933-.777 1.711-1.71 1.711a1.714 1.714 0 0 1-1.408-.754 1.653 1.653 0 0 1-.303-.964 1.714 1.714 0 0 1 1.703-1.711zm21.05 29.556c-3.982 6.353-15.498 6.307-24.814.46-4.704-2.956-8.328-7.054-10.24-11.206-.88-1.913-1.4-3.834-1.501-5.669-.11-2.06.31-4.004 1.353-5.669.396-.63 1.01-1.578 1.392-2.138.163-.24.287-.412.334-.443a7.04 7.04 0 0 0-.062.428c-.25 2.208.544 4.82 2.1 7.465.995 1.703 2.309 3.413 3.856 5.054a35.796 35.796 0 0 0 6.882 5.622c7.986 5.008 17.923 6.734 22.395 3.5 0-.009-1.12 1.687-1.695 2.596zm1.407-14.992c0 .934-.778 1.711-1.71 1.711a1.725 1.725 0 0 1-1.711-1.71c0-.934.777-1.711 1.71-1.711.933 0 1.711.777 1.711 1.71z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="category-box-item__content">
                                    <h3 class="category-box-item__title"><a href="shop.html">Cheesecakes</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Category Box Item End -->

                    </div>
                </div>
            </div>
            <!-- Category Box End -->

        </div>
    </div>
</div>
    <!-- Product Section Start -->
    <div class="section-padding-03 custom-container-four" style="padding-top: 0px !important;" >
        <div class="product-row">
            <div class="product-wrapper pe-md-5 pe-lg-6 pe-xl-8 pe-xxl-11 order-md-1 order-2">
                <!-- Section Title Strat -->
                <div class="section-title-05">
                    <h5 class="section-title-05__title"><span>Discount</span></h5>
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

    <!-- Counter Section Strat -->
    <div class="counter-section" style="background-image: url(assets/images/bg-01.jpg);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-4">
                    <!-- Counter Item Strat -->
                    <div class="counter-item text-center">
                        <span class="counter-item__label text-global-color-03"><span class="count scroll-counter" data-counter-time="1500">70</span>+</span>
                        <p class="counter-item__value text-secondary">Years</p>
                    </div>
                    <!-- Counter Item End -->
                </div>
                <div class="col-4">
                    <!-- Counter Item Strat -->
                    <div class="counter-item text-center">
                        <span class="counter-item__label text-global-color-03"><span class="count scroll-counter" data-counter-time="1500">10</span>K+</span>
                        <p class="counter-item__value text-secondary">Client</p>
                    </div>
                    <!-- Counter Item End -->
                </div>
                <div class="col-4">
                    <!-- Counter Item Strat -->
                    <div class="counter-item text-center">
                        <span class="counter-item__label text-global-color-03"><span class="count scroll-counter" data-counter-time="1500">500</span>+</span>
                        <p class="counter-item__value text-secondary">Cakes</p>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

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

    <!-- Call To Action Three Section Start -->
    <div class="bg-dark-two section-padding-03" data-bg-image="assets/images/bg/category-three-bg.png">
        <div class="container">
            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1 mb-n30">
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><path fill="currentColor" d="M39.206 6.34H23.794C10.45 6.34 0 11.111 0 17.205c0 1.636.732 3.194 2.177 4.634.512.508.806 1.234.806 1.992v9.07a.923.923 0 0 0 1.845 0v-9.07c0-1.246-.492-2.45-1.35-3.301-1.083-1.08-1.632-2.198-1.632-3.325 0-2.233 2.239-4.488 6.144-6.185 4.206-1.829 9.818-2.836 15.804-2.836 5.985 0 11.597 1.007 15.803 2.836 3.905 1.697 6.144 3.952 6.144 6.185 0 1.127-.55 2.246-1.632 3.324-.858.852-1.35 2.056-1.35 3.302v18.644a.923.923 0 1 0 1.846 0V23.832c0-.758.293-1.484.806-1.993 1.444-1.438 2.176-2.997 2.176-4.633 0-3.8-4.063-7.085-10.357-9.021h1.976c5.985 0 11.598 1.007 15.804 2.836 3.905 1.697 6.144 3.952 6.144 6.185 0 1.127-.55 2.246-1.632 3.324-.858.852-1.35 2.056-1.35 3.302v1.995a.923.923 0 0 0 1.845 0v-1.995c0-.758.294-1.484.806-1.993C62.269 20.4 63 18.842 63 17.206c0-6.094-10.451-10.867-23.794-10.867z"></path><path fill="currentColor" d="M59.094 29.224a.923.923 0 0 0-.923.922v23.106c0 .862-.701 1.563-1.563 1.563H44.223c.243-.468.381-1 .381-1.563v-6.457a.923.923 0 1 0-1.846 0v6.457c0 .862-.701 1.563-1.563 1.563H6.392a1.565 1.565 0 0 1-1.564-1.563v-16.03a.923.923 0 1 0-1.846 0v16.03c0 1.88 1.53 3.409 3.41 3.409h50.216c1.88 0 3.41-1.53 3.41-3.409V30.146a.923.923 0 0 0-.924-.922z"></path><path fill="currentColor" d="M7.884 52.683h31.82c.51 0 .923-.413.923-.923V23.831c0-1.808.72-3.562 1.978-4.812.458-.456 1.005-1.14 1.005-1.813 0-1.053-1.504-2.77-4.862-4.23-3.887-1.69-9.338-2.66-14.954-2.66-5.617 0-11.068.97-14.954 2.66-3.36 1.46-4.862 3.176-4.862 4.23 0 .672.546 1.357 1.004 1.812 1.258 1.25 1.979 3.005 1.979 4.813v27.93c0 .509.413.922.923.922zm-1.6-34.973a2.802 2.802 0 0 1-.418-.506c.238-.391 1.208-1.448 3.71-2.536 3.663-1.592 8.845-2.506 14.218-2.506 5.372 0 10.555.914 14.218 2.506 2.501 1.088 3.471 2.145 3.71 2.537a2.805 2.805 0 0 1-.419.505c-1.603 1.594-2.522 3.825-2.522 6.121v27.006H8.806V23.831c0-2.296-.92-4.527-2.522-6.121z"></path><path fill="currentColor" d="M12.483 24.29a1.243 1.243 0 1 0 0-2.485 1.243 1.243 0 0 0 0 2.486zm0-4.971a1.243 1.243 0 1 0 0-2.486 1.243 1.243 0 0 0 0 2.486zm4.971 0a1.243 1.243 0 1 0 0-2.486 1.243 1.243 0 0 0 0 2.486z"></path></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">custom bread</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><g fill="currentColor"><path d="M17.063 49.875h-5.25a1.313 1.313 0 0 1 0-2.625h5.25a1.313 1.313 0 0 1 0 2.625zm42.657 0h-3.282a1.313 1.313 0 0 1 0-2.625h2.192l1.77-9.43c-.024-4.824-4.146-8.945-9.212-8.945H42.57L38.394 47.25h7.544a1.313 1.313 0 0 1 0 2.625H36.75a1.313 1.313 0 0 1-1.28-1.602l4.772-21a1.311 1.311 0 0 1 1.28-1.023h9.666c6.513 0 11.813 5.3 11.813 11.812l-1.993 10.742a1.309 1.309 0 0 1-1.289 1.07z"></path><path d="M51.188 55.125a6.57 6.57 0 0 1-6.563-6.563A6.57 6.57 0 0 1 51.188 42a6.57 6.57 0 0 1 6.562 6.562 6.57 6.57 0 0 1-6.563 6.563zm0-10.5a3.942 3.942 0 0 0-3.938 3.937 3.942 3.942 0 0 0 3.938 3.938 3.942 3.942 0 0 0 3.937-3.938 3.942 3.942 0 0 0-3.938-3.937zm-28.875 10.5a6.57 6.57 0 0 1-6.563-6.563A6.57 6.57 0 0 1 22.313 42a6.57 6.57 0 0 1 6.562 6.562 6.57 6.57 0 0 1-6.563 6.563zm0-10.5a3.942 3.942 0 0 0-3.938 3.937 3.942 3.942 0 0 0 3.938 3.938 3.942 3.942 0 0 0 3.937-3.938 3.942 3.942 0 0 0-3.938-3.937zm-5.25-18.375h-10.5a1.313 1.313 0 0 1 0-2.625h10.5a1.313 1.313 0 0 1 0 2.625zm0 7.875H3.938a1.313 1.313 0 0 1 0-2.625h13.124a1.313 1.313 0 0 1 0 2.625zm0 7.875H1.313a1.313 1.313 0 0 1 0-2.625h15.75a1.313 1.313 0 0 1 0 2.625z"></path><path d="M36.75 49.875h-9.188a1.313 1.313 0 0 1 0-2.625h8.14L41.668 21H11.812a1.313 1.313 0 0 1 0-2.625h31.5a1.313 1.313 0 0 1 1.282 1.601L38.03 48.851a1.314 1.314 0 0 1-1.281 1.024z"></path></g></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">Bulk Delivery</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><g fill="currentColor"><path d="M53.298 19.762l-2.958-3.588a3.175 3.175 0 0 1-.714-1.724l-.446-4.629a5.068 5.068 0 0 0-4.55-4.55L40 4.824a3.181 3.181 0 0 1-1.724-.714l-3.588-2.958a5.068 5.068 0 0 0-6.436 0L24.665 4.11a3.178 3.178 0 0 1-1.724.714l-4.629.445a5.069 5.069 0 0 0-4.55 4.551l-.446 4.63a3.182 3.182 0 0 1-.714 1.723l-2.958 3.588a5.068 5.068 0 0 0 0 6.436l2.958 3.588c.406.493.653 1.089.714 1.724l.445 4.63a5.069 5.069 0 0 0 4.551 4.55l2.83.272-6.723 16.065c-.182.438-.1.93.215 1.285.315.354.793.494 1.248.365l5.832-1.647a.053.053 0 0 1 .062.025l2.92 5.31a1.214 1.214 0 0 0 1.135.633 1.22 1.22 0 0 0 1.068-.75l7.098-16.962c.24-.138.472-.297.692-.478l3.589-2.958a3.173 3.173 0 0 1 1.578-.695l6.429 15.361-4.55-1.284a1.915 1.915 0 0 0-2.205.922l-2.278 4.142-3.018-7.212a.934.934 0 0 0-1.723.72l3.535 8.45c.185.435.593.72 1.066.744l.064.002c.447 0 .853-.239 1.07-.634l2.92-5.31a.054.054 0 0 1 .062-.026l5.832 1.647c.456.129.934-.011 1.249-.365.314-.355.397-.847.214-1.286L41.8 40.962l2.83-.273a5.068 5.068 0 0 0 4.55-4.55l.446-4.63c.06-.634.308-1.23.714-1.723l2.958-3.588a5.067 5.067 0 0 0 0-6.436zM25.69 60.296l-2.279-4.143a1.914 1.914 0 0 0-2.205-.921l-4.549 1.284 6.428-15.36a3.172 3.172 0 0 1 1.579.693l3.588 2.959a5.05 5.05 0 0 0 3.439 1.147L25.69 60.296zM51.856 25.01l-2.958 3.588a5.038 5.038 0 0 0-1.132 2.733l-.446 4.629a3.196 3.196 0 0 1-2.87 2.87l-4.066.392a.56.56 0 0 0-.048.004l-.515.05a5.04 5.04 0 0 0-2.733 1.132L33.5 43.366a3.196 3.196 0 0 1-4.059 0l-3.588-2.958a5.036 5.036 0 0 0-2.733-1.132l-.518-.05a.618.618 0 0 0-.042-.004l-4.07-.392a3.196 3.196 0 0 1-2.87-2.87l-.445-4.629a5.037 5.037 0 0 0-1.132-2.733l-2.958-3.588a3.196 3.196 0 0 1 0-4.06l2.958-3.588a5.037 5.037 0 0 0 1.132-2.733l.446-4.63a3.196 3.196 0 0 1 2.87-2.869l4.629-.446a5.04 5.04 0 0 0 2.733-1.132l3.588-2.957a3.186 3.186 0 0 1 2.03-.728c.72 0 1.44.243 2.029.728l3.588 2.957a5.037 5.037 0 0 0 2.733 1.132l4.63.446A3.196 3.196 0 0 1 47.32 10l.445 4.63a5.038 5.038 0 0 0 1.132 2.732l2.958 3.589a3.197 3.197 0 0 1 0 4.059z"></path><path d="M31.47 8.387c-.624 0-1.252.04-1.867.118a.934.934 0 0 0 .237 1.853 12.858 12.858 0 0 1 1.63-.103c7.017 0 12.726 5.709 12.726 12.726 0 7.017-5.71 12.725-12.726 12.725-7.017 0-12.726-5.709-12.726-12.726a12.75 12.75 0 0 1 7.519-11.615.934.934 0 1 0-.766-1.704 14.622 14.622 0 0 0-8.621 13.32c0 8.047 6.547 14.593 14.594 14.593s14.594-6.546 14.594-14.594c0-8.047-6.547-14.593-14.594-14.593z"></path><path d="M22.193 21.898a2.86 2.86 0 0 0 0 4.04l4.08 4.08a2.84 2.84 0 0 0 2.02.837 2.84 2.84 0 0 0 2.02-.837l8.907-8.907a2.86 2.86 0 0 0 0-4.04 2.86 2.86 0 0 0-4.04 0l-6.887 6.887-2.06-2.06a2.86 2.86 0 0 0-4.04 0zm6.1 4.316a.934.934 0 0 0 .66-.274l7.548-7.548A.99.99 0 0 1 37.9 19.79l-8.907 8.907a.982.982 0 0 1-.699.29.982.982 0 0 1-.699-.29l-4.08-4.08a.99.99 0 0 1 .699-1.687.98.98 0 0 1 .698.289l2.721 2.72a.935.935 0 0 0 .661.275z"></path></g></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">Quality Standards</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><g fill="currentColor"><path d="M17.063 49.875h-5.25a1.313 1.313 0 0 1 0-2.625h5.25a1.313 1.313 0 0 1 0 2.625zm42.657 0h-3.282a1.313 1.313 0 0 1 0-2.625h2.192l1.77-9.43c-.024-4.824-4.146-8.945-9.212-8.945H42.57L38.394 47.25h7.544a1.313 1.313 0 0 1 0 2.625H36.75a1.313 1.313 0 0 1-1.28-1.602l4.772-21a1.311 1.311 0 0 1 1.28-1.023h9.666c6.513 0 11.813 5.3 11.813 11.812l-1.993 10.742a1.309 1.309 0 0 1-1.289 1.07z"></path><path d="M51.188 55.125a6.57 6.57 0 0 1-6.563-6.563A6.57 6.57 0 0 1 51.188 42a6.57 6.57 0 0 1 6.562 6.562 6.57 6.57 0 0 1-6.563 6.563zm0-10.5a3.942 3.942 0 0 0-3.938 3.937 3.942 3.942 0 0 0 3.938 3.938 3.942 3.942 0 0 0 3.937-3.938 3.942 3.942 0 0 0-3.938-3.937zm-28.875 10.5a6.57 6.57 0 0 1-6.563-6.563A6.57 6.57 0 0 1 22.313 42a6.57 6.57 0 0 1 6.562 6.562 6.57 6.57 0 0 1-6.563 6.563zm0-10.5a3.942 3.942 0 0 0-3.938 3.937 3.942 3.942 0 0 0 3.938 3.938 3.942 3.942 0 0 0 3.937-3.938 3.942 3.942 0 0 0-3.938-3.937zm-5.25-18.375h-10.5a1.313 1.313 0 0 1 0-2.625h10.5a1.313 1.313 0 0 1 0 2.625zm0 7.875H3.938a1.313 1.313 0 0 1 0-2.625h13.124a1.313 1.313 0 0 1 0 2.625zm0 7.875H1.313a1.313 1.313 0 0 1 0-2.625h15.75a1.313 1.313 0 0 1 0 2.625z"></path><path d="M36.75 49.875h-9.188a1.313 1.313 0 0 1 0-2.625h8.14L41.668 21H11.812a1.313 1.313 0 0 1 0-2.625h31.5a1.313 1.313 0 0 1 1.282 1.601L38.03 48.851a1.314 1.314 0 0 1-1.281 1.024z"></path></g></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">Fast Delivery</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><g fill="currentColor"><path d="M31.5 60.375a1.32 1.32 0 0 1-1.005-.467L.307 24.053a1.312 1.312 0 0 1-.147-1.475l10.584-19.27c.231-.42.672-.683 1.15-.683h39.212c.48 0 .922.263 1.15.683l10.581 19.27c.263.475.203 1.06-.147 1.475L32.504 59.908a1.31 1.31 0 0 1-1.003.467zM2.898 23.05L31.5 57.026 60.102 23.05 50.33 5.25H12.671l-9.773 17.8z"></path><path d="M61.031 24.937H1.97a1.313 1.313 0 0 1 0-2.625h59.06a1.313 1.313 0 0 1 0 2.625z"></path><path d="M44.789 24.2c-.412 0-.82-.194-1.074-.56L31.506 6.23 19.452 23.548a1.31 1.31 0 0 1-1.824.328 1.309 1.309 0 0 1-.328-1.827L30.425 3.187a1.308 1.308 0 0 1 1.073-.562h.003c.428 0 .827.208 1.074.56l13.287 18.95a1.31 1.31 0 0 1-.32 1.826c-.226.16-.49.239-.753.239z"></path><path d="M31.5 60.375c-.556 0-1.05-.349-1.236-.871L10.658 4.379a1.315 1.315 0 0 1 .795-1.678 1.303 1.303 0 0 1 1.677.796l18.37 51.65 18.37-51.65a1.31 1.31 0 0 1 1.677-.796 1.31 1.31 0 0 1 .796 1.678L32.736 59.504c-.186.522-.68.871-1.236.871z"></path></g></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">Premium Material</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
                <div class="col mb-30">
                    <!-- Single Call To Actio 03 Start -->
                    <a href="contact.html" class="callto-action-03">
                        <span class="callto-action-03_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" fill="none" viewBox="0 0 63 63"><path fill="currentColor" d="M39.206 6.34H23.794C10.45 6.34 0 11.111 0 17.205c0 1.636.732 3.194 2.177 4.634.512.508.806 1.234.806 1.992v9.07a.923.923 0 0 0 1.845 0v-9.07c0-1.246-.492-2.45-1.35-3.301-1.083-1.08-1.632-2.198-1.632-3.325 0-2.233 2.239-4.488 6.144-6.185 4.206-1.829 9.818-2.836 15.804-2.836 5.985 0 11.597 1.007 15.803 2.836 3.905 1.697 6.144 3.952 6.144 6.185 0 1.127-.55 2.246-1.632 3.324-.858.852-1.35 2.056-1.35 3.302v18.644a.923.923 0 1 0 1.846 0V23.832c0-.758.293-1.484.806-1.993 1.444-1.438 2.176-2.997 2.176-4.633 0-3.8-4.063-7.085-10.357-9.021h1.976c5.985 0 11.598 1.007 15.804 2.836 3.905 1.697 6.144 3.952 6.144 6.185 0 1.127-.55 2.246-1.632 3.324-.858.852-1.35 2.056-1.35 3.302v1.995a.923.923 0 0 0 1.845 0v-1.995c0-.758.294-1.484.806-1.993C62.269 20.4 63 18.842 63 17.206c0-6.094-10.451-10.867-23.794-10.867z"></path><path fill="currentColor" d="M59.094 29.224a.923.923 0 0 0-.923.922v23.106c0 .862-.701 1.563-1.563 1.563H44.223c.243-.468.381-1 .381-1.563v-6.457a.923.923 0 1 0-1.846 0v6.457c0 .862-.701 1.563-1.563 1.563H6.392a1.565 1.565 0 0 1-1.564-1.563v-16.03a.923.923 0 1 0-1.846 0v16.03c0 1.88 1.53 3.409 3.41 3.409h50.216c1.88 0 3.41-1.53 3.41-3.409V30.146a.923.923 0 0 0-.924-.922z"></path><path fill="currentColor" d="M7.884 52.683h31.82c.51 0 .923-.413.923-.923V23.831c0-1.808.72-3.562 1.978-4.812.458-.456 1.005-1.14 1.005-1.813 0-1.053-1.504-2.77-4.862-4.23-3.887-1.69-9.338-2.66-14.954-2.66-5.617 0-11.068.97-14.954 2.66-3.36 1.46-4.862 3.176-4.862 4.23 0 .672.546 1.357 1.004 1.812 1.258 1.25 1.979 3.005 1.979 4.813v27.93c0 .509.413.922.923.922zm-1.6-34.973a2.802 2.802 0 0 1-.418-.506c.238-.391 1.208-1.448 3.71-2.536 3.663-1.592 8.845-2.506 14.218-2.506 5.372 0 10.555.914 14.218 2.506 2.501 1.088 3.471 2.145 3.71 2.537a2.805 2.805 0 0 1-.419.505c-1.603 1.594-2.522 3.825-2.522 6.121v27.006H8.806V23.831c0-2.296-.92-4.527-2.522-6.121z"></path><path fill="currentColor" d="M12.483 24.29a1.243 1.243 0 1 0 0-2.485 1.243 1.243 0 0 0 0 2.486zm0-4.971a1.243 1.243 0 1 0 0-2.486 1.243 1.243 0 0 0 0 2.486zm4.971 0a1.243 1.243 0 1 0 0-2.486 1.243 1.243 0 0 0 0 2.486z"></path></svg>
                        </span>
                        <div class="callto-action-03_content">
                            <h6 class="callto-action-03__title">Special Taste</h6>
                            <p class="callto-action-03__text">Amet minim mollit non deserunt</p>
                        </div>
                    </a>
                    <!-- Single Call To Actio 03 End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Three Section End -->

    <!-- Contact form section Start -->
    <div class="section-padding-03 contact-section contact-section_bg" data-bg-image="assets/images/bg/contact-bg.jpg">
        <div class="container custom-container-five">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-section_content">
                        <h2 class="contact-section__title">Our Contact</h2>
                        <ul class="contact-section_list">
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-section_list__text">Phone Number : <span>1800 1779</span></span>
                            </li>
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-section_list__text">Address : <span>35/6 đường D5, Q. Bình Thạnh, TP.HCM</span></span>
                            </li>
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-section_list__text">Email Adress : <span>aptech2@aprotrain.com</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-section_formbg" data-bg-image="assets/images/bg/contact-form-bg.jpg">
                        <h2 class="contact-section_form__title">Get in touch.</h2>
                        <form class="contact-section_form" id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6 form-p">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="con_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="con_email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="con_phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="con_address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <textarea class="form-control text-area" name="con_message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-theme" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Message Notification -->
                        <div class="form-message"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section_shape">
            <img src="assets/images/shape/shape-10.png" alt="Shape-Image">
        </div>
    </div>
    <!-- Contact form section End -->

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
                    <p>&copy; 2024 <strong> Bakerz Bite </strong> Made with <i class="lastudioicon-heart-1"></i> by <a href="https://aptechvietnam.com.vn/">Bakerz</a></p>
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

    <!-- Vendors JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Vendors JS -->


</body>

</html>
