<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

    <!-- Breadcrumb Section Start --->
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



<!-- Single Product Section Start -->
<div class="section section-margin-top section-padding-03">
    <div class="container">
        <div class="row">
            <!-- Hình ảnh sản phẩm -->
            <div class="col-lg-6">
                <div class="product-details-img d-flex overflow-hidden flex-row">
                    <div class="swiper-wrapper popup-gallery" id="popup-gallery">
                        <a class="swiper-slide h-auto" href="<?php echo e(asset('storage/products/' . $product->image)); ?>">
                            <img class="w-100" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="col-lg-6">
                <div class="product-summery position-relative">
                    <!-- Tên và giá sản phẩm -->
                    <div class="product-head mb-3">
                        <h1><?php echo e($product->product_name); ?></h1>
                        <span class="product-head-price"><?php echo e(number_format($product->price, 0, ',', '.')); ?> $</span>
                    </div>

                    <!-- Rating Start -->
                    <div class="review-rating">
                        <span class="review-rating-bg">
                            <span class="review-rating-active" style="width: 90%"></span>
                        </span>
                        <a href="#/" class="review-rating-text">(1 Review)</a>
                    </div>
                    <!-- Rating End -->

                    <!-- Mô tả sản phẩm -->
                    <p class="desc-content mt-5"><?php echo e($product->describe); ?></p>

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
                                        <a class="btn btn-dark btn-hover-primary" href="#/" data-bs-toggle="modal" data-bs-target="#modalCart">Add to cart</a>
                                    </div>
                                </div>
                                <!-- Cart Button End -->
                            </li>

                            <li>
                                <!-- Action Button Start -->
                                <div class="actions">
                                    <a href="#/" title="Wishlist" class="action compare" data-bs-toggle="modal" data-bs-target="#modalWishlist"><i class="lastudioicon-heart-2"></i></a>
                                </div>
                                <!-- Action Button End -->
                            </li>
                    </ul>

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


                    <!-- Meta thông tin -->
                    <ul class="product-meta">
                        <li>
                            <span class="product-meta-name">Category:</span>
                            <span class="product-meta-detail">
                                <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($catalog->category_name); ?><?php echo e(!$loop->last ? ', ' : ''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </span>
                        </li>
                    </ul>
                </div>
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
                                <img src="https://i.pinimg.com/564x/7f/70/f1/7f70f117d86a60e29d347bf0328f365b.jpg" alt="Image">
                            </div>
                            <div class="product-desc-content">
                                <h5 class="product-desc-title">We Love Cake</h5>
                                <p class="product-desc-text">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Pellentesque vulputate quam a quam volutpat, sed ullamcorper erat commodo. Vestibulum sit amet ipsum vitae mauris mattis vulputate lacinia nec neque. Aenean quis consectetur nisi, ac interdum elit</p>
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
                                    <img alt="review images" src="assets/images/avatar/testimoial-1.png">
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
                                        <h5 class="title me-1">Admin - </h5>
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
                                        <p class="comments-area_text">Your email address will not be published. Required fields are marked *</p>
                                        <!-- Comment form Start -->
                                        <form action="#" class="comments-area_form">
                                            <div class="row">

                                                <!-- Input Name Start -->
                                                <div class="col-md-6 mb-3">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input class="comments-area_input" type="text" required="required" name="Name">
                                                </div>
                                                <!-- Input Name End -->

                                                <!-- Input Email Start -->
                                                <div class="col-md-6 mb-3">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input class="comments-area_input" type="text" required="required" name="email">
                                                </div>
                                                <!-- Input Email End -->

                                            </div>
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



    <!-- Scroll Top Start -->
    <a href="#/" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    </script>

</body>


</html>
<?php /**PATH C:\xampp\htdocs\baker-bite\resources\views/client/shop/product-types/single-product.blade.php ENDPATH**/ ?>