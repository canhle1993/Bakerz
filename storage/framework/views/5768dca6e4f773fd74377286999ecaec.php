

<?php $__env->startSection('product_detail'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>BakerzBite-Admin</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      #a1 {
        border: solid 2px #808080;
      }
      .product-table {
        padding: 20px;
        border-radius: 8px;
        background-color: #191c24;
        position: relative;
      }
      .product-image {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
      }
      .product-column {
        font-weight: bold;
        color: #ffc106; /* Màu chữ của cột 2 */
      }
      .product-info {
        color: #ffffff; /* Màu chữ của cột 3 */
        padding: 5px;
        border-radius: 5px;
      }
      .row-item {
        display: flex;
        justify-content: space-between;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
      }
      .table-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }
      .btn-edit,
      .btn-back {
        margin-bottom: 20px;
      }
    </style>
</head>

<body>
<div id="showDetail" class="container-fluid pt-4 px-4">
      <div class="product-table">
        <div class="row">
          <div class="col-md-12">
            <!-- Nút Back và Nút Edit nằm ngoài viền -->
            <div class="d-flex justify-content-between mb-3">
              <a href="<?php echo e(route('product.index')); ?>" class="btn btn-light m-2"
                >↩ Back</a
              >
              <div class="col-md-1">
                <button
                  id="btnEdit"
                  type="button"
                  class="btn btn-outline-success m-2"
                >
                  Edit
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Cột 1: Hiện 3 tấm hình -->
          <div class="col-md-2">
            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img
              src="<?php echo e(asset('storage/products/' . $image->image)); ?>"
              alt="Product Image"
              class="product-image"
            /><br />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <!-- Cột 2 và Cột 3: Hiển thị nhãn và thông tin chi tiết cùng hàng -->
          <div id="a1" class="col-md-10">
            <div class="row-item">
              <div class="col-md-3 product-column">Name</div>
              <div class="col-md-9 product-info">
                <?php echo e($product->product_name); ?>

              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Category</div>
              <div class="col-md-9 product-info">
                <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($catalog->category_name); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Inventory</div>
              <div class="col-md-9 product-info"><?php echo e($product->inventory); ?></div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Unit Price</div>
              <div class="col-md-9 product-info">
                <?php echo e(formatPriceVND($product->price)); ?>

              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Heathy</div>
              <div class="col-md-9 product-info">
                <?php $__currentLoopData = $product->heathyCatalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heathyCatalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($heathyCatalog->heath_catalog); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <div class="row-item">
              <div class="col-md-3 product-column">Description</div>
              <div class="col-md-9 product-info"><?php echo nl2br(e($product->describe)); ?></div>
            </div>
          </div>
        </div>

      </div>
    </div>

<div id="updateDetail" class="container-fluid pt-4 px-4" style="display: none;">
    <div class="row pt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Product Update</h6>
                <form action="<?php echo e(route('product.update', $product->product_id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?> 
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Main Image</label>
                    <input class="form-control bg-dark" type="file" id="formFile0" name="main_image">
                    <img id="previewImage0" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Product Image" width="100px" ><br>

                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 1</label>
                    <input class="form-control bg-dark" type="file" id="formFile1" name="image_1">
                    <?php if($product->images()->count() > 0): ?>
                        <img id="previewImage1" src="<?php echo e(asset('storage/products/' . $product->images()->first()->image)); ?>" alt="Product Image" width="100px"><br>
                    <?php else: ?>
                        <img id="previewImage1" src="#" alt="Product Image" width="100px"><br>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 2</label>
                    <input class="form-control bg-dark" type="file" id="formFile2" name="image_2">
                    <?php if($product->images()->count() > 1): ?>
                        <img id="previewImage2" src="<?php echo e(asset('storage/products/' . $product->images()->skip(1)->first()->image)); ?>" alt="Product Image" width="100px"><br>
                    <?php else: ?>
                        <img id="previewImage2" src="#" alt="Product Image" width="100px"><br>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Image 3</label>
                    <input class="form-control bg-dark" type="file" id="formFile3" name="image_3">
                    <?php if($product->images()->count() > 2): ?>
                        <img id="previewImage3" src="<?php echo e(asset('storage/products/' . $product->images()->skip(2)->first()->image)); ?>" alt="Product Image" width="100px"><br>
                    <?php else: ?>
                        <img id="previewImage3" src="#" alt="Product Image" width="100px"><br>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Product Name</label>
                    <input class="form-control bg-dark" type="text" name="product_name" required value="<?php echo e($product->product_name); ?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Catagory</label><br>
                    <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="catalog[]" value="<?php echo e($catalog->category_id); ?>" 
                            <?php echo e(in_array($catalog->category_id, $product->catalogs->pluck('category_id')->toArray()) ? 'checked' : ''); ?>> 
                            <?php echo e($catalog->category_name); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Inventory</label>
                    <input class="form-control bg-dark" type="number" name="inventory" value="<?php echo e($product->inventory); ?>">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Unit price</label>
                    <input class="form-control bg-dark" type="number" name="price" required value="<?php echo e($product->price); ?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Heathy</label><br>
                    <?php $__currentLoopData = $heathys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heathy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" name="heathy[]" value="<?php echo e($heathy->heath_id); ?>" 
                            <?php echo e(in_array($heathy->heath_id, $product->heathyCatalogs->pluck('heath_id')->toArray()) ? 'checked' : ''); ?>> 
                            <?php echo e($heathy->heath_catalog); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Product description here" id="describe" name="describe" style="height: 150px;"><?php echo e($product->describe); ?></textarea>
                </div>

                <button type="submit" class="btn btn-outline-info m-2">Update</button>
                <button id="btnCancel" type="button" class="btn btn-outline-light m-2">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
<script>
    document
    .getElementById("btnEdit")
    .addEventListener("click", function () {
        document.getElementById("showDetail").style.display = 'none';
        document.getElementById("updateDetail").style.display = 'block';
    });
    document
    .getElementById("btnCancel")
    .addEventListener("click", function () {
        document.getElementById("showDetail").style.display = 'block';
        document.getElementById("updateDetail").style.display = 'none';
    });
    // Lắng nghe sự kiện thay đổi file và cập nhật hình ảnh ngay lập tức
    document.getElementById('formFile0').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage0');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });

    document.getElementById('formFile1').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage1');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
    document.getElementById('formFile2').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage2');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
    document.getElementById('formFile3').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage3');
        previewImage.src = URL.createObjectURL(event.target.files[0]); // Cập nhật ảnh
        previewImage.style.display = 'block'; // Hiển thị ảnh
    });
</script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/productdetail.blade.php ENDPATH**/ ?>