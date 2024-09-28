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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <style>
      .hidden-form {
        display: none;
      }
      .form-container {
        padding: 20px;
        border-radius: 8px;
        background-color: #dcdad1;
      }
      .discounted-price {
        color: red; /* Màu sắc cho giá đã gạch ngang (tùy chọn) */
        font-weight: bold; /* Làm đậm giá mới (tùy chọn) */
        }
        .original-price {
        text-decoration: line-through; /* Thêm gạch ngang */
        }

    </style>

</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Slider Section Strat -->
    <div class="slider-section-seven slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-1.jpg); height: 775px !important;">
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
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-2.jpg); height: 775px !important;">
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
                <div class="swiper-slide single-slider-07 animation-style-07 movearea" style="background-image: url(assets/images/slider/slider-bg-7-3.jpg); height: 775px !important;">
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

        <!-- Category Section Start -->
        <div class="category-four category-four_bg section-padding-03" data-bg-image="assets/images/bg/category-four-bg.jpg">
        <div class="container custom-container-five">
            <div class="row row-cols-2 row-cols-lg-4 category-four_wrapper mb-n60">
                <div class="col mb-60">
                    <!-- Single Category Four Start -->
                    <div class="category-four_box">
                        <span class="category-four_border"></span>
                        <a href="shop.html" class="category-four_thumb">
                            <img src="assets/images/category/category-08.jpg" alt="Category-Image">
                        </a>
                        <div class="category-four_content">
                            <a href="shop.html" class="category-four_name">Sweet Breads</a>
                        </div>
                    </div>
                    <!-- Single Category Four End -->
                </div>
                <div class="col mb-60">
                    <!-- Single Category Four Start -->
                    <div class="category-four_box">
                        <span class="category-four_border"></span>
                        <a href="shop.html" class="category-four_thumb">
                            <img src="assets/images/category/category-09.jpg" alt="Category-Image">
                        </a>
                        <div class="category-four_content">
                            <a href="shop.html" class="category-four_name">Baked Goods</a>
                        </div>
                    </div>
                    <!-- Single Category Four End -->
                </div>
                <div class="col mb-60">
                    <!-- Single Category Four Start -->
                    <div class="category-four_box">
                        <span class="category-four_border"></span>
                        <a href="shop.html" class="category-four_thumb">
                            <img src="assets/images/category/category-10.jpg" alt="Category-Image">
                        </a>
                        <div class="category-four_content">
                            <a href="shop.html" class="category-four_name">Cakes</a>
                        </div>
                    </div>
                    <!-- Single Category Four End -->
                </div>
                <div class="col mb-60">
                    <!-- Single Category Four Start -->
                    <div class="category-four_box">
                        <span class="category-four_border"></span>
                        <a href="shop.html" class="category-four_thumb">
                            <img src="assets/images/category/category-11.jpg" alt="Category-Image">
                        </a>
                        <div class="category-four_content">
                            <a href="shop.html" class="category-four_name">Cheese Cakes </a>
                        </div>
                    </div>
                    <!-- Single Category Four End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Category Section End -->

    <!-- Testimonial Five Section Start -->
