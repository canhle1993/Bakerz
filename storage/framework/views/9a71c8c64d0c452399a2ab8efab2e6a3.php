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

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) --->

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
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">FAQs</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Faq Section Start -->
    <div class="faq">
        <div class="container custom-container">
            <div class="row" id="exampleOne">
                <div class="col-12">
                    <div class="faq-top" data-bg-image="assets/images/shape/faqs.png">
                        <h2 class="faq-top__title">Have Any Question</h2>
                        <!-- <form action="#" class="faq-search">
                            <input type="text" class="faq-search__input form-field" placeholder="Search Questions...">
                            <button class="faq-search__btn"><i class="lastudioicon-zoom-1"></i></button>
                        </form> -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-head">
                        <h3 class="faq-head__title">Shopping Questions</h3>
                        <span class="faq-head__border"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Do you ship worldwide?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">We offer free delivery within 5 km, and our bakery provides delivery services everywhere upon customer request. However, to ensure the quality of our products, please place your order at the nearest store.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <span>How can I buy products?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">1. Access the store's website: You can visit it and browse the product catalog to choose your favorite items. <br> 2. Select the products: Browse through the products on the website or app and select the ones you want to buy.
                            <br>3. Place an online order: After selecting the products, add them to your cart and proceed to checkout. You will need to provide delivery information and choose a payment method.
                        <br>4. Order by phone: You can call and provide information about your order and delivery address. <br>
                    5. Buy directly at the store: If you prefer to buy in person, you can find the nearest store location, visit it, and select products on the spot. <br>
                6. Check the delivery policy: Make sure to check the delivery information such as time and any applicable delivery fees. </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span>How do I register an account?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">1. Access the website or app: Go to the website or open the app of the service you want to register for. <br>
                            2. Find the registration section: On the homepage, you’ll usually see a button that says "Sign up" or "Create account." Click on it to start the process. <br>
                        3. Enter personal information: You will need to provide details such as your name, email address, phone number, and create a password for the account. <br>
                    4. Verify your information: After filling in all the details, you may need to verify via email or SMS. Check your inbox or phone messages and follow the instructions to confirm your account. <br>
                5. Complete the registration: Once verified, you can log in to the account using the credentials you registered.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <span>What is a WorkShop?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">A WorkShop is for diamond-ranked account holders to register for a class, where famous chefs from the store guide them in creating their favorite cakes with their own hands.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <span>What is Coming Soon?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">It is a page that displays the announcement of the release time for new products. You can also sign up by email to receive the earliest notifications from the store.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <span>What is Bakerz Bite Rewards?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">When you purchase products with a bill of $10, you will earn 1 point. Accumulate 100 points to reach gold rank and enjoy the benefits of that rank. For diamond rank, you need 500 points. The higher the rank, the greater the benefits you will receive from the store.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-head">
                        <h3 class="faq-head__title">Payment & Gift Card</h3>
                        <span class="faq-head__border"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <span>Payment methods</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">
                                1. Cash payment: You can pay when receiving the goods or at the store. <br>
                                2. Bank transfer: You can transfer money directly to the store's bank account.<br>
                                3. Credit/debit card payment: Use your bank card to pay online via the website or app.<br>
                                4. E-wallet: Use e-wallets like Momo, ZaloPay, or VNPay to make payments.<br>
                                5. Payment gateways: Pay via gateways like VNPay or PayPal if supported by the store.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    <span>How do I receive gifts from the store?</span>
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                                <div class="accordion-body">When you create an account at Bakerz Bite, every purchase you make will earn you points. Once you accumulate enough points, you will receive great rewards from the store. Additionally, on your birthday, the store will contact you and give you a gift.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Section End -->

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/pages/faq.blade.php ENDPATH**/ ?>