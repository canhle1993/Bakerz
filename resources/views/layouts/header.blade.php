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
                                <a class="menu-item-link" href="{{ route('client.home')}}"><span>Shop</span></a>
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
                            @auth
                            <li >
                                <a  class="menu-item-link" href="{{ route('client.profile', ['userid' => Auth::user()->user_id]) }}">Profile</a>
                            </li>
                            <li >
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a  class="menu-item-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            @endauth
                            @guest

                            <li >
                            <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a  class="menu-item-link" href="{{ route('login') }}">Login</a>
                            </li>

                            @endguest
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

    <!-- JS Vendor, Plugins & Activation Script Files -->

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


</body>

</html>
