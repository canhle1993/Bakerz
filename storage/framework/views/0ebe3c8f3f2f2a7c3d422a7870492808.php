<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>BakerzBite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BakerzBite</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">

                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo e(Auth::user()->name); ?></h6>
                        <span><?php echo e(Auth::user()->role->role_name); ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-item nav-link <?php echo e(Request::routeIs('admin.dashboard') ? 'active' : ''); ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e((Request::is('product*') || Request::is('catalog*') || Request::is('heathy*') || Request::is('discount*')) ? 'active' : ''); ?> " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Product</a>
                        <div class="dropdown-menu bg-transparent border-0 <?php echo e((Request::is('product*') || Request::is('catalog*') || Request::is('heathy*') || Request::is('discount*')) ? 'show' : ''); ?>">
                            <a href="<?php echo e(route('product.index')); ?>" class="bi-kanban-fill m-2 dropdown-item <?php echo e(Request::routeIs('product.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Product Management</a>
                            <a href="<?php echo e(route('catalog.index')); ?>" class="bi-tag m-2 dropdown-item <?php echo e(Request::routeIs('catalog.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Category</a>
                            <a href="<?php echo e(route('discount.index')); ?>" class="bi-lightning m-2 dropdown-item <?php echo e(Request::routeIs('discount.index') ? 'active' : ''); ?>">&nbsp;&nbsp;Discount</a>
                            <a href="<?php echo e(route('heathy.index')); ?>" class="m-2 dropdown-item <?php echo e(Request::routeIs('heathy.index') ? 'active' : ''); ?>">💞&nbsp;&nbsp;Heathy Type</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Management</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo e(route('manage-client')); ?>" class="dropdown-item">Client</a>

                            <?php if(Auth::user()->role_id == 3): ?>
                            <!-- Chỉ hiển thị phần quản lý Admin nếu user là Manager -->
                            <a href="<?php echo e(route('manage-admin')); ?>" class="dropdown-item">Admin</a>
                        <?php endif; ?>

                            <a href="<?php echo e(route('manage-blacklist')); ?>" class="dropdown-item">Blacklist</a>
                        </div>
                    </div>
                    <a href="<?php echo e(route('admin.reviews.manage')); ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Review</a>

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">User Management</a>
                            <a href="signup.html" class="dropdown-item">Order</a>
                            <a href="404.html" class="dropdown-item">Evaluate</a>
                            <a href="blank.html" class="dropdown-item">Comment</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">

                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">

                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">

                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <img class="rounded-circle me-lg-2" src="<?php echo e(asset('storage/avatars/' . Auth::user()->avatar)); ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?php echo e(route('client.home')); ?>" class="dropdown-item"><i class="fa fa-home"></i> Home</a>
                            <a href="<?php echo e(route('client.profile', ['userid' => Auth::user()->user_id])); ?>" class="dropdown-item"><i class=" fa fa-suitcase"></i> My Profile</a>
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

            <!-- Body -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary rounded-top p-4">
                        <div class="row">
                            <div
                                class="col-12 col-sm-6 text-center text-sm-start"
                            >
                                &copy; <a href="#">bakerz bite</a>, All Right
                                Reserved.
                            </div>
                            <div
                                class="col-12 col-sm-6 text-center text-sm-end"
                            >
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By
                                <a href="https://htmlcodex.com">HTML Codex</a>
                                <br />Distributed By:
                                <a href="https://themewagon.com" target="_blank"
                                    >ThemeWagon</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>