<div class="testimonial-five_bg section-padding-03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-five_inner">
                    <blockquote class="testimonial-five_blockquote">"Savor the natural flavors, nurture your health every day!". We always bring our customers the best food for their health.</blockquote>
                    <span class="testimonial-five_border"></span>
                    <span class="testimonial-five_author">
                        <button id="healthSuggestionBtn" style="margin-top: 0px !important;" class="slider-content__btn btn btn-primary btn-hover-black">
                            Gợi ý món ăn theo sức khỏe
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div id="healthForm" class="hidden-form mt-4 form-container" >
            <form >
                <div class="row">
                    <div class="col-md-6 mb-3" style="float: right;">
                        <label for="heightInput" class="form-label">Height (cm):</label>
                        <input width="100%" type="number" id="heightInput" min="0" maxlength="3" step="0.1" placeholder="Input Height (cm)" />
                        <label for="weightInput" class="form-label pt-5">Weight (kg):</label>
                        <input width="100%" type="number" id="weightInput" min="0" maxlength="3" step="0.1"placeholder="Input Weight (kg)" />
                        <label for="weightInput" class="form-label pt-5">BMI index:</label>
                        <h4><span id="bmiResult">No data available yet.</span></h4>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label class="form-label">Select health status:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="heath_dump" value=""
                                id="heath_0"
                                <?php echo e(request('heath_dump') ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="heath_0">
                                Normal
                                </label>
                            </div>
                            <?php $__currentLoopData = $heathyCatalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="heath_id[]" value="<?php echo e($catalog->heath_id); ?>"
                                id="heath_<?php echo e($catalog->heath_id); ?>"
                                <?php echo e((is_array(request('heath_id')) && in_array($catalog->heath_id, request('heath_id'))) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="heath_<?php echo e($catalog->heath_id); ?>">
                                <?php echo e($catalog->heath_catalog); ?>

                                </label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center" style="margin-top: -5%;">
                            <button id="btnFilter" type="submit" class="slider-content__btn btn btn-primary btn-hover-black">Filter</button>
                        </div>   
                    </div>
                </div>
            </form>
        </div>
    </div>
        <div class="testimonial-five_shape01">
            <img class="" src="assets/images/testimonial/testimonial-shape01.png" alt="Shape-Image">
        </div>
        <div class="testimonial-five_shape02">
            <img class="" src="assets/images/testimonial/testimonial-shape02.png" alt="Shape-Image">
        </div>
</div>
    <!-- Testimonial Five Section End -->

<!-- Product Section Strat -->
<div
  class="section-padding-03 pt-0"
  id="a1"
  style="padding-top: 35px !important; padding-bottom: 80px !important;">
  <div class="container" id="a2">
    <div class="row">
      <div class="col-12">
        <!-- Section Title Strat -->
        <div class="section-title">
          <h2 class="section-title__title">
            Products suitable for your health _______________ <a href="shop.html" class="read-more"
            ><span>show more</span
            ></a></h2>
        </div>
        <!-- Section Title End -->
      </div>
    </div>
    <!-- Product Active Strat -->
    <div class="product-active">
      <div class="swiper">
        <div id="productList" class="swiper-wrapper">
          <?php if($products->isEmpty()): ?>
          <p>No products found.</p>
          <?php else: ?> 
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="swiper-slide">
            <!-- Product Item Start -->
            <div class="product-item text-center">
              <?php if($product->price>5): ?>
              <!-- TODO:CHEAT -->
              <div
                class="product-item__badge"
                style="background-color: red !important"
              >
                Best Seller
              </div>
              <?php endif; ?>
              <div class="product-item__image border w-100">
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>"
                  ><img
                    width="350"
                    height="350"
                    src="<?php echo e(asset('storage/products/' . $product->image)); ?>"
                    alt="Product"
                /></a>
                <ul class="product-item__meta">
                 <li class="product-item__meta-action">
                    <a
                      class="labtn-icon-quickview"
                      href="#"
                      data-bs-tooltip="tooltip"
                      data-bs-placement="top"
                      title=""
                      data-bs-original-title="Quick View"
                      aria-label="Quick View"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleProductModal"
                    ></a>
                  </li>
                  <li class="product-item__meta-action">
                    <a
                      class="shadow-1 labtn-icon-cart add-to-cart"
                      href="#"
                      data-product-id="<?php echo e($product->product_id); ?>"
                    ></a>
                  </li>
                  <li class="product-item__meta-action">
                    <a
                      class="shadow-1 labtn-icon-wishlist"
                      href="#"
                      data-bs-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Add to wishlist"
                      data-bs-toggle="modal"
                      data-bs-target="#modalWishlist"
                    ></a>
                  </li>

                </ul>
              </div>
              <div class="product-item__content pt-5">
                <h5 class="product-item__title">
                  <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>"><?php echo e($product->product_name); ?></a>
                </h5>
                <?php if($product->price != $product->getDiscountedPrice()): ?>
                    <span class="original-price"><?php echo e(formatPriceVND($product->price)); ?></span>
                    <span class="discounted-price">$<?php echo e(number_format($product->getDiscountedPrice(), 2)); ?></span> <!-- Giá mới -->
                <?php else: ?>
                <span class="product-item__price"
                  ><?php echo e(formatPriceVND($product->price)); ?></span
                >
                <?php endif; ?>
              </div>
            </div>
            <!-- Product Item End -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <?php endif; ?>
        </div>

        <div class="swiper-button-next">
          <i class="lastudioicon-arrow-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="lastudioicon-arrow-left"></i>
        </div>
      </div>
    </div>
    <!-- Product Active End -->
  </div>
</div>
<!-- Product Section End -->


    <!-- Product Section Strat -->
    <div class="section-padding-03 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Strat -->
                    <div class="section-title">
                        <h2 class="section-title__title">Most recently purchased product _______________ <a href="shop.html" class="read-more"
                        ><span>show more</span
                        ></a></h2>
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
                                    <a href="single-product.html"><img width="350" height="350" src="img/Baked Goods/Apple Pie/Apple Pie.png" alt="Product"></a>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a
                                            class="labtn-icon-quickview"
                                            href="#"
                                            data-bs-tooltip="tooltip"
                                            data-bs-placement="top"
                                            title=""
                                            data-bs-original-title="Quick View"
                                            aria-label="Quick View"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleProductModal"
                                            ></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
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
                                            <a
                                            class="shadow-1 labtn-icon-wishlist"
                                            href="#"
                                            data-bs-tooltip="tooltip"
                                            data-bs-placement="top"
                                            title="Add to wishlist"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalWishlist"
                                            ></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#modalCart"></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a>
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




    <!-- Product Deal Section Start -->
        <div class="section-padding-03 deal-two_bg" data-bg-image="assets/images/bg/product-deal-bg.jpg">
            <div class="container custom-container-two">
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center mb-n30">
                <div class="col mb-30">
                    <div class="deal-two_images">
                        <img class="deal-two_thumb" src="assets/images/product/product-deal.png" alt="Deal-Image">
                        <img class="deal-two_sale" src="assets/images/shape/hot-sale.png" alt="Sale-Image">
                    </div>
                </div>
                <div class="col mb-30">
                    <div class="deal-two_content">
                        <span class="deal-two_subtitle">Deal of the day</span>
                        <h4 class="deal-two_title">Sesame Rye Bread</h4>
                        <div class="countdown-area">
                            <div class="countdown-wrapper" data-countdown="2028/12/28"></div>
                        </div>
                        <span class="deal-two_price"><span>$</span>4.99</span>

                        <ul class="product-item__meta deal-two_meta">
                            <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                            <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                            <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- Product Deal Section End -->

</div>
<!-- Product Section Start -->
<div class="section-padding-03 custom-container-four" >
  <div class="product-row">
    <div
      class="product-wrapper pe-md-5 pe-lg-6 pe-xl-8 pe-xxl-11 order-md-1 order-2"
    >
      <!-- Section Title Strat -->
      <div class="section-title-05">
        <h5 class="section-title-05__title"><span>Discount Products</span></h5>
        <a href="shop.html" class="read-more"
          ><span>show more</span
          ><i class="lastudioicon lastudioicon-right-arrow"></i
        ></a>
      </div>
      <!-- Section Title End -->

      <div class="product-active-two">
        <div class="swiper">
          <div class="swiper-wrapper">
            <!-- swiper-slide start -->
            <?php if($discount_products->isEmpty()): ?>
            <p>No discount products available.</p>
            <?php else: ?>
            <?php $__currentLoopData = $discount_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
              <!-- Product Item Start -->
              <div class="product-item product-item-05 border text-center">
                <div
                    class="product-item__badge"
                    style="background-color: red !important"
                    >
                    <h6 style="color: white;"> <?php echo e($disproduct->getDiscountPercent()); ?> %</h6>
                    </div>
                <div class="product-item__image">
                  <a href="<?php echo e(route('product.single', ['product' => $disproduct->product_id])); ?>"
                    ><img
                      width="250"
                      height="250"
                      src="<?php echo e(asset('storage/products/' . $disproduct->image)); ?>"
                      alt="Product"
                  /></a>
                </div>
                <div class="product-item__content">
                  <h5 class="product-item__title">
                    <a href="<?php echo e(route('product.single', ['product' => $disproduct->product_id])); ?>"
                      ><?php echo e($disproduct->product_name); ?></a
                    >   
                  </h5>
                    <span class="product-item__price">
                        <span class="original-price"><?php echo e(formatPriceVND($disproduct->price)); ?></span>
                        <span class="discounted-price">$<?php echo e(number_format($disproduct->getDiscountedPrice(), 2)); ?></span> <!-- Giá mới -->
                    </span>
                 
                </div>
                <ul class="product-item__meta">
                  <li class="product-item__meta-action">
                    <a
                      class="labtn-icon-quickview"
                      href="#"
                      data-bs-tooltip="tooltip"
                      data-bs-placement="top"
                      title=""
                      data-bs-original-title="Quick View"
                      aria-label="Quick View"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleProductModal"
                    ></a>
                  </li>
                  <li class="product-item__meta-action">
                    <a
                      class="shadow-1 labtn-icon-cart add-to-cart"
                      href="#"
                      data-product-id="<?php echo e($disproduct->product_id); ?>"
                    ></a>
                  </li>
                  <li class="product-item__meta-action">
                    <a
                      class="labtn-icon-wishlist"
                      href="#"
                      data-bs-tooltip="tooltip"
                      data-bs-placement="top"
                      title=""
                      data-bs-original-title="Add to wishlist"
                      aria-label="Add to wishlist"
                      data-bs-toggle="modal"
                      data-bs-target="#modalWishlist"
                    ></a>
                  </li>
                </ul>
              </div>
              <!-- Product Item End -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
            <!-- swiper-slide end-->
          </div>
        </div>
        <div class="swiper-button-next">
          <i class="lastudioicon-arrow-right"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="lastudioicon-arrow-left"></i>
        </div>
      </div>
    </div>
    <div class="boxbanner-wrapper order-md-2 order-1">
      <!-- Ad Banner Start -->
      <a
        href="single-product.html"
        class="boxbanner-bg boxbanner"
        data-bg-image="assets/images/banner/add-banner.jpg"
      >
        <span class="boxbanner-subtitle">only buy in stores</span>
        <span class="boxbanner-title">Discount</span>
        <span class="boxbanner-discount">15%</span>
        <div class="boxbanner-btn-area">
          <span class="boxbanner-btn"
            >Store Location <i class="lastudioicon lastudioicon-right-arrow"></i
          ></span>
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
                                        <a href="single-product.html"><img width="250" height="250" src="img/product-8-1.png" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title"><a href="single-product.html">Raisin Bread</a></h5>
                                        <span class="product-item__price">$4.99</span>
                                    </div>
                                    <ul class="product-item__meta">
                                        <li class="product-item__meta-action"><a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View" data-bs-toggle="modal" data-bs-target="#exampleProductModal"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>
                                        <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
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
                                            <li class="product-item__meta-action"><a class="labtn-icon-cart" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Select options" aria-label="Select options" data-bs-toggle="modal" data-bs-target="#modalCart"></a></li>

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
            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1 mb-n30" style="margin-bottom: 10px !important;">
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

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                        <?php if($product->images->isEmpty()): ?>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product">
                                            </a>
                                        <?php else: ?>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Product">
                                            </a>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a class="swiper-slide h-auto" href="#/">
                                                <img class="w-100" src="<?php echo e(asset('storage/products/' . $image->image)); ?>">
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                        <?php if($product->images->isEmpty()): ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product">
                                            </div>
                                        <?php else: ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Product">
                                            </div>
                                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo e(asset('storage/products/' . $image->image)); ?>" alt="Product">
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                
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
                                        <span class="product-head-price"><?php echo e(formatPriceVND($product->price)); ?></span>
                                        <!-- Price End -->

                                    </div>
                                    <!-- Product Head End -->

                                    <!-- Description Start -->
                                    <p class="desc-content"><?php echo nl2br(e($product->describe)); ?></p>
                                    <!-- Description End -->

                                    <!-- Product Coler Variation Start -->
                                    <div class="product-color mb-2">

                                    </div>
                                    <!-- Product Coler Variation End -->

                                    <!-- Product Size Start -->
                                    <div class="product-size mb-5">
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
                                                <a class="btn btn-dark btn-hover-primary add-to-cart" href="#/" data-bs-toggle="modal" data-bs-target="#modalCart" data-product-id="<?php echo e($product->product_id); ?>">Add to cart</a>
                                            </div>
                                            </div>
                                            <!-- Cart Button End -->
                                        </li>
                                        <li>
                                            <!-- Action Button Start -->
                                            <div class="actions">
                                                <a href="compare.html" title="Compare" class="action compare"><i class="lastudioicon-heart-2"></i></a>
                                            </div>
                                            <!-- Action Button End -->
                                        </li>
                                    </ul>
                                    <!-- Product Quantity, Cart Button, Wishlist and Compare End -->

                                    <!-- Product Meta Start -->
                                    <ul class="product-meta">
                                        <li class="product-meta-wrapper">
                                            <span class="product-meta-name">Remaining quantity:</span>
                                            <span class="product-meta-detail"><?php echo e($product->inventory); ?></span>
                                        </li>
                                        <li class="product-meta-wrapper">
                                            <span class="product-meta-name">category:</span>
                                            <span class="product-meta-detail">
                                                <a href="#"> <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($catalog->category_name); ?><?php echo e(!$loop->last ? ', ' : ''); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a>
                                            </span>
                                        </li>
                                        <li class="product-meta-wrapper">
                                            <span class="product-meta-name">Discount:</span>
                                            <span class="product-meta-detail">
                                                <a href="#"><?php $__currentLoopData = $product->discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($discount->discount *100); ?> %
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>

      document
        .getElementById("healthSuggestionBtn")
        .addEventListener("click", function () {
          var form = document.getElementById("healthForm");
          form.classList.toggle("hidden-form");
        });

            // Bắt sự kiện thay đổi trạng thái của các checkbox
    $('input[name="heath_id[]"]').on('change', function() {
        $.ajax({
            url: $('#filterForm').attr('action'),
            type: 'GET',
            data: $('#filterForm').serialize(),
            success: function(response) {
                $('#productList').html($(response).find('#productList').html());
            },
            error: function(xhr, status, error) {
                console.log('Lỗi:', error);
                alert('Có lỗi xảy ra trong quá trình lọc sản phẩm.');
            }
        });
    });


    // Hàm để kiểm tra và cập nhật trạng thái của checkbox
    function updateHeathStatus(bmi) {
        // Lấy checkbox "Thừa Cân" và "Thiếu Cân"
        var thuaCanCheckbox = $('input[name="heath_id[]"][value="4"]');// 4 là thừa cân
        var thieuCanCheckbox = $('input[name="heath_id[]"][value="5"]');// 5 là thiếu cân

        // Xử lý tự động check/uncheck dựa vào BMI
        if (bmi >= 25) {
            thuaCanCheckbox.prop('checked', true);
            thieuCanCheckbox.prop('checked', false);
        } else if (bmi < 18.5) {
            thieuCanCheckbox.prop('checked', true);
            thuaCanCheckbox.prop('checked', false);
        } else {
            thuaCanCheckbox.prop('checked', false);
            thieuCanCheckbox.prop('checked', false);
        }
    }

    // Bắt sự kiện khi người dùng nhập chiều cao và cân nặng để tính BMI
    $('#heightInput, #weightInput').on('input', function() {

        var height = parseFloat($('#heightInput').val());
        var weight = parseFloat($('#weightInput').val());
        
        if (height > 0 && weight > 0 && height <= 500 && weight <= 500) {
            height = height / 100;
            var bmi = (weight / (height * height)).toFixed(2);
            $('#bmiResult').text(bmi);
            
            // Cập nhật trạng thái checkbox "Thừa Cân" và "Thiếu Cân"
            updateHeathStatus(bmi);
        } else {
            
            $('#bmiResult').text('No data available yet.');
            
            // Nếu không hợp lệ, bỏ chọn cả hai checkbox
            $('input[name="heath_id[]"][value="Thừa Cân"]').prop('checked', false);
            $('input[name="heath_id[]"][value="Thiếu Cân"]').prop('checked', false);
        }
    });

    // Hàm chung để xử lý sự kiện keydown cho cả chiều cao và cân nặng
    function handleKeyDown(event, maxValue) {
        // Cho phép các phím điều khiển như: backspace, delete, tab, escape, enter
        var allowedKeys = [8, 9, 27, 13, 46]; // Backspace, Tab, Escape, Enter, Delete

        // Cho phép các phím mũi tên trái/phải và các tổ hợp phím điều khiển (Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X)
        if (allowedKeys.indexOf(event.keyCode) !== -1 ||
            (event.keyCode === 65 && event.ctrlKey === true) ||  // Ctrl+A
            (event.keyCode === 67 && event.ctrlKey === true) ||  // Ctrl+C
            (event.keyCode === 86 && event.ctrlKey === true) ||  // Ctrl+V
            (event.keyCode === 88 && event.ctrlKey === true) ||  // Ctrl+X
            (event.keyCode >= 35 && event.keyCode <= 39)) {       // Mũi tên trái/phải
            return; // Cho phép các phím điều khiển
        }

        if (value.split('.').length > 2) {
            $(this).val(value.slice(0, -1)); // Ngăn không cho nhập thêm dấu chấm
            return;
        }

        // Lấy giá trị hiện tại sau khi nhập
        var currentValue = $(this).val();

        // Kiểm tra nếu giá trị không phải là số hoặc vượt quá maxValue
        var parsedValue = parseFloat(currentValue);

        if (!isNaN(parsedValue) && parsedValue > maxValue) {
            event.preventDefault(); // Chặn không cho nhập nếu giá trị vượt quá maxValue
        }
    }
    
     // Áp dụng hàm xử lý sự kiện cho cả chiều cao và cân nặng
     $('#heightInput').on('keydown', function(event) {
        handleKeyDown.call(this, event, 500); // Giới hạn chiều cao tối đa là 3 mét
    });

    $('#weightInput').on('keydown', function(event) {
        handleKeyDown.call(this, event, 500); // Giới hạn cân nặng tối đa là 500 kg
    });

    document.getElementById('btnFilter').addEventListener('click', function() {
        sessionStorage.setItem('scrollToA1', 'true');
    });
    
    window.addEventListener('load', function() {
        document.getElementById('a2').style.display = 'none';  // Show the product section
        if (sessionStorage.getItem('scrollToA1') === 'true') {
            document.getElementById('a2').style.display = 'block';  // Show the product section
            document.getElementById('a1').scrollIntoView({
                behavior: 'smooth'
            });
            // Xóa cờ sau khi đã cuộn xong để không lặp lại trong lần tải sau
            sessionStorage.removeItem('scrollToA1');
        }
    });

    
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/home.blade.php ENDPATH**/ ?>