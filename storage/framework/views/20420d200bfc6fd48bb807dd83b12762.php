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

</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="<?php echo e(asset('assets/images/bg/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title"><?php echo e($product->product_name); ?></h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li><?php echo e($product->product_name); ?></li>
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
                            <?php if(empty($product->images())): ?>
                                <a class="swiper-slide h-auto" href="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>">
                                    <img class="w-100" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="">
                                </a>
                            <?php else: ?>
                                <a class="swiper-slide h-auto" href="<?php echo e(asset('storage/products/' . $product->image)); ?>">
                                    <img class="w-100" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                </a>
                            <?php endif; ?>
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="swiper-slide h-auto" href="<?php echo e(asset('storage/products/' . $image->image)); ?>">
                                    <img class="w-100" src="<?php echo e(asset('storage/products/' . $image->image)); ?>" alt="<?php echo e(asset('storage/products/' . $product->images()->first()->image)); ?>">
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
                            <?php if(empty($product->images())): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="">

                                </div>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e(asset('storage/products/' . $product->image)); ?>">
                                </div>
                            <?php endif; ?>
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/products/' . $image->image)); ?>" alt="<?php echo e(asset('storage/products/' . $image->image)); ?>">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <p class="desc-content"><?php echo nl2br(e($product->describe)); ?></p>
                        <!-- Description End -->

                        <!-- Product Quantity, Cart Button, Wishlist and Compare Start -->
                        <ul class="product-cta">
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

            <div class="row section-margin">
                <!-- Single Product Tab Start -->
                <div class="col-lg-12 single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="product-desc-row">
                                <div class="product-desc-img">
                                    <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Image">
                                </div>
                                <div class="product-desc-content">
                                    <h5 class="product-desc-title"><?php echo e($product->product_name); ?></h5>
                                    <p class="product-desc-text"><?php echo nl2br(e($product->describe)); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="review">

                                <!-- Review Top Start -->
                                <div class="review-top d-flex mb-4 align-items-center">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="<?php echo e(asset('storage/avatars/' . Auth::user()->avatar)); ?>">
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
                                            <h5 class="title me-1"><?php echo e(Auth::user()->name); ?> - </h5>
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
            
                                            <!-- Comment form Start -->
                                            <form action="#" class="comments-area_form">
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
                                    <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product"></a>
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
                                    <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product"></a>
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
                                    <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product"></a>
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
                                    <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product"></a>
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
                                    <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="Product"></a>
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
    </div><br><br>
    <!-- Product Section End -->

 <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                    updateCartQuantity(response.totalQuantity);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
    });
});

// function updateCartQuantity(totalQuantity) {
//     // Cập nhật số lượng hiển thị
//     $('.badge.bg-primary').text(totalQuantity);
// }

    // Hàm cập nhật hiển thị giỏ hàng mà không load lại trang
    function updateCartView() {
        $.ajax({
            url: "<?php echo e(route('cart.show')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
            method: "GET",
            success: function(response) {
                $('#cart-content').html(response.cart_html); // Cập nhật lại nội dung giỏ hàng
            },
            error: function(xhr) {
                alert('An error occurred while updating the cart.');
            }
        });
    }
        

    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/product-types/single-product.blade.php ENDPATH**/ ?>