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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Frame1.png')}}">

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
@include('layouts.header')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb" data-bg-image="{{asset('assets/images/bg/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h1 class="breadcrumb_title">{{ $product->product_name }}</h1>
                    <ul class="breadcrumb_list">
                        <li><a href="{{ route('client.home') }}">Home</a></li>
                        <li>{{ $product->product_name }}</li>
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
                            @if($product->images->isEmpty())
                                <a class="swiper-slide h-auto" href="{{ asset('assets/images/product/product-8-500x625.jpg') }}">
                                    <img class="w-100" src="{{ asset('assets/images/product/product-8-500x625.jpg') }}" alt="">
                                </a>
                            @else
                                <a class="swiper-slide h-auto" href="{{ asset('storage/products/' . $product->image) }}">
                                    <img class="w-100" src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->product_name }}">
                                </a>
                                @foreach($product->images as $image)
                                    <a class="swiper-slide h-auto" href="{{ asset('storage/products/' . $image->image) }}">
                                        <img class="w-100" src="{{ asset('storage/products/' . $image->image) }}" alt="{{ $product->product_name }}">
                                    </a>
                                @endforeach
                            @endif
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
                            @if($product->images->isEmpty())
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/product/product-8-500x625.jpg') }}" alt="">
                                </div>
                            @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->product_name }}">
                                </div>
                                @foreach($product->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/products/' . $image->image) }}" alt="{{ $product->product_name }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->

            </div>
            <div class="col-lg-6">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                <h3 class="product-head-name">{{$product->product_name}}</h3>
                    <!-- Product Head Start -->
                    <div class="product-head mb-3">

                        <!-- Price Start -->
                        <span class="product-item__price">
                            @if ($product->price != $product->getDiscountedPrice())
                            <del>{{ formatPriceVND($product->price) }}</del>
                            <!-- Giá gốc -->
                        
                            <strong style="color: red;"
                            >${{ number_format($product->getDiscountedPrice(),2)
                            }}</strong
                            >
                            <!-- Giá sau khi giảm -->
                            @else {{ formatPriceVND($product->price) }}
                            <!-- Giá không giảm -->
                            @endif
                        </span>
                        <!-- Price End -->
                         <div>
                                <!-- Hiển thị thông báo -->
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                         </div>

                        <!-- Rating Start -->
                        <div class="review-rating">
                            <span class="review-rating-bg">
                                <span class="review-rating-active"></span>
                            </span>
                            <a href="#/" class="review-rating-text">({{ $product->reviews->count() }} Review{{ $product->reviews->count() > 1 ? 's' : '' }})</a>
                        </div>

                        <!-- Rating End -->

                    </div>
                    <!-- Product Head End -->

                    <!-- Description Start -->
                    <p class="desc-content">{!! nl2br(e($product->describe)) !!}</p>
                    <!-- Description End -->

                    <!-- Product Quantity, Cart Button, Wishlist and Compare Start -->
                    <ul class="product-cta">
                        <li>
                            <!-- Cart Button Start -->
                            <div class="cart-btn">       
                                <div class="add-to_cart">
                                    <a class="btn btn-dark btn-hover-primary add-to-cart"  data-product-id="{{ $product->product_id }}">Add to cart</a>
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
                    <!-- Product Quantity, Cart Button, Wishlist and Compare End -->

                    <!-- Product Meta Start -->
                    <ul class="product-meta">
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">Remaining quantity:</span>
                            <span class="product-meta-detail">{{ $product->inventory }}</span>
                        </li>
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">Category:</span>
                            <span class="product-meta-detail">
                                @foreach($product->catalogs as $catalog)
                                    {{ $catalog->category_name }}{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </span>
                        </li>
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">Discount:</span>
                            <span class="product-meta-detail">
                                @foreach($product->discounts as $discount)
                                    {{ $discount->discount * 100 }}%
                                @endforeach
                            </span>
                        </li>
                    </ul>
                    <!-- Product Meta End -->

                    <!-- Product Share Start -->
                    <div class="product-share">
                    @foreach ($socialMedia as $socialMedia)
                        <a href="{{ $socialMedia->link }}" target="_blank">
                            <!-- Tùy chỉnh icon dựa trên name hoặc thêm icon chung cho tất cả -->
                            @if (strpos($socialMedia->name, 'Facebook') !== false)
                                <i class="lastudioicon-b-facebook"></i>
                            @elseif (strpos($socialMedia->name, 'Twitter') !== false)
                                <i class="lastudioicon-b-twitter"></i>
                            @elseif (strpos($socialMedia->name, 'Pinterest') !== false)
                                <i class="lastudioicon-b-pinterest"></i>
                            @elseif (strpos($socialMedia->name, 'Instagram') !== false)
                                <i class="lastudioicon-b-instagram"></i>
                            @else
                                <i class="lastudioicon-b-globe"></i> <!-- Biểu tượng mặc định -->
                            @endif
                        </a>
                    @endforeach
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
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews ({{ $product->reviews->count() }})</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="product-desc-row">
                            <div class="product-desc-img">
                                <img src="{{ asset('storage/products/' . $product->image) }}" alt="Image">
                            </div>
                            <div class="product-desc-content">
                                <h5 class="product-desc-title">{{ $product->product_name }}</h5>
                                <p class="product-desc-text">{!! nl2br(e($product->describe)) !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="review">
                            <h4>Reviews</h4>
                            @if($product->reviews->isEmpty())
                                <p>Chưa có đánh giá nào. Hãy là người đầu tiên đánh giá sản phẩm này!</p>
                            @else
                            @foreach($product->reviews as $review)
                                <div class="review-top d-flex mb-4 align-items-center pt-5" id="comment-{{ $review->ID }}">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="review_thumb">
                                            <img alt="review images" src="{{ asset('storage/avatars/' . $review->user->avatar) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="review_details ms-3">
                                            <div class="review-rating mb-2">
                                                <span class="review-rating-bg">
                                                    <span class="review-rating-active review-rating-active2" data-review="{{ $review->ratestar }}"></span>
                                                </span>
                                            </div>
                                            <div class="review-title-date d-flex">
                                                <h5 class="title me-1">{{ $review->CreatedBy }} - </h5>
                                                <span>{{ \Carbon\Carbon::parse($review->CreatedDate)->format('M d, Y') }}</span>
                                            </div>
                                            <p>{!! nl2br(e($review->comment)) !!}</p>

                                            <!-- Hiển thị tất cả các câu trả lời -->
                                            @foreach ($review->replies as $reply)
                                                <div class="reply mt-3" style="position: relative; left: 30px; top: -15px;">
                                                <p><strong class="text-primary">Bakerz Bite: </strong> - {{ $reply->created_at->format('M d, Y H:i') }}</p>
                                                    <p>{!! nl2br(e($reply->reply)) !!}</p>
                                                </div>
                                            @endforeach

                                            <!-- Form trả lời bình luận -->
                                            @if (Auth::check() && (Auth::user()->role_id == 2 || Auth::user()->role_id == 3))
                                                <form action="{{ route('reviews.reply', ['id' => $review->ID]) }}" method="POST">
                                                    @csrf
                                                    <textarea name="reply" class="form-control mb-2" placeholder="Enter your answer"></textarea>
                                                    <button type="submit" class="btn btn-dark btn-hover-primary">Send</button>
                                                </form>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @endif
                        </div>
                            <!-- Form để thêm đánh giá mới -->
                            @auth
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 col-custom">
                                        <h5 class="title mb-2">Thêm đánh giá</h5>

                                        <form action="{{ route('reviews.store', ['product_id' => $product->product_id]) }}" method="POST" class="comments-area_form">
                                            @csrf
                                            <div class="mb-3">
                                            @if ($errors->has('ratestar'))
                                                <div class="alert alert-danger">
                                                    <strong>{{ $errors->first('ratestar') }}</strong>
                                                </div>
                                            @endif
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
                            @else
                            <div class="alert alert-warning">
                            You need to <a href="{{ route('login') }}" class="text-danger">log in</a> to rate this product.
                            </div>
                        @endauth

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
                    @if($relatedProducts->isNotEmpty())
                        @foreach($relatedProducts as $relatedProduct)
                            <div class="swiper-slide">
                                <!-- Product Item Start -->
                                <div class="product-item text-center">
                                    <!-- <div class="product-item__badge">Hot</div> -->
                                    <div class="product-item__image border w-100">
                                        <a href="{{ route('product.single', ['product' => $relatedProduct->product_id]) }}">
                                            <img width="350" height="350" src="{{ asset('storage/products/' . $relatedProduct->image) }}" alt="{{ $relatedProduct->product_name }}">
                                        </a>
                                        <ul class="product-item__meta">
                                        <li class="product-item__meta-action">
                                            <a
                                            class="shadow-1 labtn-icon-cart add-to-cart"
                                            href="#"
                                            data-product-id="{{ $relatedProduct->product_id }}"
                                            ></a>
                                        </li>
                                            <li class="product-item__meta-action">
                                                <a class="shadow-1 labtn-icon-wishlist" href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item__content pt-5">
                                        <h5 class="product-item__title"><a href="{{ route('product.single', ['product' => $relatedProduct->product_id]) }}">{{ $relatedProduct->product_name }}</a></h5>
                                        <span class="product-item__price">
                                        @if ($relatedProduct->price != $relatedProduct->getDiscountedPrice())
                                        <del>{{ formatPriceVND($relatedProduct->price) }}</del>
                                        <!-- Giá gốc -->
                                    
                                        <strong style="color: red;"
                                        >${{ number_format($relatedProduct->getDiscountedPrice(),2)
                                        }}</strong
                                        >
                                        <!-- Giá sau khi giảm -->
                                        @else {{ formatPriceVND($relatedProduct->price) }}
                                        <!-- Giá không giảm -->
                                        @endif
                                    </span>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                        @endforeach
                    @else
                        <p>No related products found.</p>
                    @endif
                </div>
            </div>
            <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
        </div>
    </div>
</div>
<br><br>
    <!-- Product Section End -->

 @include('layouts.footer')

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
        $(document).ready(function() {
            $('.review-rating-active').each(function() {
                var avgStarRating1 = "{{ $product->reviews->avg('ratestar') * 20 }}";

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
                url: "{{ route('product.details', ':id') }}".replace(':id', productid), // Thay :id bằng product ID
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
                        var productImage = "{{ asset('storage/products/') }}/" + product.image; // Sử dụng asset() của Laravel để lấy đường dẫn tương đối

                        imagesHtml += '<div class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + productImage + '" alt="Product"></div>';
                        product.images.forEach(function(image) {
                            var imageUrl = "{{ asset('storage/products') }}/" + image.image; // Access the correct field inside image object
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
                $.ajax({
                    url: "{{ route('online-users') }}", // Đường dẫn để lấy lại giỏ hàng từ session
                    method: "GET",
                    success: function(response) {
                        $('#onlineCount').text(response.onlineCount); // Cập nhật lại số lượng giỏ hàng
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                        // alert('An error occurred while updating the cart.');
                    }
                });
            }

    </script>

</body>

</html>
