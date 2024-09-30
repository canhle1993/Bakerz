<?php $__env->startSection('manage_admin'); ?>
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
.pagination .page-link {
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    transform: scale(1.1);
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Lower to Client button */
.btn-lower {
    background-color: #ffc107;
    color: #000;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-lower:hover {
    background-color: #e0a800;
    color: #fff;
    box-shadow: 0px 4px 10px rgba(224, 168, 0, 0.5);
    transform: scale(1.05);
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
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-primary">Pending Order Management</h1>
        
    </div>

    <table class="table text-start align-middle table-bordered table-hover mb-0">
    <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>Purchase Date</th>
                <th>Phone Number</th>
                <th>Delivery Address</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($item->order_id); ?></td>
                <td><?php echo e($item->purchase_date); ?></td>
                <td><?php echo e($item->delivery_phone); ?></td>
                <td><?php echo e($item->delivery_address); ?></td>
                <td><?php echo e($item->pay); ?></td>
                <td><?php echo e($item->status); ?></td>

                <td class="text-center">
                    <!-- Button to lower admin role to client -->
                    <a class="btn btn-sm btn-danger bi bi-trash" href="#" data-url="<?php echo e(route('order.gotoCancel', $item->order_id)); ?>" onclick="showDeleteModal(this)">Cancel</a>
                    
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($orders->links('pagination::bootstrap-5')); ?>

    </div>

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
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baker-bite\resources\views/admin/orders/delivered.blade.php ENDPATH**/ ?>