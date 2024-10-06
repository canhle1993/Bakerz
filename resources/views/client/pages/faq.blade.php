<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerfresh - Cake Shop HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
@include('layouts.header')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-4.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h1 class="breadcrumb_title">FAQs</h1>
                    <ul class="breadcrumb_list">
                        <li><a href="index.html">Home</a></li>
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
                    <form action="#" class="faq-search">
                        <input type="text" class="faq-search__input form-field" placeholder="Search Questions...">
                        <button class="faq-search__btn"><i class="lastudioicon-zoom-1"></i></button>
                    </form>
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
                                <span>How long does it take for my order to ship and when will I receive it?</span>
                                <i class="lastudioicon lastudioicon-down-arrow"></i>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                            <div class="accordion-body">Once your order is placed, we typically process it within 1-2 business days. Shipping times depend on your location, but most domestic orders will arrive within 3-5 business days. We also offer expedited shipping options at checkout if you need your items sooner!</div>
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
                                <span>How do I apply a discount code on your website when checking out?</span>
                                <i class="lastudioicon lastudioicon-down-arrow"></i>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#exampleOne">
                            <div class="accordion-body">To apply a discount code, simply add the items you want to purchase to your cart. When you're ready to check out, go to the 'Cart' or 'Checkout' page. There will be a field labeled 'Discount Code' or 'Promo Code.' Enter your code there, click 'Apply,' and the discount will be deducted from your total before you proceed with payment.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Section End -->

@include('layouts.footer')

<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
