<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php $__env->startSection('manage_blacklist'); ?>
<style>
.pagination {
    display: flex;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination .page-item {
    margin: 0 5px;
}

.pagination .page-link {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #171718;
    background-color: #fff;
    border: 1px solid #dee2e6;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.pagination .page-link:hover {
    z-index: 2;
    color: #fff;
    background-color: #f01717;
    border-color: #ff1100;
}

.pagination .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #ec0909;
    border-color: #e90611;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination .page-link:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.pagination .page-link:hover {
    transform: scale(1.1);
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Restore button */
.btn-restore {
    background-color: #28a745;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-restore:hover {
    background-color: #218838;
    box-shadow: 0px 4px 10px rgba(33, 136, 56, 0.5);
    transform: scale(1.05);
}

.custom-alert {
    position: fixed;
    top: 10%;
    left: 50%;
    right: 10%;
    transform: translate(-50%, -50%);
    background-color: #4CAF50;
    color: white;
    padding: 15px 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    opacity: 0;
    transform: translate(-50%, -50%) scale(0.9);
    transition: all 0.5s ease-in-out;
}

.custom-alert.show {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

.custom-alert .close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    position: absolute;
    right: 10px;
    top: 5px;
    cursor: pointer;
}

.custom-alert .close-btn:hover {
    color: #ddd;
}

 /* Delete button */
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


    /* Cấu trúc và kiểu cơ bản cho bảng */
.table {
    border-collapse: separate !important;
    border-spacing: 0 15px !important; /* Khoảng cách giữa các hàng */
    background-color: #fff !important;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
    border-radius: 10px !important;
    overflow: hidden !important;
}

/* Header bảng */
.table thead th {
    background-color: #343a40 !important; /* Màu nền tối */
    color: #fff !important; /* Màu chữ trắng */
    font-weight: bold !important;
    text-transform: uppercase !important;
    padding: 12px 15px !important;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    border: none !important;
    text-align: center !important;
}

/* Các hàng trong bảng */
.table tbody tr {
    background-color: #f9f9f9 !important;
    transition: background-color 0.3s ease !important;
}

.table tbody tr:hover {
    background-color: #e9ecef !important; /* Màu nền khi hover */
}

/* Các ô trong bảng */
.table td {
    padding: 12px 15px !important;
    color: #333 !important;
    border: none !important;
    text-align: center !important;
    vertical-align: middle !important;
}

/* Căn chỉnh nội dung ảnh avatar */
.table td img {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important; /* Thêm shadow cho avatar */
    transition: transform 0.3s ease !important;
}

/* Hiệu ứng hover cho avatar */
.table td img:hover {
    transform: scale(1.1) !important; /* Phóng to avatar khi hover */
}

/* Các ô khác nhau */
.table tbody td:first-child {
    border-left: 2px solid #dee2e6 !important; /* Đường viền bên trái */
}

.table tbody td:last-child {
    border-right: 2px solid #dee2e6 !important; /* Đường viền bên phải */
}

/* Style cho khoảng cách giữa các hàng */
.table tbody tr:last-child td:first-child {
    border-bottom-left-radius: 10px !important;
}

.table tbody tr:last-child td:last-child {
    border-bottom-right-radius: 10px !important;
}

/* Kiểu cho phần ghi chú */
.table td.note {
    font-style: italic !important;
    color: #6c757d !important; /* Màu chữ cho note */
}

/* Kiểu riêng cho avatar trong bảng */
.table-avatar {
    text-align: center !important;
    width: 50px !important;
    height: 50px !important;
    border-radius: 50% !important;
    object-fit: cover !important; /* Giữ tỉ lệ ảnh */
}

/* Điều chỉnh bố cục của các ô trong bảng */
.table td {
    font-size: 16px !important;
    padding: 12px !important;
    line-height: 1.5 !important;
}

/* Điều chỉnh responsive cho bảng */
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

<?php if(session('success')): ?>
    <div id="custom-alert" class="custom-alert">
        <?php echo e(session('success')); ?>

        <button class="close-btn" onclick="closeAlert()">×</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('custom-alert');
            alert.classList.add('show');

            setTimeout(function () {
                closeAlert();
            }, 5000);
        });

        function closeAlert() {
            const alert = document.getElementById('custom-alert');
            alert.classList.remove('show');
            setTimeout(function () {
                alert.remove();
            }, 500);
        }
    </script>
<?php endif; ?>

