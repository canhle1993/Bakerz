<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>BakerzBite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('darkpan-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('darkpan-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('darkpan-1.0.0/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('darkpan-1.0.0/css/style.css')); ?>" rel="stylesheet">


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="background-color: white !important;">
            <nav class="navbar bg-secondary navbar-dark" style="background-color: white !important;">
                <a  href="<?php echo e(route('admin.dashboard')); ?>"  class="navbar-brand mx-4 mb-3">
                    <h3 style="color: #BC8157;"><i class="fa fa-user me-2"></i>BakerzBite</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 style="color: #BC8157 !important;" class="mb-0"><?php echo e(Auth::user()->name); ?></h6>
                        <span><?php echo e(Auth::user()->role->role_name); ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">

                    <a  href="<?php echo e(route('admin.dashboard')); ?>" class="nav-item nav-link <?php echo e(Request::routeIs('admin.dashboard') ? 'active' : ''); ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('product*') || Request::is('catalog*') || Request::is('heathy*') || Request::is('discount*')) ? 'active' : ''); ?> " data-bs-toggle="dropdown"><i class="fa fa-box me-2"></i>Product
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('product*') || Request::is('catalog*') || Request::is('heathy*') || Request::is('discount*')) ? 'show' : ''); ?>">
                            <a href="<?php echo e(route('product.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('product.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Product Management</a>
                            <a href="<?php echo e(route('catalog.index')); ?>" class="bi-tag m-2 dropdown-item <?php echo e(Request::routeIs('catalog.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Category</a>
                            <a href="<?php echo e(route('discount.index')); ?>" class="bi-lightning m-2 dropdown-item <?php echo e(Request::routeIs('discount.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Discount</a>
                            <a href="<?php echo e(route('heathy.index')); ?>" class="m-2 dropdown-item <?php echo e(Request::routeIs('heathy.index') ? 'active' : ''); ?>">💞&nbsp;&nbsp;Heathy Type</a>
                            <a href="<?php echo e(route('product.index_instock')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('product.index_instock') ? 'active' : ''); ?>">&nbsp;&nbsp;InStock Product</a>
                            <a href="<?php echo e(route('product.index_outstock')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('product.index_outstock') ? 'active' : ''); ?>">&nbsp;&nbsp;OutStock Product</a>
                            <a href="<?php echo e(route('product.index_stockcheck')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('product.index_stockcheck') ? 'active' : ''); ?>">&nbsp;&nbsp;Stock Check</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('admin/manage/client*') || Request::is('admin/manage/admin*') || Request::is('admin/manage/blacklist*')) ? 'active' : ''); ?>" data-bs-toggle="dropdown">
                            <i class="far fa-file-alt me-2"></i>Management
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('admin/manage/client*') || Request::is('admin/manage/admin*') || Request::is('admin/manage/blacklist*')) ? 'show' : ''); ?>">
                            <a href="<?php echo e(route('manage-client')); ?>" class="bi-person-fill dropdown-item <?php echo e(Request::routeIs('manage-client') ? 'active' : ''); ?>">&nbsp;&nbsp;Client</a>
                            <?php if(Auth::user()->role_id == 3): ?>
                                <a href="<?php echo e(route('manage-admin')); ?>" class="bi-gear-fill dropdown-item <?php echo e(Request::routeIs('manage-admin') ? 'active' : ''); ?>">&nbsp;&nbsp;Admin</a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('manage-blacklist')); ?>" class="bi-trash-fill dropdown-item <?php echo e(Request::routeIs('manage-blacklist') ? 'active' : ''); ?>">&nbsp;&nbsp;Blacklist</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('banner*') || Request::is('admin/chefs*') || Request::is('admin/blog*') || Request::routeIs('admin.reviews*')) ? 'active' : ''); ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-list me-2"></i>Pages
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('banner*') || Request::is('admin/chefs*') || Request::is('admin/blog*') || Request::routeIs('admin.reviews*')) ? 'show' : ''); ?>">
                            <a href="<?php echo e(route('banner.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('banner.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Banner</a>
                            <a href="<?php echo e(route('admin.chefs.create')); ?>" class="bi-tag m-2 dropdown-item <?php echo e(Request::routeIs('admin.chefs.create') ? 'active' : ''); ?>">&nbsp;&nbsp;Chefs</a>
                            <a href="<?php echo e(route('blog.index')); ?>" class="bi-lightning m-2 dropdown-item <?php echo e(Request::routeIs('blog.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Blog</a>
                            <a href="<?php echo e(route('message.read')); ?>" class="m-2 dropdown-item <?php echo e(Request::routeIs('admin.reviews*') ? 'active' : ''); ?>">🌟&nbsp;&nbsp;Review</a>
                        </div>
                    </div>
                    <!-- Order Manager -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('order*') ) ? 'active' : ''); ?> " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Order Manager</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('order*') ) ? 'show' : ''); ?>">
                            <a href="<?php echo e(route('order.pending')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('order.pending') ? 'active' : ''); ?>">&nbsp;&nbsp;Pending</a>

                            <a href="<?php echo e(route('notification.read')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('order.paid') ? 'active' : ''); ?>">&nbsp;&nbsp;Confirmed</a>
                            <a href="<?php echo e(route('order.confirmed')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('order.confirmed') ? 'active' : ''); ?>">&nbsp;&nbsp;Being delivered</a>
                            <a href="<?php echo e(route('order.delivered')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('order.delivered') ? 'active' : ''); ?>">&nbsp;&nbsp;Delivered</a>
                            <a href="<?php echo e(route('order.cancel')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('order.cancel') ? 'active' : ''); ?>">&nbsp;&nbsp;Cancel</a>
                        </div>
                    </div>

                    <!-- Other Dropdown -->
                    <div class="nav-item dropdown <?php echo e((Request::is('admin/deal-of-the-day') || Request::is('admin/coming-soon') || Request::is('admin/contact-us') || Request::is('admin/workshop*') || Request::is('admin/socialmedia*')) ? 'show' : ''); ?>">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('admin/deal-of-the-day') || Request::is('admin/coming-soon') || Request::is('admin/contact-us') || Request::is('admin/workshop*') || Request::is('admin/socialmedia*')) ? 'active' : ''); ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-ellipsis-h me-2"></i>Other
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('admin/deal-of-the-day') || Request::is('admin/coming-soon') || Request::is('admin/contact-us') || Request::is('admin/workshop*') || Request::is('admin/socialmedia*')) ? 'show' : ''); ?>">
                            <!-- Deal of the Day -->
                            <a href="<?php echo e(route('admin.deal.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('admin.deal.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Deal of the Day</a>

                            <!-- Coming Soon -->
                            <a href="<?php echo e(route('admin.coming_soon.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('admin.coming_soon.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Coming Soon</a>

                            <!-- Contact Us -->
                            <a href="<?php echo e(route('admin.contact_us.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('admin.contact_us.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Contact Us</a>

                            <!-- Workshop -->
                            <a href="<?php echo e(route('admin.workshop.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('admin.workshop.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Workshop</a>

                            <!-- Social Media -->
                            <a href="<?php echo e(route('admin.socialmedia.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('admin.socialmedia.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Social Media</a>
                        </div>
                    </div>


            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0" style="background-color: white !important;">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                   <!-- Message Dropdown -->
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-envelope me-lg-2 position-relative">
            <?php if($reviewNotifications->count() > 0): ?>
                <span class="badge bg-danger position-absolute rounded-circle" style="top: -10px; right: -10px;"><?php echo e($reviewNotifications->count()); ?></span>
            <?php endif; ?>
        </i>
        <span class="d-none d-lg-inline-flex">Messages</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
        <?php if($reviewNotifications->isEmpty()): ?>
            <p class="dropdown-item text-center">No new notifications.</p>
        <?php else: ?>
            <?php $__currentLoopData = $reviewNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('message.read', $notification->id)); ?>" class="dropdown-item">
                <div class="d-flex align-items-center">
                    <img class="rounded-circle" src="<?php echo e(asset('storage/avatars/' . $notification->user->avatar)); ?>" alt="User avatar" style="width: 40px; height: 40px;">
                    <div class="ms-2">
                        <h6 class="fw-normal mb-0"><?php echo e($notification->user->name); ?> has <?php echo e($notification->review_id ? 'submitted a review' : 'replied to a review'); ?>.</h6>
                        <small><?php echo e(\Carbon\Carbon::parse($notification->created_at)->diffForHumans()); ?></small>
                    </div>
                </div>
            </a>
            <hr class="dropdown-divider">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('admin.reviews.manage')); ?>" class="dropdown-item text-center">View all notifications</a>
        <?php endif; ?>
    </div>
