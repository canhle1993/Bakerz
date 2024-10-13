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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/lastudioicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/dliconoutline.css')); ?>">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ion.rangeSlider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightgallery-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <style type="text/css">
      body {
        margin-top: 20px;
        background: #f7f8fa;
      }

      .avatar-xxl {
        height: 7rem;
        width: 7rem;
      }

      .card {
        margin-bottom: 20px;
        -webkit-box-shadow: 0 2px 3px #eaedf2;
        box-shadow: 0 2px 3px #eaedf2;
      }

      .pb-0 {
        padding-bottom: 0 !important;
      }

      .font-size-16 {
        font-size: 16px !important;
      }
      .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #038edc;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
      }

      .bg-soft-primary {
        background-color: rgba(3, 142, 220, 0.15) !important;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }

      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }
      .nav-tabs-custom .nav-item .nav-link {
        border: none;
      }
      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }

      .avatar-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 12px;
      }

      .border-end {
        border-right: 1px solid #eff0f2 !important;
      }

      .d-inline-block {
        display: inline-block !important;
      }

      .badge-soft-danger {
        color: #f34e4e;
        background-color: rgba(243, 78, 78, 0.1);
      }

      .badge-soft-warning {
        color: #f7cc53;
        background-color: rgba(247, 204, 83, 0.1);
      }

      .badge-soft-success {
        color: #51d28c;
        background-color: rgba(81, 210, 140, 0.1);
      }

      .avatar-group .avatar-group-item {
        margin-left: -14px;
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
      }

      .avatar-sm {
        height: 2rem;
        width: 2rem;
      }

      .nav-tabs-custom .nav-item {
        position: relative;
        color: #343a40;
      }

      .nav-tabs-custom .nav-item .nav-link.active:after {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      .nav-tabs-custom .nav-item .nav-link::after {
        content: "";
        background: #038edc;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0;
        bottom: -2px;
        -webkit-transition: all 250ms ease 0s;
        transition: all 250ms ease 0s;
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      .badge-soft-secondary {
        color: #74788d;
        background-color: rgba(116, 120, 141, 0.1);
      }

      .badge-soft-secondary {
        color: #74788d;
      }

      .work-activity {
        position: relative;
        color: #74788d;
        padding-left: 5.5rem;
      }

      .work-activity::before {
        content: "";
        position: absolute;
        height: 100%;
        top: 0;
        left: 66px;
        border-left: 1px solid rgba(3, 142, 220, 0.25);
      }

      .work-activity .work-item {
        position: relative;
        border-bottom: 2px dashed #eff0f2;
        margin-bottom: 14px;
      }

      .work-activity .work-item:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
      }

      .work-activity .work-item::after,
      .work-activity .work-item::before {
        position: absolute;
        display: block;
      }

      .work-activity .work-item::before {
        content: attr(data-date);
        left: -157px;
        top: -3px;
        text-align: right;
        font-weight: 500;
        color: #74788d;
        font-size: 12px;
        min-width: 120px;
      }

      .work-activity .work-item::after {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        left: -26px;
        top: 3px;
        background-color: #fff;
        border: 2px solid #038edc;
      }

      /* Ẩn input file */
      input[type="file"] {
        display: none;
      }

    </style>

</head>
<body >
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
      integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<?php if(isset($_SESSION['success'])): ?>
    <script>
        alert("<?php echo e($_SESSION['success']); ?>");
    </script>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if(isset($_SESSION['error'])): ?>
    <script>
        alert("<?php echo e($_SESSION['error']); ?>");
    </script>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>
<div class="breadcrumb" data-bg-image="<?php echo e(asset('assets/images/bg/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Profile</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS Vendor, Plugins & Activation Script Files -->

    <div class="container pt-5">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pb-0">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <div class="text-center border-end">
                    <form
                      id="avatarForm"
                      action="<?php echo e(route('update-avatar')); ?>"
                      method="POST"
                      enctype="multipart/form-data"
                    >
                      <?php echo csrf_field(); ?>
                      <div class="text-center border-end">
                        <img
                          src="<?php echo e(asset('storage/avatars/' . Auth::user()->avatar)); ?>"
                          class="img-fluid avatar-xxl rounded-circle"
                          alt="Avatar"
                          id="avatarImg"
                          name="avatarImg"
                        />
                        <input
                          type="file"
                          id="fileInput"
                          name="avatar"
                          accept="image/*"
                          style="display: none"
                          onchange="submitForm()"
                        />
                      </div>
                    </form>


                  </div>
                </div>
                <div class="col-md-9">
                  <div class="ms-3">
                    <div>
                    <h4 class="text-primary font-size-20 mt-3 mb-2">
                      <?php echo e(Auth::user()->name); ?>

                      <?php if(Auth::user()->rank === 'Gold'): ?>
                          <a href="<?php echo e(route('pricing-plan')); ?>" style="float: right;"><b style="margin-left: 25px"><img style="border: none; width: 50px; height: 70px;" src="<?php echo e(asset('img/2.png')); ?>" alt="gold"><br>Point: <?php echo e(Auth::user()->score); ?></b></a>
                      <?php elseif(Auth::user()->rank === 'Diamond'): ?>
                      <a href="<?php echo e(route('blog-detail')); ?>" style="float: right;"><b style="margin-left: 25px"><img style="border: none; width: 50px; height: 70px;" src="<?php echo e(asset('img/3.png')); ?>" alt="diamond"><br>Point: <?php echo e(Auth::user()->score); ?></b></a>
                      <?php else: ?>
                      <a href="<?php echo e(route('pricing-plan')); ?>" style="float: right;"><b ><img style="border: none; width: 50px; height: 70px;" src="<?php echo e(asset('img/1.png')); ?>" alt="Bronze"><br><span >Point: <?php echo e(Auth::user()->score); ?></span></b></a>
                      
                      <?php endif; ?>
                      
                    </h4>
                      <p class="mb-0 text-muted"><?php echo e(Auth::user()->address); ?></p>
                    </div>
                    <div class="row my-4">
                      <div class="col-md-12">
                        <div>
                          <p><?php echo e(Auth::user()->email); ?></p>
                          <p class="text-muted fw-medium mb-0">
                            <i class="mdi mdi-phone-in-talk-outline me-2"></i><?php echo e(preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1-$2-$3',
                            Auth::user()->phone)); ?>

                          </p>
                        </div>
                      </div>
                    </div>
                    <ul
                      class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                      role="tablist"
                    >
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link px-4 active"
                          data-bs-toggle="tab"
                          href="#projects-tab"
                          role="tab"
                          aria-selected="false"
                          tabindex="-1"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="fas fa-home"></i
                          ></span>
                          <span class="d-none d-sm-block">History</span>
                        </a>
                      </li>

                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link px-4"
                          href="<?php echo e(route('auth.changepass')); ?>"
                          target="__blank"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="mdi mdi-account-group-outline"></i
                          ></span>
                          <span class="d-none d-sm-block">Change password</span>
                        </a>
                      </li>
                      <?php if(Auth::check() && (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)): ?>
                      <li class="nav-item" role="presentation" id="checkAdmin">
                        <a
                          class="nav-link px-4"
                          href="<?php echo e(route('admin.dashboard')); ?>"
                          role="tab"
                          aria-selected="false"
                          tabindex="-1"
                        >
                          <span class="d-block d-sm-none"
                            ><i class="mdi mdi-menu-open"></i
                          ></span>
                          <span class="d-none d-sm-block">Dashboard</span>
                        </a>
                      </li>
                      <?php endif; ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <!-- Blade Template -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-body pb-0">
                        <h4 class="card-title mb-4">Order History</h4>
                        <ul class="nav nav-tabs" id="orderHistoryTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pending-tab" data-bs-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="true">Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="paid-tab" data-bs-toggle="tab" href="#paid" role="tab" aria-controls="paid" aria-selected="false">Confirmed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="confirm-tab" data-bs-toggle="tab" href="#confirm" role="tab" aria-controls="confirm" aria-selected="false">Being delivered</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="delivered-tab" data-bs-toggle="tab" href="#delivered" role="tab" aria-controls="delivered" aria-selected="false">Delivered</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cancel-tab" data-bs-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">Cancel</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="orderHistoryContent">
                            <!-- Pending Orders -->
                            <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                <div class="row pt-3">
                                    <?php $__empty_1 = true; $__currentLoopData = $pendingOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-6 status" data-order-id="<?php echo e($order->order_id); ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                <div class="flex-grow-1 align-items-start">
                                                    <div>
                                                      <h6 class="mb-0 text-muted">
                                                        <span class="team-date"
                                                          >Purchase Date: <?php echo e($order->purchase_date); ?></span
                                                        >
                                                      </h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <h5 class="card-title">Order ID: <?php echo e($order->order_id); ?></h5>
                                                <p><b>Phone Number:</b> <?php echo e($order->delivery_phone); ?></p>
                                                <p><b>Delivery Address:</b> <?php echo e($order->delivery_address); ?></p>
                                                <p><b>Discount:</b> -$<?php echo e($order->discount ? $order->discount : 0); ?></p>
                                                <p><b>Price:</b> $<?php echo e($order->pay); ?></p>
                                                <div class="d-flex">
                                                <div class="align-self-end">
                                                  <span>Status: </span>
                                                  <span
                                                    class="badge badge-soft-secondary p-2 team-status b1"
                                                    ><a href="#" data-order-id="<?php echo e($order->order_id); ?>" class="status" >Pending</a> 
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No pending orders.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Paid Orders -->
                            <div class="tab-pane fade" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                                <div class="row pt-3">
                                <?php $__empty_1 = true; $__currentLoopData = $paidOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-6 status" data-order-id="<?php echo e($order->order_id); ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                <div class="flex-grow-1 align-items-start">
                                                    <div>
                                                      <h6 class="mb-0 text-muted">
                                                        <span class="team-date"
                                                          >Purchase Date: <?php echo e($order->purchase_date); ?></span
                                                        >
                                                      </h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <h5 class="card-title">Order ID: <?php echo e($order->order_id); ?></h5>
                                                <p><b>Phone Number:</b> <?php echo e($order->delivery_phone); ?></p>
                                                <p><b>Delivery Address:</b> <?php echo e($order->delivery_address); ?></p>
                                                <p><b>Discount:</b> -$<?php echo e($order->discount ? $order->discount : 0); ?></p>
                                                <p><b>Price:</b> $<?php echo e($order->pay); ?></p>
                                                <div class="d-flex">
                                                <div class="align-self-end">
                                                  <span>Status: </span>
                                                  <span
                                                    class="badge badge-soft-success p-2 team-status b1"
                                                    > <a href="#" data-order-id="<?php echo e($order->order_id); ?>" class="status">Confirmed</a> 
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No paid orders.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Confirmed Orders -->
                            <div class="tab-pane fade" id="confirm" role="tabpanel" aria-labelledby="confirm-tab">
                                <div class="row pt-3">
                                <?php $__empty_1 = true; $__currentLoopData = $confirmedOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-6 status" data-order-id="<?php echo e($order->order_id); ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                <div class="flex-grow-1 align-items-start">
                                                    <div>
                                                      <h6 class="mb-0 text-muted">
                                                        <span class="team-date"
                                                          >Purchase Date: <?php echo e($order->purchase_date); ?></span
                                                        >
                                                      </h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <h5 class="card-title">Order ID: <?php echo e($order->order_id); ?></h5>
                                                <p><b>Phone Number:</b> <?php echo e($order->delivery_phone); ?></p>
                                                <p><b>Delivery Address:</b> <?php echo e($order->delivery_address); ?></p>
                                                <p><b>Discount:</b> -$<?php echo e($order->discount ? $order->discount : 0); ?></p>
                                                <p><b>Price:</b> $<?php echo e($order->pay); ?></p>
                                                <div class="d-flex">
                                                <div class="align-self-end">
                                                  <span>Status: </span>
                                                  <span
                                                    class="badge badge-soft-warning p-2 team-status b1"
                                                    > <a href="#" data-order-id="<?php echo e($order->order_id); ?>" class="status">Being delivered</a> 
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No confirmed orders.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Delivered Orders -->
                            <div class="tab-pane fade" id="delivered" role="tabpanel" aria-labelledby="delivered-tab">
                                <div class="row pt-3">
                                <?php $__empty_1 = true; $__currentLoopData = $deliveredOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-6 status" data-order-id="<?php echo e($order->order_id); ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                <div class="flex-grow-1 align-items-start">
                                                    <div>
                                                      <h6 class="mb-0 text-muted">
                                                        <span class="team-date"
                                                          >Purchase Date: <?php echo e($order->purchase_date); ?></span
                                                        >
                                                      </h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <h5 class="card-title">Order ID: <?php echo e($order->order_id); ?></h5>
                                                <p><b>Phone Number:</b> <?php echo e($order->delivery_phone); ?></p>
                                                <p><b>Delivery Address:</b> <?php echo e($order->delivery_address); ?></p>
                                                <p><b>Discount:</b> -$<?php echo e($order->discount ? $order->discount : 0); ?></p>
                                                <p><b>Price:</b> $<?php echo e($order->pay); ?></p>
                                                <div class="d-flex">
                                                <div class="align-self-end">
                                                  <span>Status: </span>
                                                  <span
                                                    class="badge bg-primary text-light p-2 team-status b1"
                                                    > <a href="#" data-order-id="<?php echo e($order->order_id); ?>" class="status text-light">Delivered</a> 
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No delivered orders.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Cancel Orders -->
                            <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                                <div class="row pt-3">
                                <?php $__empty_1 = true; $__currentLoopData = $cancelOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-6 status" data-order-id="<?php echo e($order->order_id); ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                <div class="flex-grow-1 align-items-start">
                                                    <div>
                                                      <h6 class="mb-0 text-muted">
                                                        <span class="team-date"
                                                          >Purchase Date: <?php echo e($order->purchase_date); ?></span
                                                        >
                                                      </h6>
                                                    </div>
                                                  </div>
                                                </div>
                                                <h5 class="card-title">Order ID: <?php echo e($order->order_id); ?></h5>
                                                <p><b>Phone Number:</b> <?php echo e($order->delivery_phone); ?></p>
                                                <p><b>Delivery Address:</b> <?php echo e($order->delivery_address); ?></p>
                                                <p><b>Discount:</b> -$<?php echo e($order->discount ? $order->discount : 0); ?></p>
                                                <p><b>Price:</b> $<?php echo e($order->pay); ?></p>
                                                <div class="d-flex">
                                                <div class="align-self-end">
                                                  <span>Status: </span>
                                                  <span
                                                    class="badge badge-soft-danger p-2 team-status b1"
                                                    > <a href="#" data-order-id="<?php echo e($order->order_id); ?>" class="status">Cancel</a> 
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No cancel orders.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--END  Blade Template -->
        </div>

        </div>

        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <div>
              <h4 class="card-title mb-4">Profile
                <a style="float: right;" href="#" onclick="toggleEditForm(); return false;">
                <a style="float: right;"  href="#" onclick="toggleEditForm(); return false;">
                <span><h6 id="EditText" class="text-primary">Edit</h6></span>
                </a>
              </h4>



              <div class="table-responsive" id="profile-table">
                <table class="table table-bordered mb-0">
                  <tbody>
                    <tr>
                      <th scope="row">Full Name</th>
                      <td><?php echo e(Auth::user()->name); ?></td>
                    </tr>
                    <!-- Thêm hàng hiển thị Gender -->
                    <tr>
                      <th scope="row">Gender</th>
                      <td>
                        <?php if(Auth::user()->gender == 'male'): ?>
                          Male
                        <?php elseif(Auth::user()->gender == 'female'): ?>
                          Female
                        <?php else: ?>
                          Other
                        <?php endif; ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td><?php echo e(Auth::user()->address); ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Phone</th>
                      <td><?php echo e(Auth::user()->phone); ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td><?php echo e(Auth::user()->email); ?></td>
                    </tr>

                  </tbody>
                </table>
              </div>


              <!-- Hiển thị form khi người dùng nhấn Edit -->
              <div id="profile-form" style="display:none;">
                <form method="POST" action="<?php echo e(route('profile.update')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>" required>
                  </div>
                  <!-- Thêm trường Gender -->
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div>
                      <input type="radio" id="male" name="gender" value="male" <?php echo e(Auth::user()->gender == 'male' ? 'checked' : ''); ?>>
                      <label for="male">Male</label>

                      <input type="radio" id="female" name="gender" value="female" <?php echo e(Auth::user()->gender == 'female' ? 'checked' : ''); ?>>
                      <label for="female">Female</label>

                      <input type="radio" id="other" name="gender" value="other" <?php echo e(Auth::user()->gender == 'other' ? 'checked' : ''); ?>>
                      <label for="other">Other</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo e(Auth::user()->address); ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(Auth::user()->phone); ?>" required>
                  </div>



                  <button type="submit" class="d-block btn btn-secondary btn-hover-primary">Update Profile</button>
                </form>
              </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br>
