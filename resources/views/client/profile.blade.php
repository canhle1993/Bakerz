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
    <div class="header-section header-transparent header-sticky" style="background-color: black;">
        <div class="container position-relative">

            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3 col-7">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.html">
                            <img class="white-logo" src="{{asset('assets/images/logo-white.svg')}}" width="229" height="62" alt="Logo">
                        </a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col-lg-7 col-xl-6 d-none d-lg-block">
                    <!-- Header Menu Start -->
                    <div class="header-menu">
                        <ul class="header-primary-menu d-flex justify-content-center">
                            <li>
                                <a href="{{ route('client.home') }}" class="menu-item-link active"><span>Home</span></a>
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
                                                    <img src="{{asset('assets/images/product/featured-product-01.png')}}" alt="Shop">
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
    
    <!-- JS Vendor, Plugins & Activation Script Files -->
<br><br><br><br>

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
                  <span><h6 id="EditText">Edit</h6></span>
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
    </div>

          <!-- Newsletter Section Strat -->
          <div class="newsletter-section" style="background-image: url({{asset('assets/images/newsletter-bg.jpg')}});">
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
                        <a class="logo-dark" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="Logo"></a>
                        <a class="logo-white d-none" href="index.html"><img src="{{asset('assets/images/logo-white.svg')}}" alt="Logo"></a>
                    </div>
                    <div class="footer-widget__social">
                        <a href="#/"><i class="lastudioicon-b-facebook"></i></a>
                        <a href="#/"><i class="lastudioicon-b-twitter"></i></a>
                        <a href="#/"><i class="lastudioicon-b-pinterest"></i></a>
                        <a href="#/"><i class="lastudioicon-b-instagram"></i></a>
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
                            <li><a href="shop.html">Cupcake</a></li>
                            <li><a href="shop.html">Pastry</a></li>
                            <li><a href="shop.html">Muffin</a></li>
                            <li><a href="shop.html">Waffle</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Strat -->
                    <div class="footer-widget flex-grow-1">
                        <h4 class="footer-widget__title">Services</h4>

                        <ul class="footer-widget__link">
                            <li><a href="contact.html">Delivery</a></li>
                            <li><a href="contact.html">Payment</a></li>
                            <li><a href="contact.html">Returns</a></li>
                            <li><a href="contact.html">Privacy</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Strat -->
                    <div class="footer-widget flex-grow-1">
                        <h4 class="footer-widget__title">Information</h4>

                        <ul class="footer-widget__link">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="conact.html">Contact Us</a></li>
                            <li><a href="blog-details.html">Latest Post</a></li>
                            <li><a href="about.html">Selling Tips</a></li>
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
 
    <!-- Vendors JS -->
    <script>
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
