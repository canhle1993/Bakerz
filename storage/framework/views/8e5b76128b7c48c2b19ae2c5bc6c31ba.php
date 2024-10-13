<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php $__env->startSection('product_content'); ?>
    <!-- Favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

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





    <style>

.btn-info {
    background-color: #17a2b8;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-info:hover {
    background-color: #138496;
    box-shadow: 0px 4px 10px rgba(19, 132, 150, 0.5);
    transform: scale(1.05);
}

/* Nút Delete */
.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5);
    transform: scale(1.05);
}



.table {
    border-collapse: separate !important;
    border-spacing: 0 15px !important;
    background-color: #fff !important;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
    border-radius: 10px !important;
    overflow: hidden !important;
}


.table thead th {
    background-color: #BC8157 !important;
    color: #fff !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
    padding: 12px 15px !important;
    text-align: center !important;
    vertical-align: middle !important;
}


.table tbody tr {
    background-color: #f9f9f9 !important;
    transition: background-color 0.3s ease !important;
}

.table tbody tr:hover {
    background-color: #e9ecef !important;
}


.table td {
    padding: 12px 15px !important;
    color: #333 !important;
    border: none !important;
    text-align: center !important;
    vertical-align: middle !important;
}


.table td img {
    border-radius: 5px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    transition: transform 0.3s ease !important;
}


.table td img:hover {
    transform: scale(1.05) !important;
}


.table tbody td:first-child {
    border-left: 2px solid #dee2e6 !important;
}

.table tbody td:last-child {
    border-right: 2px solid #dee2e6 !important;
}


.table th div {
    display: inline-block !important;
    float: right !important;
}

.table th i {
    color: #fff !important;
    font-size: 1rem !important;
}

.table th i:hover {
    color: #ffc107 !important;
    cursor: pointer !important;
}

/* Button */
.btn-outline-info, .btn-outline-danger {
    padding: 6px 12px !important;
    font-size: 0.9rem !important;
    border-radius: 4px !important;
    transition: background-color 0.3s ease, box-shadow 0.3s ease !important;
}

.btn-outline-info:hover {
    background-color: #007bff !important;
    color: #fff !important;
}

.btn-outline-danger:hover {
    background-color: #dc3545 !important;
    color: #fff !important;
}

/* Điều chỉnh responsive */
@media (max-width: 768px) {
    .table td {
        display: block !important;
        text-align: left !important;
        padding-left: 50% !important;
        position: relative !important;
    }

    .table td:before {
        content: attr(data-label) !important;
        position: absolute !important;
        left: 10px !important;
        font-weight: bold !important;
        text-transform: uppercase !important;
    }

    .table td img {
        display: inline-block !important;
    }


}

    </style>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 style="color: #BC8157;
                        font-size: 3rem;
                        font-weight: bold;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
                        margin: 30px 0;
                        text-align: center;
                        line-height: 1.2;
                        padding: 15px;
                        border: 4px dashed #BC8157;
                        background-color: rgba(230, 247, 255, 0.7);
                        border-radius: 15px;
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Thêm đổ bóng cho toàn bộ box */">
                        List Product
                    </h4>


                        <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo e(route('product.index')); ?>">
                            <div class="input-group">
                                <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Product name" name="search" value="<?php echo e(request()->query('search')); ?>" style="border-radius: 25px 0 0 25px;">
                                <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>






                        <a href="<?php echo e(route('product.create')); ?>"
                        style="background-color: #007bff;
                               color: white;
                               font-weight: bold;
                               padding: 10px 20px;
                               border-radius: 5px;
                               text-decoration: none;
                               display: inline-block;
                               transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#0056b3'; this.style.boxShadow='0 4px 8px rgba(0, 123, 255, 0.3)';"
                        onmouseout="this.style.backgroundColor='#007bff'; this.style.boxShadow='none';">
                         Create Product
                     </a>

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
                                    <td>
                                        <a class="btn btn-info m-2" href="<?php echo e(route('product.showDetail', $product->product_id)); ?>" style="color: #fff; background-color: #17a2b8; border: none; transition: all 0.3s ease-in-out;">
                                            Detail
                                        </a>
                                        <a class="btn btn-danger m-2" href="#" data-url="<?php echo e(route('product.destroy', $product->product_id)); ?>" onclick="showDeleteModal(this)" style="color: #fff; background-color: #dc3545; border: none; transition: all 0.3s ease-in-out;">
                                            Delete
                                        </a>
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

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/product_management.blade.php ENDPATH**/ ?>