<!-- Nút để mở modal -->
<!-- Modal Structure -->
<div style="z-index: 1056;" class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">Order Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
        <!-- Nội dung giỏ hàng -->
        <table class="cart-table table text-center align-middle mb-6" id="order-content">
          <thead>
              <tr>
                  <th></th>
                  <th class="title text-start">Product</th>
                  <th class="price">Price</th>
                  <th class="quantity">Quantity</th>
                  <th class="total">Subtotal</th>
              </tr>
          </thead>
          <tbody class="border-top-0">
              
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
      <form id="form-payment" style="display: none;" action="<?php echo e(route('cart.cart_Recheckout')); ?>" class="checkout-form" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input hidden name="orderId" type="text" id="order-detail-id" value="">
        <button  type="submit" class="btn btn-success" data-bs-dismiss="modal">Order Payment</button>
      </form>
        <button  id="form-cancel" data-url="<?php echo e(route('cart.cart_cancel', ['orderId' => ':orderId'])); ?>" type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="showDeleteModal(this)">Order Cancel</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Popup -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
          <h5 style="color: grey;" class="modal-title" id="deleteModalLabel">Confirm Cancel Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Are you sure you want to cancel this order?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form id="deleteForm" method="POST" action="">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger">Cancel</button>
          </form>
      </div>
      </div>
  </div>
  </div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    

    <!-- Vendors JS -->
    <script>
    $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll <= 0) {
            $(
                ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
            ).removeClass("sticky");
            $(".header-sticky .header-logo img").attr(
                "src",
                "<?php echo e(asset('assets/images/logo-white.svg')); ?>"
            );
        } else {
            $(
                ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
            ).addClass("sticky");
            $(".header-sticky .header-logo img").attr(
                "src",
                "<?php echo e(asset('assets/images/logo.svg')); ?>"
            );
        }
    });


      document
        .getElementById("avatarImg")
        .addEventListener("click", function () {
          document.getElementById("fileInput").click();
        });

      document
        .getElementById("fileInput")
        .addEventListener("change", function (event) {
          const file = event.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              document.getElementById("avatarImg").src = e.target.result;
            };
            reader.readAsDataURL(file);
          }
        });
      function submitForm() {
        document.getElementById("avatarForm").submit();
      }

      // Trigger the file input when clicking on the image
      document
        .getElementById("avatarImg")
        .addEventListener("click", function () {
          document.getElementById("imgClick").click();
        });

        var count =0;
        function toggleEditForm() {
          count++;
          if (count%2==0){
            document.getElementById("profile-table").style.display = "block";
            document.getElementById("profile-form").style.display = "none";
            document.getElementById("EditText").innerHTML = "Edit";
          } else {
            document.getElementById("profile-table").style.display = "none";
            document.getElementById("profile-form").style.display = "block";
            document.getElementById("EditText").innerHTML = "Hide";
          }
        }
        $(document).ready(function() {
          $('.status').on('click', function(e) {
            e.preventDefault();
            var orderId = $(this).data('order-id');  // Lấy order ID từ thuộc tính data-order-id

            // Gọi AJAX để lấy dữ liệu
            $.ajax({
              url: "<?php echo e(route('client.orderdetails', ':id')); ?>".replace(':id', orderId), // Thay :id bằng order ID
              type: 'GET',
              dataType: 'json',
              success: function(response) {
                if (response.status === 'success') {
                  var order = response.data.order
                  // Đổ dữ liệu vào modal
                  console.log(order.status);
                  if (order.status == "Pending"){
                    $('#form-payment').show();
                    $('#form-cancel').show();
                  } else {
                    $('#form-payment').hide();
                    $('#form-cancel').hide();
                  }
                  var getorder = response.data.order_id;
                  var orderdetails = response.data.orderDetails; // Giả sử response trả về orderDetails
                  var modalContent = '';
                  
                  $('#order-detail-id').val(getorder);  // Đổ giá sản phẩm
                  // Lặp qua chi tiết đơn hàng và hiển thị
                  orderdetails.forEach(function(item) {
                    var imageUrl = `<?php echo e(asset('storage/products/')); ?>/${item.product.image}`; // Xây dựng URL hình ảnh
                    modalContent += `
                      <tr>
                        <th class="cart-thumb">
                            <a href="#">
                                <img src="${imageUrl}" alt="${item.product.product_name}">
                            </a>
                        </th>
                        <th class="text-start">
                            <a href="#">${item.product.product_name}</a>
                        </th>
                        <td>${item.discount} $</td>
                        <td class="text-center">${item.quantity}</td>
                        <td>${item.quantity * item.discount} $</td>
                      </tr>
                    `;
                  });

                  // Gán nội dung vào bảng trong modal
                  $('#order-content tbody').html(modalContent);

                  // Hiển thị modal
                  var myModal = new bootstrap.Modal(document.getElementById('cartModal'));
                  myModal.show();
                } else {
                  alert(response.message); // Hiển thị thông báo lỗi nếu có
                }
              },
              error: function(xhr, status, error) {
                console.error(error); // Xử lý lỗi
              }
            });
          });

          document.getElementById('cartModal').addEventListener('hidden.bs.modal', function () {
            // Xóa lớp backdrop khi modal bị ẩn
            var backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
          });
        });
    
        window.addEventListener('load', updateCartView)
        
        function updateCartView() {
          
              $.ajax({
                  url: "<?php echo e(route('cart.show')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
                  method: "GET",
                  success: function(response) {
                    console.log("OK");
                      $('#cart-content').html(response.cart_html); // Cập nhật lại nội dung giỏ hàng
                      $('#cart-content2').html(response.cart_html2); // Cập nhật lại nội dung giỏ hàng
                      $('#cart_quantity').text(response.cart_quantity); // Cập nhật lại số lượng giỏ hàng

                      console.log(response.cart_quantity);
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
                    console.log("FAIL");
                      console.error('Error:', xhr.responseText);
                      // alert('An error occurred while updating the cart.');
                  }
              });
        }
        
        function showDeleteModal(element) {
            // Lấy giá trị URL từ thuộc tính data-url
            var actionUrl = element.getAttribute('data-url');
            var orderId = document.getElementById("order-detail-id").value;
            // Gán action URL cho form xóa trong modal
            actionUrl = actionUrl.replace(':orderId', orderId);
            document.getElementById('deleteForm').action = actionUrl;

            // Hiển thị modal
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/profile.blade.php ENDPATH**/ ?>