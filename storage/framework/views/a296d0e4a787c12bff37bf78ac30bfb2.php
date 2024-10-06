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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
    <div class="container">

    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Contact form section Start -->
<div class="section-padding-03 contact-section contact-section_bg" data-bg-image="<?php echo e(asset('assets/images/bg/contact-bg.jpg')); ?>">
    <div class="container custom-container-five">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="contact-section_content">
                    <h2 class="contact-section__title">Our Contact</h2>
                    <ul class="contact-section_list">
                        <li>
                            <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                            <span class="contact-section_list__text">Phone Number : <span>1800 1779</span></span>
                        </li>
                        <li>
                            <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                            <span class="contact-section_list__text">Address : <span>35/6 đường D5, Q. Bình Thạnh, TP.HCM</span></span>
                        </li>
                        <li>
                            <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                            <span class="contact-section_list__text">Email Adress : <span>aptech2@aprotrain.com</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-section_formbg" data-bg-image="<?php echo e(asset('assets/images/bg/contact-form-bg.jpg')); ?>">
                    <h2 class="contact-section_form__title">Get in touch.</h2>
                    <form class="contact-section_form" id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6 form-p">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="con_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 form-p">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="con_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 form-p">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="con_phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 form-p">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="con_address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-12 form-p">
                                <div class="form-group">
                                    <textarea class="form-control text-area" name="con_message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 form-p">
                                <div class="form-group mb-0">
                                    <button class="btn btn-theme" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Message Notification -->
                    <div class="form-message"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Contact form section End -->

<!-- Contact Map Start -->
<div class="section">
    <!-- Google Map Area Start -->
    <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
        <iframe class="contact-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.088208291084!2d106.7089778153342!3d10.804498992298002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752930d625df3f%3A0x4623b1e4b3d0fdd3!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1696698024198!5m2!1svi!2s&q=Aptech+Computer+Education+35%2F6+Đường+D5%2C+Phường+25%2C+Bình+Thạnh%2C+Hồ+Chí+Minh+72308"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- Google Map Area End -->
</div>
<!-- Contact Map End -->

<!-- Scroll Top Start -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="lastudioicon-up-arrow"></i>
</a>
<!-- Scroll Top End -->

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
                            <a class="logo-dark" href="<?php echo e(route('client.home')); ?>"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="Logo"></a>
                            <a class="logo-white d-none" href="index.html"><img src="<?php echo e(asset('assets/images/logo-white.svg')); ?>" alt="Logo"></a>
                        </div>
                        <div class="footer-widget__social">
                            <a href="https://aptechvietnam.com.vn/" target="blank"><i class="lastudioicon-b-facebook"></i></a>
                            <a href="https://www.instagram.com/aptechvn.official/" target="blank"><i class="lastudioicon-b-twitter"></i></a>
                            <a href="https://www.instagram.com/aptechvn.official/" target="blank"><i class="lastudioicon-b-pinterest"></i></a>
                            <a href="https://www.instagram.com/aptechvn.official/" target="blank"><i class="lastudioicon-b-instagram"></i></a>
                            <b style="padding: 3px 0px;"><i class="fas fa-users"></i>
                            <span  id="onlineCount" style="border: none; background-color: #0771fb; color: #eff0f2; padding: 2px 7px 2px 7px; border-radius: 99px; left: -4px; top: -8px; position: relative;"></span></b>
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
                              <?php $__currentLoopData = $categories->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="sub-item-link" href="<?php echo e(route('shop.filterByCategory', ['category_id' => $category->category_id])); ?>"><span><?php echo e($category->category_name); ?></span></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Strat -->
                        <div class="footer-widget flex-grow-1">
                            <h4 class="footer-widget__title">Services</h4>

                            <ul class="footer-widget__link">
                                <li><a href="<?php echo e(route('checkout')); ?>">Payment</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Strat -->
                        <div class="footer-widget flex-grow-1">
                            <h4 class="footer-widget__title">Information</h4>

                            <ul class="footer-widget__link">
                                <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                                <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
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
          <div class="row">
            <div class="col-md-2" style="margin-top: 4px;">
              <!-- <b style="font-size: x-large;" class="footer-copyright-text" id="onlineCount"><i style="font-size: x-large;" class="fas fa-users"></i> </b> -->
            </div>
            <div class="col-md-8">
              <div class="footer-copyright-text text-center">
                  <p >&copy; 2024 <strong> Bakerz Bite </strong> Made with <i class="lastudioicon-heart-1"></i> by <a href="https://aptechvietnam.com.vn/">Bakerz</a></p>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
    </div>
    <!-- Footer Copyright End -->

</div>
<!-- Footer End -->
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
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.addEventListener('load', function() {
    updateonlineUser();
  });
  function updateonlineUser() {
            $.ajax({
                url: "<?php echo e(route('online-users')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
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
<!-- Vendors JS -->

<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/client/contact.blade.php ENDPATH**/ ?>