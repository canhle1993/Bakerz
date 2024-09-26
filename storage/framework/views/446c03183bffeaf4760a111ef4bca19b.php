<?php $__env->startSection('product_content'); ?>
    <!-- Favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="darkpan-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="darkpan-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="darkpan-1.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="darkpan-1.0.0/css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">List Product</h4>
                        <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo e(route('product.index')); ?>">
                            <input class="form-control bg-dark border-0" type="search" placeholder="Product name" name="search" value="<?php echo e(request()->query('search')); ?>">
                            <button type="submit" class="btn btn-primary">Search</button>
                            <?php if(request()->query('search')): ?>
                                <button type="button" class="btn btn-light ms-2" id="reset-search">✖</button>
                            <?php endif; ?>
                        </form>


                        <a href="<?php echo e(route('product.create')); ?>">Create Product</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">No.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">
                                        Name
                                        <div style="float: right;">
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'name_asc']))); ?>">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'name_desc']))); ?>">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Category
                                        <div style="float: right;">
                                            <a href="<?php echo e(route('product.index', ['sort' => 'category_asc'])); ?>">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.index', ['sort' => 'category_desc'])); ?>">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>  
                                    <th scope="col">
                                        Inventory
                                        <div style="float: right;">
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'inventory_asc']))); ?>">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'inventory_desc']))); ?>">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Price
                                        <div style="float: right;">
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'price_asc']))); ?>">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'price_desc']))); ?>">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        Discount
                                        <div style="float: right;">
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'discount_asc']))); ?>">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                            <a href="<?php echo e(route('product.index', array_merge(request()->all(), ['sort' => 'discount_desc']))); ?>">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                                     <td><?php echo e(($products->currentPage() - 1) * $products->perPage() + $loop->iteration); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Hình ảnh" width="100" class="mt-2">
                                    </td>
                                    <td><?php echo e($product->product_name); ?></td>
                                    <td>
                                    <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($catalog->category_name); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($product->inventory); ?></td>
                                    <td><?php echo e(formatPriceVND($product->price)); ?></td>
                                    <td>
                                    <?php $__currentLoopData = $product->discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($discount->discount *100); ?> %
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><a class="btn btn-outline-info m-2" href="<?php echo e(route('product.showDetail', $product->product_id)); ?>">Detail</a>
                                    <a class="btn btn-outline-danger m-2" href="#" data-url="<?php echo e(route('product.destroy', $product->product_id)); ?>" onclick="showDeleteModal(this)">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="d-flex justify-content-center">
                        <?php echo e($products->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

                    </div>

                </div>
            </div>
            <!-- Recent Sales End -->
            <!-- Modal Popup -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: grey;" class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" action="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

<script>


                
    function showDeleteModal(element) {
        // Lấy giá trị URL từ thuộc tính data-url
        var actionUrl = element.getAttribute('data-url');
        
        // Gán action URL cho form xóa trong modal
        document.getElementById('deleteForm').action = actionUrl;
        
        // Hiển thị modal
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }
    document.getElementById('reset-search').addEventListener('click', function() {
        // Reset lại URL về trang không có tham số tìm kiếm
        window.location.href="<?php echo e(route('product.index')); ?>";
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/product_management.blade.php ENDPATH**/ ?>