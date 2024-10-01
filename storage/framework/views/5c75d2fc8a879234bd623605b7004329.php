<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <style>
        .pagination li {
            display: inline-block;
            margin: 0 5px;
        }

        .pagination li a {
            padding: 10px 15px;
            color: #333;
            text-decoration: none;


        }

        .pagination li.active a {
            background-color: #dde028;


        }

        .pagination li.disabled a {
            color: #ccc;
            pointer-events: none;
            cursor: not-allowed;
        }

        .pagination li a:hover {
            background-color: #9b8e8e;
        }
        .sidebars_widget__instagram {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            list-style: none;
        }

        .sidebars_widget__instagram li {
            width: 50%;
        }

        .sidebars_widget__instagram li a {
            display: block;
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            overflow: hidden;
        }

        .sidebars_widget__instagram img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sidebars_widget__instagram i {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 18px;
        }


        .sidebars_widget__banner {
            position: relative;
            display: block;
            width: 100%;
        }

        .sidebars_widget__banner img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }

        .banner-content_title {
            font-size: 50px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="<?php echo e(asset('assets/images/bg/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Shop</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li>Shop All Products</li>
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
                <!-- Main Content Section -->
                <div class="col-md-8 section-padding-04">
                    <!-- Shop Top Bar Start -->
<div class="shop-topbar">

    <div class="shop-topbar-item shop-topbar-left">
        <p>Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> result</p>
    </div>

    <div class="shop-topbar-right">
        <div class="shop-topbar-item">
            <form id="sortForm" action="<?php echo e(route('shop_all')); ?>" method="GET">
                <select name="sort" id="SortBy" onchange="document.getElementById('sortForm').submit();">
                    <option value="manual" <?php echo e(request('sort') == 'manual' ? 'selected' : ''); ?>>Sort by Rated</option>
                    <option value="best-selling" <?php echo e(request('sort') == 'best-selling' ? 'selected' : ''); ?>>Sort by Latest</option>
                    <option value="price-ascending" <?php echo e(request('sort') == 'price-ascending' ? 'selected' : ''); ?>>Price ↑</option>
                    <option value="price-descending" <?php echo e(request('sort') == 'price-descending' ? 'selected' : ''); ?>>Price ↓</option>
                </select>
            </form>
        </div>


    </div>

</div>
<!-- Shop Top Bar End -->

                    <!-- Product Section Start -->

                    <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-sm-2 row-cols-1 mb-n50">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">

                                <div class="product-item__image border w-100">
                                    <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>">

                                        <img width="350" height="350" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                    </a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-quickview" href="#/" data-id="<?php echo e($product->product_id); ?>" data-bs-toggle="modal" data-bs-target="#exampleProductModal" title="Quick View"></a>

                                        </li>
                                        <li class="product-item__meta-action">
                                            <a
                                            class="shadow-1 labtn-icon-cart add-to-cart"
                                            href="#"
                                            data-product-id="<?php echo e($product->product_id); ?>"
                                            ></a>
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
                                    <h5 class="product-item__title">
                                        <a href="<?php echo e(route('product.show', ['product' => $product->product_id])); ?>"><?php echo e($product->product_name); ?></a>
                                    </h5>
                                    <span class="product-item__price">$<?php echo e(number_format($product->price, 2)); ?></span>

                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Shop bottom Bar Start -->
                    <div class="shop-bottombar">
                        <div class="pagination"><?php echo e($products->links('client.custom-pagination')); ?></div>
                    </div>

                    <!-- Shop bottom Bar End -->
                </div>
                <!-- Sidebar Section -->
                <div class="col-md-4">
                    <div class="sidebars">
                        <div class="sidebars_inner">
                           <!-- Search Widget Start -->
                                <form action="<?php echo e(route('shop_all')); ?>" method="GET" class="sidebars_search">
                                    <input type="text" name="query" placeholder="Search Here" class="sidebars_search__input" value="<?php echo e(request()->query('query')); ?>">
                                    <button class="sidebars_search__btn" type="submit"><i class="lastudioicon-zoom-1"></i></button>
                                </form>
                                <!-- Search Widget End -->



                             <!-- Category Widget Start -->
                                    <div class="sidebars_widget">
                                        <h3 class="sidebars_widget__title">Category</h3>
                                        <ul class="sidebars_widget__category">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('shop.filterByCategory', ['category_id' => $category->category_id])); ?>"><?php echo e($category->category_name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                             <!-- Category Widget End -->


                             <!-- Price Filter Widget Start -->

                                <div class="sidebars_widget">
                                    <h3 class="sidebars_widget__title">Price Filter</h3>
                                    <div class="range-slider">

                                        <input id="price-range" type="text" name="price" value="" />
                                    </div>
                                    <div class="extra-controls">
                                        <button id="filter-btn" class="extra-controls_btn">Filter</button>
                                        <div class="extra-controls_filter">
                                            <label>Price: </label>

                                            <span id="price-range-value">0 - 50</span>
                                        </div>
                                    </div>
                                </div>




                            <!-- Price Filter Widget End -->

                          <!-- Popular Product Widget Start -->
                          <div class="sidebars_widget">
                            <h3 class="sidebars_widget__title">Popular products</h3>
                            <ul class="sidebars_widget__product">
                                <!-- Single Product Start -->
                                <li class="single-product">
                                    <a href="single-product.html" class="single-product_thumb">
                                        <img src="assets/img/bbb.png" alt="Sidebar-Image">
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
                                        <img src="assets/img/Honey butter toast/Honey butter toast.png" alt="Sidebar-Image">
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

                         <!-- Instagram Widget Start -->
                         <div class="sidebars_widget">
                            <h3 class="sidebars_widget__title">Instagram</h3>
                            <ul class="sidebars_widget__instagram " >
                                <li>
                                    <a class="instagram-thumb" href="#">
                                        <img src="https://i.pinimg.com/564x/80/35/60/803560020f0f772bb12862e1eb2f50c0.jpg"  alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="#">
                                        <img src="https://i.pinimg.com/564x/61/e1/38/61e13860559dac54522ad4c622c37705.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="#">
                                        <img src="https://i.pinimg.com/564x/d0/e5/10/d0e5108a1db4e95a60a13e520531bc13.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="#">
                                        <img src="https://i.pinimg.com/564x/8e/f4/b9/8ef4b9e35ed97c97fde4b0cfb45d5af3.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Instagram Widget End -->

                        <!-- Banner Widget Start -->
                        <div class="sidebars_widget">
                            <a href="shop.html" class="sidebars_widget__banner">
                                <img src="https://i.pinimg.com/564x/fe/69/a9/fe69a9c516fda99fbec304e802be28e2.jpg" alt="banner-Image">

                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                                <div class="banner-content">
                                    <span class="banner-content_title">Check it now</span>
                                </div>
                            </a>
                        </div>
                        <!-- Banner Widget End -->


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
                                        <span class="product-head-price"></span>
                                        <!-- Price End -->

                                    </div>
                                    <!-- Product Head End -->

                                    <!-- Description Start -->
                                    <p class="desc-content"></p>
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

    


    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>



