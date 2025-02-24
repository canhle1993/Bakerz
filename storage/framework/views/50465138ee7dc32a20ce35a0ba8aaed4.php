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

    <!-- Shop Cart Section Start -->
    <div class="section section-padding-03">
        <div class="container custom-container">
            <div class="row mb-n30">

                <div class="col-lg-8 col-12 mb-30">

                    <div class="table-responsive">
                        
                            <?php echo $__env->make('client.shop.others.cartdetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                    </div>

                    <!-- Cart Action Buttons Start -->
                    <div class="row justify-content-between gap-3">
                        <div class="col-auto"><a href="<?php echo e(route('shop_all')); ?>"><button class="btn btn-outline-dark btn-primary-hover rounded-0">Continue Shopping</button></a></div>
                        <div class="col-auto d-flex flex-wrap gap-3">
                        <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                            <a href=""><button class="btn btn-outline-dark btn-primary-hover rounded-0">Clear Cart</button></a>
                        </form>
                        </div>
                    </div>
                    <!-- Cart Action Buttons End -->

                </div>

                <!-- Cart Totals Start -->
                <div class="col-lg-4 col-12 mb-30">
                    <div class="cart-totals">
                        <div class="cart-totals-inner">
                            <h4 class="title">Cart totals</h4>
                            <table class="table bg-transparent">
                                <tbody>
                                    <?php if(Auth::user()->rank === 'Gold' || Auth::user()->rank === 'Diamond'): ?>
                                    <tr>
                                        <th>Discount <span id="discountper"> </span></th>
                                        <th class="amount"><strong id="discount-amount"></strong>
                                        <br>
                                        <?php if(Auth::user()->rank === 'Gold'): ?>
                                            <span>(Exclusive discount for Gold rank)</span>
                                        <?php else: ?>
                                            <span>(Exclusive discount for Diamond rank)</span>
                                        <?php endif; ?>
                                        </th> <!-- Discount row -->
                                        
                                    </tr>
                                    <?php endif; ?>
                                    <tr class="total">
                                        <th class="sub-title">Total</th>
                                        <td class="amount"><strong id="total-price">0.00 $</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a id="btnCheckout2" href="<?php echo e(route('checkout')); ?>" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed to checkout</a>
                    </div>
                </div>
                <!-- Cart Totals End -->

            </div>
        </div>
    </div>
    <!-- Shop Cart Section End -->

    <div class="bg-dark-four dark-footer">
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
                                <a class="logo-dark" href="<?php echo e(route('client.home')); ?>"><img src="assets/images/logo.svg" alt="Logo"></a>
                                <a class="logo-white d-none" href="index.html"><img src="assets/images/logo-white.svg" alt="Logo"></a>
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
                                    <li><a href="<?php echo e(route('category')); ?>">Sweet Breads</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Baked Goods</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Cakes</a></li>
                                    <li><a href="<?php echo e(route('category')); ?>">Cheesecakes</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('delivery')); ?>">Delivery</a></li>
                                    <li><a href="<?php echo e(route('checkout')); ?>">Payment</a></li>
                                    <li><a href="<?php echo e(route('exchange-return-policy')); ?>">Exchange & Return Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                                    <li><a href="<?php echo e(route('blog-detail')); ?>">Latest Post</a></li>
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
    </div>

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


    
    <script type="text/javascript">
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure you want to remove this item?")) {
                $.ajax({
                    url: '<?php echo e(route('cart.remove')); ?>',
                    method: "POST",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: ele.attr("data-id")
                    },
                    success: function (response) {
                        alert(response.message);
                        window.location.reload();
                    }
                });
            }
        });
    </script>

    
    <script>
        $(document).ready(function() {
            var userRank = "<?php echo e(Auth::user()->rank); ?>"; // Get the user's rank
            // Lắng nghe sự thay đổi của input số lượng
            $(document).on('input change', '.cart-quantity-input', function(e) {
                var productId = $(this).data('id'); // Lấy product_id
                var quantity = $(this).val(); // Lấy số lượng mới
                var _token = "<?php echo e(csrf_token()); ?>"; // CSRF token để bảo mật
                var discount  = $(this).data('price'); // Lấy product_id
                if (quantity < 1) {
                    quantity = 1;
                }
                var $input = $(this); // Lưu lại context của input để sử dụng sau
                $input.prop('readonly', true);
                $.ajax({
                  url: "<?php echo e(route('cart.checkinventory')); ?>",
                  method: "GET",
                  data: {
                      _token: "<?php echo e(csrf_token()); ?>",
                      product_id: productId,
                      quantity: quantity,
                      quantity_input: quantity,
                  },
                  success: function(response) {
                    console.log("quanlity: " + quantity);
                    if (response.error === 'out_of_stock'){
                        $input.val(response.max_quantity); // Gán lại số lượng hợp lệ
                        var outStockModal = new bootstrap.Modal(document.getElementById('outOfStock'));
                        outStockModal.show();
                        $input.prop('readonly', false);
                        return;
                    }
                    $.ajax({
                    url: "<?php echo e(route('cart.update_quantity', ':id')); ?>".replace(':id', productId), // Truyền product_id vào URL
                    method: 'POST',
                    data: {
                        _token: _token,
                        product_id: productId,
                        quantity: quantity // Gửi số lượng mới lên server

                    },
                    success: function(response) {
                        $input.prop('readonly', false);
                        // Cập nhật lại subtotal của sản phẩm này
                        var updatedQuantity = parseFloat(quantity) || 0;
                        var updatedDiscount = parseFloat(discount) || 0;
                        $("#subtotal-" + productId).text((updatedQuantity * updatedDiscount).toFixed(2) + " $");

                        // Cập nhật lại tổng giá trị của giỏ hàng (tính lại tổng subtotal)
                        updateTotalPrice(userRank);
                        updateCartView();
                    },
                    error: function() {
                        console.error('Error:', xhr.responseText);
                        $input.prop('readonly', false);
                    }
                    });
                },
                  error: function(xhr) {
                    window.location.href = "<?php echo e(route('login')); ?>"; // Sử dụng route trong Blade để tạo đường dẫn
                    console.error('Error:', xhr.responseText);
                    $input.prop('readonly', false);
                  }
                });
            });

            document.getElementById('outOfStock').addEventListener('hidden.bs.modal', function () {
                // Xóa lớp backdrop khi modal bị ẩn
                var backdrop = document.querySelector('.modal-backdrop');
                if (backdrop) {
                    backdrop.remove();
                }
            });
            // delete cart
            $(document).on('click', '.cart_delete', function(e) {
                    e.preventDefault();

                    var productId = $(this).data('product-id');

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
                            console.error('Error:', xhr.responseText);
                        }
                    });
                });
        
            // Hàm tính tổng tất cả các subtotal và cập nhật vào mục total

            function updateCartView() {
                $.ajax({
                    url: "<?php echo e(route('cart.show')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
                    method: "GET",
                    success: function(response) {
                        $('#cart-content').html(response.cart_html); // Cập nhật lại nội dung giỏ hàng
                        
                        // $('#cart-content2').html(response.cart_html2); // Cập nhật lại nội dung giỏ hàng
                        
                        $('#cart_quantity').text(response.cart_quantity); // Cập nhật lại số lượng giỏ hàng
                        updateTotalPrice(userRank);
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

            // Cập nhật tổng giá trị ban đầu khi trang được tải
            updateTotalPrice(userRank);
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
        
        function updateTotalPrice(rank) {
                var total = 0;
                // Duyệt qua tất cả các phần tử có class 'subtotal'
                $('.sub-total').each(function() {
                    // Lấy giá trị của từng phần tử và loại bỏ ký tự $
                    var subtotal = parseFloat($(this).text().replace('$', ''));
                    // Cộng tổng lại
                    total += subtotal;
                });
                // Determine discount percentage based on rank
                var discountPercentage = 0;
                if (rank === 'Gold') {
                    discountPercentage = 2; // 2% for Gold rank
                } else if (rank === 'Diamond') {
                    discountPercentage = 5; // 5% for Diamond rank
                }
                        // Calculate discount amount
                var discountAmount = (total * discountPercentage) / 100;
                var grandTotal = total - discountAmount;

                // Update discount and grand total in DOM
                $('#discountper').text("(" + discountPercentage + "%)");
                $('#discount-amount').text("-" + discountAmount.toFixed(2) + " $");
                $('#total-price').text(grandTotal.toFixed(2) + " $");
            }
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/others/cart.blade.php ENDPATH**/ ?>