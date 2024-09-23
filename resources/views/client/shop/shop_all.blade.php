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

    <!-- Search Start  -->
    <div class="search-popup position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center p-6 bg-black bg-opacity-75">
        <div class="search-popup__form position-relative">
            <form>
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


    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Shop</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section sidebar-left overflow-hidden">
        <div class="container">
            <div class="row flex-md-row-reverse">
                <div class="col-md-8 section-padding-04">
                    <!-- Shop Top Bar Start -->
                    <div class="shop-topbar" style="margin-bottom: 10px;"> <!-- Giảm margin-bottom -->
                        <div class="shop-topbar-item shop-topbar-left">
                            <p>Showing {{ ($products->currentPage() - 1) * $products->perPage() + 1 }} -
                            {{ ($products->currentPage() - 1) * $products->perPage() + $products->count() }}
                            of {{ $products->total() }} result</p>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-topbar-item">
                                <form method="GET" action="{{ route('shop_all') }}">
                                            <select name="sort" id="SortBy" onchange="this.form.submit()">
                                                <option value="price-ascending" {{ request()->get('sort') == 'price-ascending' ? 'selected' : '' }}>Price ↑</option>
                                                <option value="price-descending" {{ request()->get('sort') == 'price-descending' ? 'selected' : '' }}>Price ↓</option>
                                            </select>
                                </form>
                            </div>
                        </div>
                    </div>

    <div class="shop-product-section sidebar-left overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 section-padding-04">
                    <!-- Product Section Start -->
                    <div class="row">
                        @if($products->isEmpty())
                            <p>No products found.</p>
                        @else
                            <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 row-cols-1 mb-n50">
                                @foreach($products as $product)
                                <div class="col mb-50">
                                    <!-- Product Item Start -->
                                    <div class="product-item text-center">
                                        <div class="product-item__image border w-100">
                                            <a href="{{ route('single-product', ['id' => $product->product_id]) }}"><img width="350" height="350" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->product_name }}"></a>
                                        </div>
                                        <div class="product-item__content pt-5">
                                            <h5 class="product-item__title"><a href="#">{{ $product->product_name }}</a></h5>
                                            <span class="product-item__price">{{ number_format($product->price, 0, ',', '.') }} $</span>
                                        </div>
                                    </div>
                                    <!-- Product Item End -->
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="shop-bottombar">
                        {{ $products->links('pagination::bootstrap-4') }} <!-- Hiển thị các nút phân trang -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

                </div>
                <div class="col-md-4">
                    <div class="sidebars">
                        <div class="sidebars_inner">
                            <!-- Search Widget Start -->
                            <form action="{{ route('shop_all') }}" method="GET" class="sidebars_search">
                                <input type="text" name="query" placeholder="Search Here" class="sidebars_search__input" value="{{ request()->input('query') }}">
                                <button type="submit" class="sidebars_search__btn"><i class="lastudioicon-zoom-1"></i></button>
                            </form>
                            <!-- Search Widget End -->

                            <!-- Category Widget Start -->
                            <div class="sidebars_widget">
                                <h3 class="sidebars_widget__title">Category</h3>
                                <ul class="sidebars_widget__category">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('shop_all', ['category_id' => $category->category_id]) }}">{{ $category->category_name }}</a></li>
                                    @endforeach
                                </ul>


                            </div>
                            <!-- Category Widget End -->

                            <!-- Popular Product Widget Start -->
                            <div class="sidebars_widget">
                                <h3 class="sidebars_widget__title">Popular products</h3>
                                <ul class="sidebars_widget__product">
                                    <!-- Single Product Start -->
                                    <li class="single-product">
                                        <a href="single-product.html" class="single-product_thumb">
                                            <img src="assets/images/product/sidebar-1.png" alt="Sidebar-Image">
                                        </a>
                                        <div class="single-product_content">
                                            <a href="single-product.html" class="single-product_content__title">Brownie</a>
                                            <span class="single-product_content__price">$4.99</span>
                                        </div>
                                    </li>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <li class="single-product">
                                        <a href="single-product.html" class="single-product_thumb">
                                            <img src="assets/images/product/sidebar-2.png" alt="Sidebar-Image">
                                        </a>
                                        <div class="single-product_content">
                                            <a href="single-product.html" class="single-product_content__title">Red Velvet</a>
                                            <span class="single-product_content__price">$4.99</span>
                                        </div>
                                    </li>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <li class="single-product">
                                        <a href="single-product.html" class="single-product_thumb">
                                            <img src="assets/images/product/sidebar-3.png" alt="Sidebar-Image">
                                        </a>
                                        <div class="single-product_content">
                                            <a href="single-product.html" class="single-product_content__title">Cream Muffin</a>
                                            <span class="single-product_content__price">$4.99</span>
                                        </div>
                                    </li>
                                    <!-- Single Product End -->
                                </ul>
                            </div>
                            <!-- Popular Product Widget End -->

                        </div>
                    </div>
                </div>
            </div>
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
    </div>

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