<!-- Link tới CSS cho ionRangeSlider -->
<link href="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/css/ion.rangeSlider.min.css" rel="stylesheet" />

<!-- Script ionRangeSlider -->
<script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>

<!-- Script của bạn -->
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
    // Khởi tạo slider với khoảng giá từ 0 đến 100
    $("#price-range").ionRangeSlider({
        type: "double",
        min: 0,
        max: 50,
        from: 0,
        to: 50,
        prefix: "$",
        onChange: function (data) {
            // Cập nhật giá trị hiển thị khi thay đổi
            $("#price-range-value").text(data.from + " - " + data.to);
        }
    });

    // Bắt sự kiện khi nhấn nút Filter
    $('#filter-btn').click(function() {
        var range = $("#price-range").data("ionRangeSlider");
        var from = range.result.from;
        var to = range.result.to;

        // Redirect tới URL với các tham số lọc
        window.location.href = "?min_price=" + from + "&max_price=" + to;
    });
});

// Script cho QuickView


$(document).on('click', '.labtn-icon-quickview', function() {
    var productId = $(this).data('id');  // Lấy product_id từ thuộc tính data-id
    if (productId) {
        $.ajax({
            url: '/product/details/' + productId,  // Sử dụng productId trong URL
            type: 'GET',
            success: function(response) {
                // Cập nhật modal với thông tin sản phẩm
                $('#exampleProductModal .product-head-price').text('$' + response.price);
                $('#exampleProductModal .desc-content').text(response.description);
                $('#exampleProductModal .product-details-img img').attr('src', '/storage/products/' + response.image);
                $('#exampleProductModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.log('Lỗi:', error);
            }
        });
    } else {
        console.log('Không tìm thấy product_id.');
    }
});

// Script cho QuickView
</script>


</html>
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/client/shop/shop_all.blade.php ENDPATH**/ ?>