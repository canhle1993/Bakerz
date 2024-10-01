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
       <!-- Header Start -->
       <div class="header-section header-transparent header-sticky">
        <div class="container position-relative">

            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3 col-7">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="<?php echo e(route('client.home')); ?>">
                            <img class="white-logo" src="<?php echo e(asset('assets/images/logo-white.svg')); ?>" width="229" height="62" alt="Logo">
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
                                <a class="menu-item-link" href="<?php echo e(route('shop_all')); ?>"><span>Shop</span></a>
                                <ul class="sub-menu sub-menu-mega">
                                    <li class="mega-menu-item">
                                        <ul>
                                            <li class="mega-menu-item-title">Product Types</li>
                                            <li><a class="sub-item-link" href="<?php echo e(route('shop_all')); ?>"><span>All Products</span></a></li>
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
                                            <li><a class="sub-item-link" href="<?php echo e(route('client_location')); ?>"><span>Client Location</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(route('client.home')); ?>">
                                                    <img src="<?php echo e(asset('assets/images/product/featured-product-01.png')); ?>" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(route('client.home')); ?>">
                                                    <img src="<?php echo e(asset('assets/images/product/featured-product-01.png')); ?>" alt="Shop">
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
                            <li><a class="menu-item-link" href="<?php echo e(route('blog-detail')); ?>"><span>Workshop</span></a>
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
                                <button id="cart_icon" class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
                                    <i class="lastudioicon-shopping-cart-2"></i>
                                    <span id="cart_quantity" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"></span>
                                </button>
                            </li>
                            <!-- header-primary-menu d-flex justify-content-center -->
                            <div class="header-meta__action d-flex justify-content-end">
                            <?php if(auth()->guard()->check()): ?>
                            <li >
                                <a  class=" action" href="<?php echo e(route('client.profile', ['userid' => Auth::user()->user_id])); ?>">Profile</a>
                            </li>
                            <li >
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <a  class="action" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>

                            <li >
                            <form id="login-form" action="<?php echo e(route('login')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <a  class="action" href="<?php echo e(route('login')); ?>">Login</a>
                            </li>

                            <?php endif; ?>
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

            <form action="<?php echo e(route('shop_all')); ?>" method="GET">
                <input class="search-popup__field border-0 border-bottom bg-transparent text-white w-100 tra py-3" name="query" type="text" placeholder="Search…" value="<?php echo e(request()->query('query')); ?>">
                <button type="submit"  class="search-popup__icon text-white border-0 bg-transparent position-absolute top-50 end-0 translate-middle-y"><i class="lastudioicon-zoom-1"></i></button>
            </form>
        </div>
        <button type="submit" class="search-popup__close position-absolute top-0 end-0 m-8 p-3 lh-1 border-0 text-white fs-4"><i class="lastudioicon-e-remove"></i></button>
    </div>
    <!-- Search End -->

        <!-- Offcanvas Cart Start  -->
<div class="offcanvas offcanvas-end offcanvas-cart" id="offcanvasCart">

  <div class="offcanvas-header">
      <h4 class="offcanvas-title">My Cart</h4>
      <button type="button" class="btn-close text-secondary" data-bs-dismiss="offcanvas"><i class="lastudioicon lastudioicon-e-remove"></i></button>
  </div>

  <?php echo $__env->make('client.shop.others.cartpartials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="offcanvas-footer d-flex flex-column gap-4">

      <!-- Mini Cart Total End  -->
      <div class="mini-cart-totla">
          <span class="label">Total:</span>
          <span id="total_price" class="value">$24.95</span>
      </div>
      <!-- Mini Cart Total End  -->

      <!-- Mini Cart Button End  -->
      <div class="mini-cart-btn d-flex flex-column gap-2">
          <a class="d-block btn btn-secondary btn-hover-primary" href="<?php echo e(route('cart')); ?>">View cart</a>
          <a class="d-block btn btn-secondary btn-hover-primary" href="<?php echo e(route('checkout')); ?>">Checkout</a>
      </div>
      <!-- Mini Cart Button End  -->

  </div>

</div>
<!-- Offcanvas Cart End -->
      <!-- JS Vendor, Plugins & Activation Script Files -->

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

        $(document).ready(function() {
          updateCartView();

          $('.add-to-cart').on('click', function(e) {
              e.preventDefault();

              var productId = $(this).data('product-id');
              $.ajax({
                  url: "<?php echo e(route('cart.new_add')); ?>",
                  method: "POST",
                  data: {
                      _token: "<?php echo e(csrf_token()); ?>",
                      product_id: productId,
                      quantity: 1
                  },
                  success: function(response) {
                      if (response.status === 'success') {
                          // Cập nhật số lượng sản phẩm trong giỏ hàng
                          updateCartView();
                      } else {
                          alert(response.message);
                      }
                  },
                  error: function(xhr) {
                      window.location.href = "<?php echo e(route('login')); ?>"; // Sử dụng route trong Blade để tạo đường dẫn
                      // console.error('Error:', xhr.responseText);
                  }
              });
          });

          // delete cart
          $(document).on('click', '.cart_delete', function(e) {

                e.preventDefault();

                var productId = $(this).data('product-id');
                console.log(productId); // In ra product_id để đảm bảo nó có giá trị đúng

                $.ajax({
                    url: "<?php echo e(route('cart.delete', ':id')); ?>".replace(':id', productId), // Truyền product_id vào URL
                    method: "DELETE",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        product_id: productId
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            updateCartView();
                        } else {
                            //   alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert("FAIL");
                        console.error('Error:', xhr.responseText);
                    }
                });
            });
            function updateCartView() {
                $.ajax({
                    url: "<?php echo e(route('cart.show')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
                    method: "GET",
                    success: function(response) {
                        $('#cart-content').html(response.cart_html); // Cập nhật lại nội dung giỏ hàng

                        $('#cart-content2').html(response.cart_html2); // Cập nhật lại nội dung giỏ hàng

                        $('#cart_quantity').text(response.cart_quantity); // Cập nhật lại số lượng giỏ hàng
                        console.log(response.cart_quantity);
                        calculateTotal();
                        // Sử dụng jQuery animate để tạo hiệu ứng di chuyển
                        $('#cart_icon').css('color', 'red')// Đổi màu thành đỏ
                        .animate({
                            top: '-10px'
                        }, 200, function() {
                            $(this).animate({
                                top: '0px'
                            }, 200, function() {
                                // Lặp lại lần nữa
                                $(this).animate({
                                    top: '-10px'
                                }, 200, function() {
                                    $(this).animate({
                                        top: '0px'
                                    }, 200, function() {
                                        // Sau khi hiệu ứng hoàn thành, đổi lại màu ban đầu
                                        $(this).css('color', '');
                                    });
                                });
                            });
                        });
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                        // alert('An error occurred while updating the cart.');
                    }
                });
            }
        });


        function calculateTotal() {
            var total = 0;
            // Duyệt qua tất cả các phần tử có class 'subtotal'
            $('.subtotal').each(function() {
                // Lấy giá trị của từng phần tử và loại bỏ ký tự $
                var subtotal = parseFloat($(this).text().replace('$', ''));
                // Cộng tổng lại
                total += subtotal;
            });

            // Hiển thị tổng đã tính
            $('#total_price').text(total.toFixed(2) + ' $');
        }
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/layouts/header.blade.php ENDPATH**/ ?>