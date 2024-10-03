<?php $__env->startSection('manage_client'); ?>
<style>
.pagination {
    display: flex;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination .page-item {
    margin: 0 5px; /* Khoảng cách giữa các nút */
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
    transform: scale(1.1); /* Hiệu ứng phóng to nhẹ khi di chuột */
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Nút Edit */
.btn-warning {
    background-color: #ffc107;
    color: #000;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-warning:hover {
    background-color: #e0a800;
    color: #fff;
    box-shadow: 0px 4px 10px rgba(224, 168, 0, 0.5); /* Thêm shadow khi hover */
    transform: scale(1.05); /* Hiệu ứng phóng to nhẹ */
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
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5); /* Thêm shadow khi hover */
    transform: scale(1.05); /* Hiệu ứng phóng to nhẹ */
}


.custom-alert {
        position: fixed;
        top: 10%;
        left: 50%;
        right:10%;
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


    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center">
                    <?php if($client->avatar): ?>
                        <?php if(filter_var($client->avatar, FILTER_VALIDATE_URL)): ?>
                            <!-- Nếu avatar là URL từ bên ngoài -->
                            <img src="<?php echo e($client->avatar); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php else: ?>
                            <!-- Nếu avatar được lưu trong public/storage/avatars -->
                            <img src="<?php echo e(asset('storage/avatars/'.$client->avatar)); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- Avatar mặc định nếu không có -->
                        <img src="<?php echo e(asset('storage/avatars/default-avatar.png')); ?>" alt="default avatar" class="rounded-circle" width="50" height="50">
                    <?php endif; ?>
                </td>

                <td><?php echo e($client->name); ?></td>
                <td><?php echo e($client->email); ?></td>
                <td><?php echo e($client->phone); ?></td>
                <td><?php echo e($client->address); ?></td>
                <td><?php echo e($client->note); ?></td>

                <td class="text-center">


                    <form action="<?php echo e(route('client.destroy', $client->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>

                    <form action="<?php echo e(route('admin.update_to_admin', $client->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-warning me-1">
                            <i class="bi bi-arrow-up-circle"></i> Update to Admin
                        </button>
                    </form>
                </td>



            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Phân trang -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($clients->links('pagination::bootstrap-5')); ?>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/manage-client.blade.php ENDPATH**/ ?>