<div class="container mt-5">
    <div class="p-4 rounded shadow-lg mb-5" style="background: linear-gradient(45deg, #ff9a9e, #fad0c4); border: 1px solid #ff6f91;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-dark">Blacklisted Users</h1>
    </div>

    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th style="width: 230px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blacklistedUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center">
                    <?php if($user->avatar): ?>
                        <?php if(filter_var($user->avatar, FILTER_VALIDATE_URL)): ?>
                            <img src="<?php echo e($user->avatar); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/avatars/'.$user->avatar)); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php endif; ?>
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/avatars/default-avatar.png')); ?>" alt="default avatar" class="rounded-circle" width="50" height="50">
                    <?php endif; ?>
                </td>

                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e($user->address); ?></td>
                <td><?php echo e($user->note); ?></td>

                <td class="text-center">
                    <!-- Button to restore user -->
                    <form id="restore-client-form-<?php echo e($user->user_id); ?>" action="<?php echo e(route('blacklist.restore', $user->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="button" class="btn btn-sm btn-restore" onclick="confirmRestoreClient('<?php echo e($user->user_id); ?>')">
                            <i class="bi bi-arrow-up-circle"></i> Restore
                        </button>
                    </form>
                     <!-- Button to delete product -->
                     <form id="delete-client-form-<?php echo e($user->user_id); ?>" action="<?php echo e(route('user.delete', $user->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDeleteClient('<?php echo e($user->user_id); ?>')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>

                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($blacklistedUsers->links('pagination::bootstrap-5')); ?>

    </div>
    </div>



    

    <div class="p-4 rounded shadow-lg mb-5" style="background: linear-gradient(45deg, #a1c4fd, #c2e9fb); border: 1px solid #007bff;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-dark">Deleted Products</h1>
        </div>

        <table class="table table-hover table-bordered table-striped shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Categories</th> <!-- Nhiều danh mục -->
                    <th>Price</th>
                    <th>Description</th>
                    <th style="width: 230px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $deletedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Hình ảnh" width="100" class="mt-2">
                    </td>
                    <td><?php echo e($product->product_name); ?></td>
                    <td>
                        <?php $__currentLoopData = $product->catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($catalog->category_name); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->describe); ?></td>

                    <td class="text-center">
                        <!-- Button to restore product -->
                        <form id="restore-product-form-<?php echo e($product->product_id); ?>" action="<?php echo e(route('product.restore', $product->product_id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <button type="button" class="btn btn-sm btn-restore" onclick="confirmRestoreProduct('<?php echo e($product->product_id); ?>')">
                                <i class="bi bi-arrow-up-circle"></i> Restore
                            </button>
                        </form>
                             <!-- Button to delete product -->
                             <form id="delete-product-form-<?php echo e($product->product_id); ?>" action="<?php echo e(route('product.delete', $product->product_id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDeleteProduct('<?php echo e($product->product_id); ?>')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($deletedProducts->links('pagination::bootstrap-5')); ?>

        </div>
    </div>

    

<div class="p-4 rounded shadow-lg mb-5" style="background: linear-gradient(45deg, #fdfbfb, #ebedee); border: 1px solid #6c757d;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-dark">Deleted Categories</h1>
    </div>

    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Category Image</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $deletedCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img src="<?php echo e(asset('storage/catalogs/' . $category->image)); ?>" alt="Hình ảnh" width="100" class="mt-2">
                </td>
                <td><?php echo e($category->category_id); ?></td>
                <td><?php echo e($category->category_name); ?></td>


                <td class="text-center">
                    <!-- Button to restore category -->
                    <form id="restore-category-form-<?php echo e($category->category_id); ?>" action="<?php echo e(route('category.restore', $category->category_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="button" class="btn btn-sm btn-restore" onclick="confirmRestoreCategory('<?php echo e($category->category_id); ?>')">
                            <i class="bi bi-arrow-up-circle"></i> Restore
                        </button>
                    </form>
                    <!-- Button to delete category -->
                    <form id="delete-category-form-<?php echo e($category->category_id); ?>" action="<?php echo e(route('category.delete', $category->category_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDeleteCategory('<?php echo e($category->category_id); ?>')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>

                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($deletedCategories->links('pagination::bootstrap-5')); ?>

    </div>
</div>



<?php $__env->stopSection(); ?>


<script>
    function confirmRestoreClient(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to restore this client?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, restore them!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('restore-client-form-' + userId).submit();
            }
        });
    }

    function confirmDeleteClient(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will permanently delete the client and cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete permanently!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-client-form-' + userId).submit();
            }
        });
    }

    function confirmRestoreProduct(productId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to restore this product?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, restore it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('restore-product-form-' + productId).submit();
            }
        });
    }

    function confirmDeleteProduct(productId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will permanently delete the product and cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete permanently!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-product-form-' + productId).submit();
            }
        });
    }

    function confirmRestoreCategory(categoryId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to restore this category?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, restore it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('restore-category-form-' + categoryId).submit();
            }
        });
    }

    function confirmDeleteCategory(categoryId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will permanently delete the category and cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete permanently!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-category-form-' + categoryId).submit();
            }
        });
    }
</script>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/manage-blacklist.blade.php ENDPATH**/ ?>