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
    <style type="text/css">
      body {
        margin-top: 20px;
        background: #f7f8fa;
      }

      .avatar-xxl {
        height: 7rem;
        width: 7rem;
      }

      .card {
        margin-bottom: 20px;
        -webkit-box-shadow: 0 2px 3px #eaedf2;
        box-shadow: 0 2px 3px #eaedf2;
      }

      .pb-0 {
        padding-bottom: 0 !important;
      }

      .font-size-16 {
        font-size: 16px !important;
      }
      .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #038edc;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
      }

      .bg-soft-primary {
        background-color: rgba(3, 142, 220, 0.15) !important;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }

      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }
      .nav-tabs-custom .nav-item .nav-link {
        border: none;
      }
      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }

      .avatar-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 12px;
      }

      .border-end {
        border-right: 1px solid #eff0f2 !important;
      }

      .d-inline-block {
        display: inline-block !important;
      }

      .badge-soft-danger {
        color: #f34e4e;
        background-color: rgba(243, 78, 78, 0.1);
      }

      .badge-soft-warning {
        color: #f7cc53;
        background-color: rgba(247, 204, 83, 0.1);
      }

      .badge-soft-success {
        color: #51d28c;
        background-color: rgba(81, 210, 140, 0.1);
      }

      .avatar-group .avatar-group-item {
        margin-left: -14px;
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
      }

      .avatar-sm {
        height: 2rem;
        width: 2rem;
      }

      .nav-tabs-custom .nav-item {
        position: relative;
        color: #343a40;
      }

      .nav-tabs-custom .nav-item .nav-link.active:after {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      .nav-tabs-custom .nav-item .nav-link::after {
        content: "";
        background: #038edc;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0;
        bottom: -2px;
        -webkit-transition: all 250ms ease 0s;
        transition: all 250ms ease 0s;
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      .badge-soft-secondary {
        color: #74788d;
        background-color: rgba(116, 120, 141, 0.1);
      }

      .badge-soft-secondary {
        color: #74788d;
      }

      .work-activity {
        position: relative;
        color: #74788d;
        padding-left: 5.5rem;
      }

      .work-activity::before {
        content: "";
        position: absolute;
        height: 100%;
        top: 0;
        left: 66px;
        border-left: 1px solid rgba(3, 142, 220, 0.25);
      }

      .work-activity .work-item {
        position: relative;
        border-bottom: 2px dashed #eff0f2;
        margin-bottom: 14px;
      }

      .work-activity .work-item:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
      }

      .work-activity .work-item::after,
      .work-activity .work-item::before {
        position: absolute;
        display: block;
      }

      .work-activity .work-item::before {
        content: attr(data-date);
        left: -157px;
        top: -3px;
        text-align: right;
        font-weight: 500;
        color: #74788d;
        font-size: 12px;
        min-width: 120px;
      }

      .work-activity .work-item::after {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        left: -26px;
        top: 3px;
        background-color: #fff;
        border: 2px solid #038edc;
      }

      /* Ẩn input file */
      input[type="file"] {
        display: none;
      }
    </style>

</head>
<body >
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
      integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Header Start -->
    <div class="header-section header-transparent header-sticky">
        <div class="container position-relative">

            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3 col-7">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ route('client.home')}}">
                            <img class="white-logo" src="{{asset('assets/images/logo-white.svg')}}" width="229" height="62" alt="Logo">
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
                                                    <img src="{{asset('assets/images/product/featured-product-01.png')}}" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="{{ route('client.home')}}">
                                                    <img src="{{asset('assets/images/product/featured-product-01.png')}}" alt="Shop">
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
                    <a href="single-product.html"><img width="70" height="88" src="{{asset('assets/images/mini-cart/cart-1.png')}}" alt="Cart"></a>
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
                    <a href="single-product.html"><img width="70" height="88" src="{{asset('assets/images/mini-cart/cart-2.png')}}" alt="Cart"></a>
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
                    <a href="single-product.html"><img width="70" height="88" src="{{asset('assets/images/mini-cart/cart-3.png')}}" alt="Cart"></a>
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
                    <a href="single-product.html"><img width="70" height="88" src="{{asset('assets/images/mini-cart/cart-4.png')}}" alt="Cart"></a>
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
                    <a href="single-product.html"><img width="70" height="88" src="{{asset('assets/images/mini-cart/cart-5.png')}}" alt="Cart"></a>
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
<div class="breadcrumb" data-bg-image="{{asset('assets/images/bg/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Profile</h1>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS Vendor, Plugins & Activation Script Files -->

    <div class="container pt-5">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pb-0">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <div class="text-center border-end">
                    <form
                      id="avatarForm"
                      action="{{ route('update-avatar') }}"
                      method="POST"
                      enctype="multipart/form-data"
                    >
                      @csrf
                      <div class="text-center border-end">
                        <img
                          src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}"
                          class="img-fluid avatar-xxl rounded-circle"
                          alt="Avatar"
                          id="avatarImg"
                          name="avatarImg"
                        />
                        <input
                          type="file"
                          id="fileInput"
                          name="avatar"
                          accept="image/*"
                          style="display: none"
                          onchange="submitForm()"
                        />
                      </div>
                    </form>

                    
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="ms-3">
                    <div>
                    <h4 class="text-primary font-size-20 mt-3 mb-2">
                      {{ Auth::user()->name }}
                    </h4>
                      <p class="mb-0 text-muted">{{ Auth::user()->address }}</p>
                    </div>
                    <div class="row my-4">
                      <div class="col-md-12">
                        <div>
                          <p>{{ Auth::user()->email }}</p>
                          <p class="text-muted fw-medium mb-0">
                            <i class="mdi mdi-phone-in-talk-outline me-2"></i>{{
                            preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1-$2-$3',
                            Auth::user()->phone) }}
                          </p>
                        </div>
                      </div>
                    </div>
                    <ul
                      class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                      role="tablist"
                    >
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link px-4 active"
                          data-bs-toggle="tab"
                          href="#projects-tab"
                          role="tab"
                          aria-selected="false"
                          tabindex="-1"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="fas fa-home"></i
                          ></span>
                          <span class="d-none d-sm-block">History</span>
                        </a>
                      </li>

                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link px-4"
                          href="{{route('auth.changepass')}}"
                          target="__blank"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="mdi mdi-account-group-outline"></i
                          ></span>
                          <span class="d-none d-sm-block">Change password</span>
                        </a>
                      </li>

                      <li class="nav-item" role="presentation" id="checkAdmin">
                        <a
                          class="nav-link px-4"
                          href="{{ route('admin.dashboard') }}"
                          role="tab"
                          aria-selected="false"
                          tabindex="-1"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="mdi mdi-menu-open"></i
                          ></span>
                          <span class="d-none d-sm-block">Dashboard</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="tab-content p-4">
              <div
                class="tab-pane active show"
                id="projects-tab"
                role="tabpanel"
              >
                <div class="d-flex align-items-center">
                  <div class="flex-1">
                    <h4 class="card-title mb-4">Order history</h4>
                  </div>
                </div>
                <div class="row" id="all-projects">
                  <div class="col-md-6" id="project-items-1">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex mb-3">
                          <div class="flex-grow-1 align-items-start">
                            <div>
                              <h6 class="mb-0 text-muted">
                                <span class="team-date"
                                  >Ngày Mua: 20/9/2024</span
                                >
                              </h6>
                            </div>
                          </div>
                        </div>
                        <div class="mb-4">
                          <h2>Tên Bánh</h2>
                          <strong>Đơn hàng id (mã đơn hàng):</strong> dbzs-123
                          <br />
                          <strong>Giá:</strong>
                          <span class="text-navy">15$</span><br />
                          <strong>Mô Tả:</strong> giới thiệu bánh <br />
                        </div>
                        <div class="d-flex">
                          <div class="align-self-end">
                            <span
                              class="badge badge-soft-danger p-2 team-status b1"
                              >trạng thái đơn hàng</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <div>
              <h4 class="card-title mb-4">Profile
                <a style="float: right;" href="#" onclick="toggleEditForm(); return false;">
                <a style="float: right;"  href="#" onclick="toggleEditForm(); return false;">
                <span><h6 id="EditText" class="text-primary">Edit</h6></span>
                </a>
              </h4>
                
      

              <div class="table-responsive" id="profile-table">
                <table class="table table-bordered mb-0">
                  <tbody>
                    <tr>
                      <th scope="row">Full Name</th>
                      <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <!-- Thêm hàng hiển thị Gender -->
                    <tr>
                      <th scope="row">Gender</th>
                      <td>
                        @if(Auth::user()->gender == 'male')
                          Male
                        @elseif(Auth::user()->gender == 'female')
                          Female
                        @else
                          Other
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td>{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                      <th scope="row">Phone</th>
                      <td>{{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td>{{ Auth::user()->email }}</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>


              <!-- Hiển thị form khi người dùng nhấn Edit -->
              <div id="profile-form" style="display:none;">
                <form method="POST" action="{{ route('profile.update') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                  </div>
                  <!-- Thêm trường Gender -->
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div>
                      <input type="radio" id="male" name="gender" value="male" {{ Auth::user()->gender == 'male' ? 'checked' : '' }}>
                      <label for="male">Male</label>
                      
                      <input type="radio" id="female" name="gender" value="female" {{ Auth::user()->gender == 'female' ? 'checked' : '' }}>
                      <label for="female">Female</label>

                      <input type="radio" id="other" name="gender" value="other" {{ Auth::user()->gender == 'other' ? 'checked' : '' }}>
                      <label for="other">Other</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ Auth::user()->address }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}" required>
                  </div>
                  
                  

                  <button type="submit" class="d-block btn btn-secondary btn-hover-primary">Update Profile</button>
                </form>
              </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br><br><br>

    <!-- Contact form section Start -->
    <div class="section-padding-03 contact-section contact-section_bg" data-bg-image="{{asset('assets/images/bg/contact-bg.jpg')}}">
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
                    <div class="contact-section_formbg" data-bg-image="{{asset('assets/images/bg/contact-form-bg.jpg')}}">
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
            <img src="{{asset('assets/images/shape/shape-10.png')}}" alt="Shape-Image">
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
                                <a class="logo-dark" href="{{ route('client.home')}}"><img src="{{asset('assets/images/logo.svg')}}" alt="Logo"></a>
                                <a class="logo-white d-none" href="index.html"><img src="{{asset('assets/images/logo-white.svg')}}" alt="Logo"></a>
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
                "{{asset('assets/images/logo-white.svg')}}"
            );
        } else {
            $(
                ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
            ).addClass("sticky");
            $(".header-sticky .header-logo img").attr(
                "src",
                "{{asset('assets/images/logo.svg')}}"
            );
        }
    });


      document
        .getElementById("avatarImg")
        .addEventListener("click", function () {
          document.getElementById("fileInput").click();
        });

      document
        .getElementById("fileInput")
        .addEventListener("change", function (event) {
          const file = event.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              document.getElementById("avatarImg").src = e.target.result;
            };
            reader.readAsDataURL(file);
          }
        });
      function submitForm() {
        document.getElementById("avatarForm").submit();
      }

      // Trigger the file input when clicking on the image
      document
        .getElementById("avatarImg")
        .addEventListener("click", function () {
          document.getElementById("imgClick").click();
        });
        
        var count =0;
        function toggleEditForm() {          
          count++;
          if (count%2==0){
            document.getElementById("profile-table").style.display = "block";
            document.getElementById("profile-form").style.display = "none";
            document.getElementById("EditText").innerHTML = "Edit";
          } else {
            document.getElementById("profile-table").style.display = "none";
            document.getElementById("profile-form").style.display = "block";
            document.getElementById("EditText").innerHTML = "Hide";
          }
        }

    </script>
</body>

</html>
