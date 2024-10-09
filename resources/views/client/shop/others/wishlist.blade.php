<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerz Bite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Frame1.png')}}">

</head>

<body>
@include('layouts.header')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
    <div class="container">

    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Wishlist Section Start -->
<div class="section section-padding-03">
    <div class="container custom-container">
        <div class="row">

            <div class="col-12">

                <!-- Cart Table For Tablet & Up Devices Start -->
                <div class="table-responsive">
                    <table class="wishlist-table table text-center align-middle mb-6 d-none d-md-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="title text-start">Product</th>
                                <th class="product-stock-status">Stock Status</th>
                                <th class="price">Price</th>
                                <th class="total"></th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            @foreach ($wishlistItems as $item)
                            <tr>
                                <th class="wishlist-remove">
                                    <button class="remove-btn" data-product-id="{{ $item->product_id }}">
                                        <i class="lastudioicon lastudioicon-e-remove"></i>
                                    </button>
                                </th>
                                <th class="wishlist-thumb">
                                    <a href="{{ route('product.single', ['product' => $item->product_id]) }}">
                                        <img src="{{ asset('storage/products/' . $item->product->image) }}" alt="{{ $item->product_name }}">
                                    </a>
                                </th>
                                <th class="text-start">
                                    <a href="{{ route('product.single', ['product' => $item->product_id]) }}">
                                        {{ $item->product->product_name }}
                                    </a>
                                </th>
                                <td class="stock in-stock">
                                @if ($item->product->inventory > 0)
                                In Stock
                                @else
                                Out Stock
                                @endif
                                </td>
                                @if ($item->product->price != $item->product->getDiscountedPrice())
                                <td>
                                    <del>{{ formatPriceVND($item->product->price) }}</del>
                                    <!-- Giá gốc -->
                                
                                    <strong style="color: red;"
                                    >${{ number_format($item->product->getDiscountedPrice(),2)
                                    }}</strong>
                                </td>
                                @else
                                <td>{{ formatPriceVND($item->product->price) }}</td>
                                @endif
                                <td class="wishlist-cart">
                                    <a class="btn btn-dark btn-hover-primary add-to-cart" href="#" data-product-id="{{ $item->product->product_id }}">Select Option</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- Cart Table For Tablet & Up Devices End -->

                <!-- Cart Table For Mobile Devices Start -->
                <div class="cart-products-mobile d-md-none">
                    <div class="cart-product-mobile">
                        <div class="cart-product-mobile-thumb">
                            <a href="single-product.html" class="cart-product-mobile-image"><img src="assets/images/product/product-tab-1.png" alt="Croissant Italy Cake" width="90" height="103"></a>
                            <button class="cart-product-mobile-remove"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                        </div>
                        <div class="cart-product-mobile-content">
                            <h5 class="cart-product-mobile-title"><a href="single-product.html">Croissant Italy Cake</a></h5>
                            <span class="cart-product-mobile-quantity">1 x $110.00</span>
                            <span class="wishlist-cart">
                                <a href="shop-cart.html" class="btn btn-dark btn-hover-primary">Add to cart</a>
                            </span>
                        </div>
                    </div>
                <!-- Cart Table For Mobile Devices End -->

            </div>

        </div>
    </div>
</div><br><br><br><br>
<!-- Wishlist Section End -->

@include('layouts.footer')

<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js"></script>

    {{-- Script xóa sản phẩm --}}
    <script>
        $(document).on('click', '.remove-btn', function(e) {
        e.preventDefault();
        var _token = "{{ csrf_token() }}"; // CSRF token để bảo mật
        var productId = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id
        $.ajax({
            url: "{{ route('remove.from.wishlist') }}",
            method: 'POST',
            data: {
                _token: _token,
                product_id: productId,
            },
            success: function(response) {
                console.log("OK");
                if (response.status === 'success') {
                    // Reload lại trang hoặc xóa sản phẩm khỏi DOM
                    location.reload();  // Reload trang để cập nhật lại danh sách wishlist
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                console.log("ERROR");
                console.error('Error:', xhr);
            }
        });
    });
    </script>

</body>
</html>