</div>


                  <!-- Notification Dropdown -->
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <i class="fa fa-bell me-lg-2 position-relative">
            <?php
                $orderCount = $orderNotifications->count();
            ?>
            <?php if($orderCount > 0): ?>
                <span class="badge bg-danger position-absolute rounded-circle" style="top: -10px; right: -10px;"><?php echo e($orderCount); ?></span>
            <?php endif; ?>
        </i>
        <span class="d-none d-lg-inline-flex"> Notifications</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
        <?php if($orderNotifications->isEmpty()): ?>
            <p class="dropdown-item text-center">No new order notifications.</p>
        <?php else: ?>
            <?php $__currentLoopData = $orderNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ordernotification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('notification.read', $ordernotification->order_id)); ?>" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <!-- Display user's avatar -->
                        <img class="rounded-circle" src="<?php echo e(asset('storage/avatars/' . $ordernotification->user->avatar)); ?>" alt="User avatar" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <!-- Display user's name and notification message -->
                            <h6 class="fw-normal mb-0"><?php echo e($ordernotification->user->name); ?> has placed a new order.</h6>
                            <small><?php echo e($ordernotification->created_at->diffForHumans()); ?></small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>


                    <!-- Profile Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo e(asset('storage/avatars/' . Auth::user()->avatar)); ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0" style="background-color: #FFFFFF !important;">
                            <a href="<?php echo e(route('client.home')); ?>" class="dropdown-item"><i class="fa fa-home"></i> Home</a>
                            <a href="<?php echo e(route('client.profile', ['userid' => Auth::user()->user_id])); ?>" class="dropdown-item"><i class="fa fa-suitcase"></i> My Profile</a>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-key"></i> Log Out</a>
                        </div>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Body -->
            <?php echo $__env->yieldContent('product_content'); ?>
            <?php echo $__env->yieldContent('product_detail'); ?>
            <?php echo $__env->yieldContent('product_new'); ?>
            <?php echo $__env->yieldContent('catogory_content'); ?>
            <?php echo $__env->yieldContent('manage_client'); ?>
            <?php echo $__env->yieldContent('manage_admin'); ?>
            <?php echo $__env->yieldContent('manage_client_create'); ?>
            <?php echo $__env->yieldContent('manage_client_edit'); ?>
            <?php echo $__env->yieldContent('manage_admin_create'); ?>
            <?php echo $__env->yieldContent('manage_blacklist'); ?>
            <?php echo $__env->yieldContent('admin_content'); ?>
            <?php echo $__env->yieldContent('blog_content'); ?>
            <?php echo $__env->yieldContent('deal_of_the_day_content'); ?>
            <?php echo $__env->yieldContent('coming_soon_content'); ?> <!-- Thêm phần này cho Coming Soon -->
            <?php echo $__env->yieldContent('admint_content'); ?>
            <?php echo $__env->yieldContent('workshop_content'); ?> <!-- Thêm phần này cho Workshop -->
            <?php echo $__env->yieldContent('SocialMedia_content'); ?>


            <!-- Body End -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4" >
                <div class="bg-secondary rounded-top p-4" style="background-color: #FFFFFF !important;">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">BakerzBite</a>, All Rights Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a><br>
                            Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/lib/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('darkpan-1.0.0/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('darkpan-1.0.0/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>