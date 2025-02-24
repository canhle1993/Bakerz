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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

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
<style>
    .star-rating {
        direction: rtl;
        display: inline-flex;
    }
    .star-rating input {
        display: none;
    }
    .star-rating label {
        font-size: 2rem;
        color: #ddd;
        cursor: pointer;
        transition: color 0.2s ease-in-out;
    }
    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #f5c518;
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
                            <?php if($product->images->isEmpty()): ?>
                                <a class="swiper-slide h-auto" href="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>">
                                    <img class="w-100" src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="">
                                </a>
                            <?php else: ?>
                                <a class="swiper-slide h-auto" href="<?php echo e(asset('storage/products/' . $product->image)); ?>">
                                    <img class="w-100" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                </a>
                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="swiper-slide h-auto" href="<?php echo e(asset('storage/products/' . $image->image)); ?>">
                                        <img class="w-100" src="<?php echo e(asset('storage/products/' . $image->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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
                                    <img src="<?php echo e(asset('assets/images/product/product-8-500x625.jpg')); ?>" alt="">
                                </div>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                </div>
                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo e(asset('storage/products/' . $image->image)); ?>" alt="<?php echo e($product->product_name); ?>">
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
                <h3 class="product-head-name"><?php echo e($product->product_name); ?></h3><br>
                    <!-- Product Head Start -->
                    <div class="product-head mb-3">

                        <!-- Price Start -->
                        <span class="product-item__price">
                            <?php if($product->price != $product->getDiscountedPrice()): ?>
                            <del><?php echo e(formatPriceVND($product->price)); ?></del>
                            <!-- Giá gốc -->
                        
                            <strong style="color: red;"
                            >$<?php echo e(number_format($product->getDiscountedPrice(),2)); ?></strong
                            >
                            <!-- Giá sau khi giảm -->
                            <?php else: ?> <?php echo e(formatPriceVND($product->price)); ?>

                            <!-- Giá không giảm -->
                            <?php endif; ?>
                        </span>
                        <!-- Price End -->
                         <div>
                                <!-- Hiển thị thông báo -->
                            <?php if(session('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(session('error')); ?>

                                </div>
                            <?php endif; ?>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                         </div>

                        <!-- Rating Start -->
                        <div class="review-rating">
                            <span class="review-rating-bg">
                                <span class="review-rating-active"></span>
                            </span>
                            <a href="#/" class="review-rating-text">(<?php echo e($product->reviews->count()); ?> Review<?php echo e($product->reviews->count() > 1 ? 's' : ''); ?>)</a>
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
                                    <a class="btn btn-dark btn-hover-primary add-to-cart"  data-product-id="<?php echo e($product->product_id); ?>">Add to cart</a>
                                </div>
                            </div>
                            <!-- Cart Button End -->
                        </li>
                        <li>
                            <!-- Action Button Start -->
                            <div class="actions">
                                
                                <a href="#/" title="Wishlist" class="action compare labtn-icon-wishlist" data-bs-toggle="modal" data-product-id="<?php echo e($product->product_id); ?>" ><i class="lastudioicon-heart-2"></i></a>
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
                            <span class="product-meta-name">Category:</span>
                            <span class="product-meta-detail">
                                <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($catalog->category_name); ?><?php echo e(!$loop->last ? ', ' : ''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </span>
                        </li>
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">Discount:</span>
                            <span class="product-meta-detail">
                                <?php $__currentLoopData = $product->discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($discount->discount * 100); ?>%
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </span>
                        </li>
                    </ul>
                    <!-- Product Meta End -->

                    <!-- Product Share Start -->
                    <div class="product-share">
                    <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($socialMedia->link); ?>" target="_blank">
                            <!-- Tùy chỉnh icon dựa trên name hoặc thêm icon chung cho tất cả -->
                            <?php if(strpos($socialMedia->name, 'Facebook') !== false): ?>
                                <i class="lastudioicon-b-facebook"></i>
                            <?php elseif(strpos($socialMedia->name, 'Twitter') !== false): ?>
                                <i class="lastudioicon-b-twitter"></i>
                            <?php elseif(strpos($socialMedia->name, 'Pinterest') !== false): ?>
                                <i class="lastudioicon-b-pinterest"></i>
                            <?php elseif(strpos($socialMedia->name, 'Instagram') !== false): ?>
                                <i class="lastudioicon-b-instagram"></i>
                            <?php else: ?>
                                <i class="lastudioicon-b-globe"></i> <!-- Biểu tượng mặc định -->
                            <?php endif; ?>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Product Share End -->

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
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews (<?php echo e($product->reviews->count()); ?>)</a>
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
                            <h4>Reviews</h4>
                            <?php if($product->reviews->isEmpty()): ?>
                                <p>There are no reviews yet. Be the first to review this product!</p>
                            <?php else: ?>
                            <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="review-top d-flex mb-4 align-items-center pt-5" id="comment-<?php echo e($review->ID); ?>">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="review_thumb">
                                            <img alt="review images" src="<?php echo e(asset('storage/avatars/' . $review->user->avatar)); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="review_details ms-3">
                                            <div class="review-rating mb-2">
                                                <span class="review-rating-bg">
                                                    <span class="review-rating-active review-rating-active2" data-review="<?php echo e($review->ratestar); ?>"></span>
                                                </span>
                                            </div>
                                            <div class="review-title-date d-flex">
                                                <h5 class="title me-1"><?php echo e($review->CreatedBy); ?> - </h5>
                                                <span><?php echo e(\Carbon\Carbon::parse($review->CreatedDate)->format('M d, Y')); ?></span>
                                            </div>
                                            <p><?php echo nl2br(e($review->comment)); ?></p>

                                            <!-- Hiển thị tất cả các câu trả lời -->
                                            <?php $__currentLoopData = $review->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="reply mt-3" style="position: relative; left: 30px; top: -15px;">
                                                <p><strong class="text-primary">Bakerz Bite: </strong> - <?php echo e($reply->created_at->format('M d, Y H:i')); ?></p>
                                                    <p><?php echo nl2br(e($reply->reply)); ?></p>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <!-- Form trả lời bình luận -->
                                            <?php if(Auth::check() && (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)): ?>
                                                <form action="<?php echo e(route('reviews.reply', ['id' => $review->ID])); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <textarea name="reply" class="form-control mb-2" placeholder="Enter your answer"></textarea>
                                                    <button type="submit" class="btn btn-dark btn-hover-primary">Send</button>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                        </div>
                            <!-- Form để thêm đánh giá mới -->
                            <?php if(auth()->guard()->check()): ?>
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 col-custom">
                                        <h5 class="title mb-2">Add a review</h5>

                                        <form action="<?php echo e(route('reviews.store', ['product_id' => $product->product_id])); ?>" method="POST" class="comments-area_form">
                                            <?php echo csrf_field(); ?>
                                            <div class="mb-3">
                                            <?php if($errors->has('ratestar')): ?>
                                                <div class="alert alert-danger">
                                                    <strong><?php echo e($errors->first('ratestar')); ?></strong>
                                                </div>
                                            <?php endif; ?>
                                                <label for="ratestar">Rating (1-5):</label>
                                                <div class="star-rating">
                                                    <input type="radio" id="star5" name="ratestar" value="5" checked required />
                                                    <label for="star5" title="5 stars">★</label>
                                                    <input type="radio" id="star4" name="ratestar" value="4" />
                                                    <label for="star4" title="4 stars">★</label>
                                                    <input type="radio" id="star3" name="ratestar" value="3" />
                                                    <label for="star3" title="3 stars">★</label>
                                                    <input type="radio" id="star2" name="ratestar" value="2" />
                                                    <label for="star2" title="2 stars">★</label>
                                                    <input type="radio" id="star1" name="ratestar" value="1" />
                                                    <label for="star1" title="1 star">★</label>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="comment">Comment:</label>
                                                <textarea name="comment" class="form-control" rows="3" required></textarea>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-dark btn-hover-primary">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="alert alert-warning">
                            You need to <a href="<?php echo e(route('login')); ?>" class="text-danger">log in</a> to rate this product.
                            </div>
                        <?php endif; ?>

                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>
    </div>
</div><br><br>
<!-- Single Product Section End -->

    <!-- Product Section Strat -->
    <div class="section-padding-03 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Strat -->
                <div class="section-title">
                    <h2 class="section-title__title">Related Products</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <!-- Product Active Strat -->
        <div class="product-active">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php if($relatedProducts->isNotEmpty()): ?>
                        <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item text-center">
                                    <!-- <div class="product-item__badge">Hot</div> -->
                                    <div class="product-item__image border w-100">
                                        <a href="<?php echo e(route('product.single', ['product' => $relatedProduct->product_id])); ?>">
                                            <img width="350" height="350" src="<?php echo e(asset('storage/products/' . $relatedProduct->image)); ?>" alt="<?php echo e($relatedProduct->product_name); ?>">
                                        </a>
                                        <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a
                                            class="shadow-1 labtn-icon-cart add-to-cart"
                                            href="#"
                                            data-product-id="<?php echo e($relatedProduct->product_id); ?>"
                                            ></a>
                                        </li>
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-wishlist" data-product-id="<?php echo e($relatedProduct->product_id); ?>" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content pt-5">
                                        <h5 class="product-item__title"><a href="<?php echo e(route('product.single', ['product' => $relatedProduct->product_id])); ?>"><?php echo e($relatedProduct->product_name); ?></a></h5>
                                        <span class="product-item__price">
                                        <?php if($relatedProduct->price != $relatedProduct->getDiscountedPrice()): ?>
                                        <del><?php echo e(formatPriceVND($relatedProduct->price)); ?></del>
                                        <!-- Giá gốc -->
                                    
                                        <strong style="color: red;"
                                        >$<?php echo e(number_format($relatedProduct->getDiscountedPrice(),2)); ?></strong
                                        >
                                        <!-- Giá sau khi giảm -->
                                        <?php else: ?> <?php echo e(formatPriceVND($relatedProduct->price)); ?>

                                        <!-- Giá không giảm -->
                                        <?php endif; ?>
                                    </span>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p>No related products found.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
        </div>
    </div>
</div>
<br><br>
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
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();
            var headers = $(".header-sticky, .header-sticky-02, .header-sticky-03, .header-sticky-4, .header-sticky-06");
            var logoImg = $(".header-sticky .header-logo img");
            
            if (scroll <= 0) {
                headers.removeClass("sticky");

                // Chỉ thay đổi src nếu khác với giá trị hiện tại
                if (logoImg.attr("src") !== "<?php echo e(asset('assets/images/logo-white.svg')); ?>") {
                    logoImg.attr("src", "<?php echo e(asset('assets/images/logo-white.svg')); ?>");
                }
            } else {
                headers.addClass("sticky");

                // Chỉ thay đổi src nếu khác với giá trị hiện tại
                if (logoImg.attr("src") !== "<?php echo e(asset('assets/images/logo.svg')); ?>") {
                    logoImg.attr("src", "<?php echo e(asset('assets/images/logo.svg')); ?>");
                }
            }
        });
        $(document).ready(function() {
            $('.review-rating-active').each(function() {
                var avgStarRating1 = "<?php echo e($product->reviews->avg('ratestar') * 20); ?>";

                $(this).css('width', avgStarRating1 + '%');
            });
            $('.review-rating-active2').each(function() {
                var getData = $(this).attr('data-review');
                var avgStarRating2 = (getData / 5) * 100;
                console.log(avgStarRating2);
                $(this).css('width', avgStarRating2 + '%');

            });
        });
        $('.quickview').on('click', function(e) {
            e.preventDefault();
            var productid = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id

            // Gọi AJAX để lấy dữ liệu sản phẩm
            $.ajax({
                url: "<?php echo e(route('product.details', ':id')); ?>".replace(':id', productid), // Thay :id bằng product ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var product = response.product;  // Đối tượng product từ server
                        
                        // Đổ dữ liệu vào modal
                        $('#modal-single-product .product-head-price').text(product.price);  // Đổ giá sản phẩm
                        $('#modal-single-product .desc-content').html(product.describe);  // Đổ mô tả sản phẩm
                        
                        // Cập nhật hình ảnh sản phẩm
                        var imagesHtml = '';
                        var productImage = "<?php echo e(asset('storage/products/')); ?>/" + product.image; // Sử dụng asset() của Laravel để lấy đường dẫn tương đối

                        imagesHtml += '<div class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + productImage + '" alt="Product"></div>';
                        product.images.forEach(function(image) {
                            var imageUrl = "<?php echo e(asset('storage/products')); ?>/" + image.image; // Access the correct field inside image object
                            imagesHtml += '<div  class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + imageUrl + '" alt="Product"></div>';
                        });

                        $('.single-product-vertical-tab .swiper-wrapper').html(imagesHtml);
                        $('.product-thumb-vertical .swiper-wrapper').html(imagesHtml);
                        
                        // Hiển thị modal
                        $('#exampleProductModal').modal('show');
                    } else {
                        alert(response.message); // Hiển thị thông báo lỗi nếu có
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error); // Xử lý lỗi
                }
            });
        });

        function updateonlineUser() {
            
        }

            $(document).on('click', '.labtn-icon-wishlist', function(e) {
            e.preventDefault();

            var productId = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id

            $.ajax({
                url: "<?php echo e(route('add.to.wishlist')); ?>",
                method: 'POST',
                data: {
                    product_id: productId,
                    _token: "<?php echo e(csrf_token()); ?>",  // Token bảo mật
                },
                success: function(response) {
                    if (response.status === 'success') {
                        var modalWishlist = new bootstrap.Modal(document.getElementById('modalWishlist'));
                        modalWishlist.show();
                    } else {
                        
                    }
                },
                error: function(xhr) {
                    console.error('Error:', xhr);
                }
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/product-types/single-product.blade.php ENDPATH**/ ?>