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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">

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
                            <p>Showing <?php echo e(($products->currentPage() - 1) * $products->perPage() + 1); ?> -
                            <?php echo e(($products->currentPage() - 1) * $products->perPage() + $products->count()); ?>

                            of <?php echo e($products->total()); ?> result</p>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-topbar-item">
                                <form method="GET" action="<?php echo e(route('shop_all')); ?>">
                                            <select name="sort" id="SortBy" onchange="this.form.submit()">
                                                <option value="price-ascending" <?php echo e(request()->get('sort') == 'price-ascending' ? 'selected' : ''); ?>>Price ↑</option>
                                                <option value="price-descending" <?php echo e(request()->get('sort') == 'price-descending' ? 'selected' : ''); ?>>Price ↓</option>
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
                        <?php if($products->isEmpty()): ?>
                            <p>No products found.</p>
                        <?php else: ?>
                            <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 row-cols-1 mb-n50">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col mb-50">
                                    <!-- Product Item Start -->
                                    <div class="product-item text-center">
                                        <div class="product-item__image border w-100">
                                            <a href="single-product.html"><img width="350" height="350" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>"></a>
                                            <ul class="product-item__meta meta-middle">
                                                <li class="product-item__meta-action">
                                                    <a class="labtn-icon-quickview" href="#" data-bs-tooltip="tooltip" data-bs-placement="top"
                                                       title="Quick View"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#exampleProductModal"
                                                       data-id="<?php echo e($product->product_id); ?>"
                                                       onclick="loadQuickView(this)">
                                                    </a>
                                                </li>
                                                <li class="product-item__meta-action">
                                                    <a class="labtn-icon-cart" href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to cart" onclick="addToCart(this)" data-id="<?php echo e($product->product_id); ?>"></a>
                                                </li>
                                                <li class="product-item__meta-action"><a class="labtn-icon-wishlist" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist" data-bs-toggle="modal" data-bs-target="#modalWishlist"></a></li>
                                                <li class="product-item__meta-action"><a class="labtn-icon-compare" href="#/" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to compare" data-bs-toggle="modal" data-bs-target="#modalCompare"></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-item__content pt-5">
                                            <h5 class="product-item__title"><a href="#"><?php echo e($product->product_name); ?></a></h5>
                                            <span class="product-item__price"><?php echo e(number_format($product->price, 0, ',', '.')); ?> $</span>
                                        </div>
                                    </div>
                                    <!-- Product Item End -->
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="shop-bottombar">
                        <?php echo e($products->links('pagination::bootstrap-4')); ?> <!-- Hiển thị các nút phân trang -->
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
                            <form action="<?php echo e(route('shop_all')); ?>" method="GET" class="sidebars_search">
                                <input type="text" name="query" placeholder="Search Here" class="sidebars_search__input" value="<?php echo e(request()->input('query')); ?>">
                                <button type="submit" class="sidebars_search__btn"><i class="lastudioicon-zoom-1"></i></button>
                            </form>
                            <!-- Search Widget End -->

                            <!-- Category Widget Start -->
                            <div class="sidebars_widget">
                                <h3 class="sidebars_widget__title">Category</h3>
                                <ul class="sidebars_widget__category">
                                <li><a href="<?php echo e(route('shop_all')); ?>">All Product</a></li>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('shop_all', ['category_id' => $category->category_id])); ?>"><?php echo e($category->category_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    
    <script>
        function loadQuickView(element) {
            var productId = element.getAttribute('data-id');
            $.ajax({
                url: "<?php echo e(route('quickview')); ?>", // Route sẽ xử lý yêu cầu
                method: 'GET',
                data: { product_id: productId },
                success: function(data) {
                    // Populate modal with product data
                    $('#exampleProductModal .product-head-price').text(data.price + " $");
                    $('#exampleProductModal .desc-content').text(data.describe);
                    $('#exampleProductModal .product-summery .product-meta .product-meta-detail').text(data.category_name);

                    // Cập nhật ảnh trong modal
                    let imageContainer = $('#exampleProductModal .single-product-vertical-tab .swiper-wrapper');
                    imageContainer.empty();
                    data.images.forEach(function(image) {
                        imageContainer.append('<a class="swiper-slide h-auto" href="#"><img class="w-100" src="/storage/products/' + image + '" alt="Product"></a>');
                    });

                    $('#exampleProductModal').modal('show'); // Show the modal
                }
            });
        }
    </script>

    
    <script>
        function addToCart(element) {
            var productId = element.getAttribute("data-id");
            $.ajax({
                url: "<?php echo e(route('cart.add')); ?>",
                method: "POST",
                // Đặt đoạn mã này ở đây
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    product_id: productId
                },
                success: function(response) {
                    alert(response.message);
                    // Cập nhật biểu tượng giỏ hàng nếu cần
                },
                error: function(response) {
                    alert('Failed to add product to cart');
                }
            });
        }
    </script>




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


    
    <script>
        function addToCart(element) {
            var productId = element.getAttribute("data-id");
            $.ajax({
                url: "<?php echo e(route('cart.add')); ?>",
                method: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    product_id: productId
                },
                success: function(response) {
                    alert(response.message);
                    // Cập nhật biểu tượng giỏ hàng nếu cần
                },
                error: function(xhr) {
                    // Xử lý lỗi bằng console.log
                    console.log('Error Status:', xhr.status);
                    console.log('Error Response:', xhr.responseText);
                    alert('Failed to add product to cart');
                }
            });
        }
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/shop_all.blade.php ENDPATH**/ ?>