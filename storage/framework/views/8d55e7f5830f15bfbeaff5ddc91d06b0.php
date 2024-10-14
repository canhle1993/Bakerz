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

<!-- Customized Bootstrap Stylesheet -->
<link href="darkpan-1.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="darkpan-1.0.0/css/style.css" rel="stylesheet">

<style>
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

.table button {
    background-color: #17a2b8;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.table button:hover {
    background-color: #138496;
    box-shadow: 0px 4px 10px rgba(19, 132, 150, 0.5);
}


</style>

<!-- Page Content -->
<div class="container-fluid pt-4 px-4">

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 style="
                color: #BC8157;
                font-size: 2.5rem;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
                margin: 20px 0;
                text-align: center;
                padding: 10px;
                border: 4px dashed #BC8157;
                background-color: rgba(230, 247, 255, 0.7);
                border-radius: 15px;">
                List In Stock Products
            </h4>

            <!-- Search Form -->
            <form class="d-none d-md-flex ms-4" method="GET" action="<?php echo e(route('product.index_instock')); ?>">
                <div class="input-group">
                    <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Product name" name="search" value="<?php echo e(request()->query('search')); ?>" style="border-radius: 25px 0 0 25px;">
                    <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            <!-- Move All Quantity Section -->
            <label for="" style="color: #fff; margin-left: 20px;">Move ALL:</label>
            <input id="quantityInput" class="form-control " style="width: 15%; border-radius: 25px;" type="number" oninput="setQuantity(this.value)" placeholder="Enter quantity" name="quantityInput" value="<?php echo e(old('quantityInput', request()->input('quantityInput'))); ?>">
            <form id="stockinAllLink" method="POST" action="<?php echo e(route('product.goallquanlity_stockin')); ?>">
                <?php echo csrf_field(); ?>
                <input hidden type="text" name="quantityInput" class="inputTarget" placeholder="This will get the value automatically">
                <button type="submit" class="btn" style="
                    background-color: #17a2b8;
                    color: white;
                    margin-left: 10px;
                    border-radius: 4px;
                    transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                    Stock In
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0" style="
                border-collapse: separate;
                border-spacing: 0 15px;
                background-color: #fff;
                box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
                border-radius: 10px;">
                <thead style="background-color: #BC8157; color: white;">
                    <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Inventory</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="background-color: #f9f9f9;">
                        <td><?php echo e(($products->currentPage() - 1) * $products->perPage() + $loop->iteration); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="Product Image" width="100" class="rounded mt-2" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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
                            <form id="deleteForm" method="POST" action="<?php echo e(route('product.goto_stockin', $product->product_id)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn" style="
                                    background-color: #17a2b8;
                                    color: white;
                                    padding: 6px 12px;
                                    border-radius: 4px;
                                    transition: background-color 0.3s ease, box-shadow 0.3s ease;">
                                    Go to Stock
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <?php echo e($products->appends(request()->except('page'))->links('pagination::bootstrap-4')); ?>

        </div>

</div>

<!-- Modal Popup for Deletion -->
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
    // Set quantity value and store in localStorage
    function setQuantity(value) {
        document.querySelectorAll('.inputTarget').forEach(input => input.value = value);
        localStorage.setItem('quantityInput', value); // Lưu giá trị vào localStorage
    }

    // Show delete modal
    function showDeleteModal(element) {
        var actionUrl = element.getAttribute('data-url');
        document.getElementById('deleteForm').action = actionUrl;
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }

    // Reset search
    document.getElementById('reset-search').addEventListener('click', function() {
        window.location.href="<?php echo e(route('product.index_instock')); ?>";
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Bakerz\resources\views/admin/instocklist.blade.php ENDPATH**/ ?>