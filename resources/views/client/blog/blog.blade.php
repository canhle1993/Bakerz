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
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Blog</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="{{ route('client.home')}}">Home</a></li>
                            <li>Blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="blog-sidebar blog-sidebar-right">
        <div class="container">
            <div class="row">
                <div class="col-12 section-padding-04">

                    <div class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-3 gx-lg-5 gx-xxl-12">
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-01.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>August 14, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">something new about pastry will be developed in 2022</a></h3>
                                    <a href="{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-02.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>September 26, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">A year of change in the culinary industry</a></h3>
                                    <a href="b{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-03.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>June 02, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">Things you should know about cakes</a></h3>
                                    <a href="{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-04.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>July 14, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">A year of change in the culinary industry</a></h3>
                                    <a href="{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-05.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>June 02, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">New product discoveries in 2021</a></h3>
                                    <a href="{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="cols">
                            <div class="blog-post-two">
                                <a href="{{ route('blog-pd') }}" class="blog-post-two_thumb">
                                    <img src="assets/images/blog/blog-grid-06.jpg" alt="Blog-Image">
                                    <span class="blog-post-two_format">
                <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 00-5 5v15H6.25a1.25 1.25 0 000 2.5h37.5a1.25 1.25 0 000-2.5H42.5V25a5 5 0 00-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 007.07-.405l2.2-2.475a2.502 2.502 0 013.737 0l2.197 2.475a5 5 0 007.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 01-3.535-.202l-2.2-2.475a5 5 0 00-7.474 0l-2.2 2.475a2.5 2.5 0 01-3.535.203L10 26.94V25a2.5 2.5 0 012.5-2.5h25A2.5 2.5 0 0140 25v1.94z" fill="currentColor"></path></svg>
            </span>
                                </a>
                                <div class="blog-post-two__content">
                                    <ul class="blog-post-two__meta">
                                        <li><a href="{{ route('client.home')}}">Bakerz Bite</a></li>
                                        <li>-</li>
                                        <li><span>July 14, 2022</span></li>
                                    </ul>
                                    <h3 class="blog-post-two__title"><a href="{{ route('blog-pd') }}">A Day In Life Travel With Wife</a></h3>
                                    <a href="{{ route('blog-pd') }}" class="blog-post-two__btn">Read More <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="none" viewBox="0 0 44 16"><path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shop-bottombar mt-0">
                        <ul class="pagination">
                            <li class="disabled"><a href="#prev">←</a></li>
                            <li><a class="active" href="#page=1">1</a></li>
                            <li><a href="#page=2">2</a></li>
                            <li><a href="#page=3">3</a></li>
                            <li><a href="#page=4">4</a></li>
                            <li><a href="#page=5">5</a></li>
                            <li><a href="#next">→</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    @include('layouts.footer')

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