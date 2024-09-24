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
@include('layouts.header')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="container">

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section section section-padding-03">
        <div class="container custom-container">
            <form action="#" class="checkout-form">
                <div class="row g-8">

                    <div class="col-lg-7">

                        <!-- Billing Address -->
                        <div id="billing-form">
                            <h4 class="mb-4">Billing Address</h4>
                            <div class="row row-cols-sm-2 row-cols-1 g-4">
                                <div class="col">
                                    <label>First Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Last Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Email Address*</label>
                                    <input class="form-field" type="email">
                                </div>
                                <div class="col">
                                    <label>Phone no*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Company Name</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Address*</label>
                                    <input class="form-field" type="text" placeholder="Address line 1">
                                </div>
                                <div class="col-sm-12">
                                    <input class="form-field" type="text" placeholder="Address line 2">
                                </div>
                                <div class="col">
                                    <label>Country*</label>
                                    <div class="select-wrapper">
                                        <select class="form-field">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Town/City*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>State*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Zip Code*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12 d-flex flex-wrap gap-6">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="checkbox" id="create_account">
                                        <label class="form-check-label" for="create_account">Create an Acount?</label>
                                    </div>
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="checkbox" id="shiping_address" data-toggle-shipping="#shipping-form">
                                        <label class="form-check-label" for="shiping_address">Ship to Different Address</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Shipping Address -->
                        <div id="shipping-form" class="mt-md-8 mt-6">
                            <h4 class="mb-4">Shipping Address</h4>
                            <div class="row row-cols-sm-2 row-cols-1 g-4">
                                <div class="col">
                                    <label>First Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Last Name*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Email Address*</label>
                                    <input class="form-field" type="email">
                                </div>
                                <div class="col">
                                    <label>Phone no*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Company Name</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col-sm-12">
                                    <label>Address*</label>
                                    <input class="form-field" type="text" placeholder="Address line 1">
                                </div>
                                <div class="col-sm-12">
                                    <input class="form-field" type="text" placeholder="Address line 2">
                                </div>
                                <div class="col">
                                    <label>Country*</label>
                                    <div class="select-wrapper">
                                        <select class="form-field">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Town/City*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>State*</label>
                                    <input class="form-field" type="text">
                                </div>
                                <div class="col">
                                    <label>Zip Code*</label>
                                    <input class="form-field" type="text">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <!-- Checkout Summary Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Cart Total</h4>

                            <table class="checkout-summary-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>House Coffee Original x 1</td>
                                        <td>$110.00</td>
                                    </tr>
                                    <tr>
                                        <td>Medium Roast Ground Coffee x 1</td>
                                        <td>$19.00</td>
                                    </tr>
                                    <tr>
                                        <td class="border-top">Sub Total</td>
                                        <td class="border-top">$129.00</td>
                                    </tr>
                                    <tr>
                                        <td class="border-top">Shipping Fee</td>
                                        <td class="border-top">$10.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="border-top">Grand Total</th>
                                        <th class="border-top">$139.00</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- Checkout Summary End -->

                        <!-- Payment Method Start -->
                        <div class="checkout-box">

                            <h4 class="mb-4">Payment Method</h4>

                            <div class="checkout-payment-method">

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_check" name="payment-method" checked>
                                    <label class="form-check-label" for="payment_check">Check Payment</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_bank" name="payment-method">
                                    <label class="form-check-label" for="payment_bank">Direct Bank Transfer</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_cash" name="payment-method">
                                    <label class="form-check-label" for="payment_cash">Cash on Delivery</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="radio" id="payment_card" name="payment-method">
                                    <label class="form-check-label" for="payment_card">Card Payment</label>
                                    <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                </div>

                                <div class="single-method form-check">
                                    <input class="form-check-input" type="checkbox" id="accept_terms">
                                    <label class="form-check-label" for="accept_terms">I’ve read and accept the terms &amp; conditions</label>
                                </div>

                            </div>

                            <button class="btn btn-dark btn-primary-hover rounded-0 mt-6">Place order</button>

                        </div>
                        <!-- Payment Method End -->

                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Product Section End -->

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
                                <a class="logo-dark" href="{{ route('client.home')}}"><img src="assets/images/logo.svg" alt="Logo"></a>
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
                                    <li><a href="{{ route('category')}}">Sweet Breads</a></li>
                                    <li><a href="{{ route('category')}}">Baked Goods</a></li>
                                    <li><a href="{{ route('category')}}">Cakes</a></li>
                                    <li><a href="{{ route('category')}}">Cheesecakes</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('delivery')}}">Delivery</a></li>
                                    <li><a href="{{ route('checkout')}}">Payment</a></li>
                                    <li><a href="{{ route('exchange-return-policy')}}">Exchange & Return Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('about')}}">About Us</a></li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{ route('blog-detail')}}">Latest Post</a></li>
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

</body>

</html>
