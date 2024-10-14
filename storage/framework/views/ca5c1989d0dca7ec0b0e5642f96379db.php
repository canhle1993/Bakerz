<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


.btn-success {
    background-color: #28a745;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-success:hover {
    background-color: #218838;
    box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.5);
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
    color: #fff !important; /* Màu chữ trắng giúp dễ đọc hơn */
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
<?php if($errors->any()): ?>
<div id="custom-alert" class="custom-alert alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <button class="close-btn" onclick="closeAlert()">×</button>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('custom-alert');
            alert.style.backgroundColor = "#f0d8da";
            alert.style.color = "red";
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

            <h1 style="color:#BC8157;
            font-size: 3.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            margin: 20px 0;
            text-align: center;
            line-height: 1.2;
            padding: 20px; /* Thêm khoảng cách bên trong */
            border: 3px solid #BC8157; /* Viền đỏ để làm nổi bật */
            background-color: rgba(243, 232, 232, 0.651); /* Nền đỏ nhạt để tạo độ tương phản */">
        Admin Management
        </h1>

        <button class="btn btn-primary"
        style="background-color: #0fa7bf;
               border: none;
               padding: 15px 30px;
               font-size: 1.2rem;
               font-weight: bold;
               margin: 20px 0;
               border-radius: 8px;
               box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
               transition: all 0.3s ease-in-out;"
        onmouseover="this.style.backgroundColor='#0056b3'; this.style.boxShadow='0 6px 12px rgba(0, 123, 255, 0.5)';"
        onmouseout="this.style.backgroundColor='#0fa7bf'; this.style.boxShadow='0 4px 10px rgba(0, 123, 255, 0.3)';"
        data-bs-toggle="modal"
        data-bs-target="#addAdminModal">
    Add Admin
</button>


<!-- Modal  add admin-->
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('admin.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter name" value="<?php echo e(old('name')); ?>">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email" value="<?php echo e(old('email')); ?>">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">

                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="confirm_password" required placeholder="Confirm password" value="<?php echo e(old('password_confirmation')); ?>">

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number (optional)" value="<?php echo e(old('phone')); ?>">

                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                            <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address (optional)" value="<?php echo e(old('address')); ?>">

                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar (optional)</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">

                    </div>
                    <div class="mb-3">
                        <label for="avatar_url" class="form-label">Avatar URL (optional)</label>
                        <input type="url" class="form-control" id="avatar_url" name="avatar_url" placeholder="Enter avatar URL (optional)" value="<?php echo e(old('avatar_url')); ?>">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"
                    style="background-color: #ffc107;
                           border: none;
                           padding: 10px 20px;
                           font-size: 1.1rem;
                           font-weight: bold;
                           color: #000;
                           border-radius: 5px;
                           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                           transition: all 0.3s ease-in-out;"
                    onmouseover="this.style.backgroundColor='#e0a800';"
                    onmouseout="this.style.backgroundColor='#ffc107';">
                Register Admin
            </button>

                </div>
            </form>
        </div>
    </div>
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center">
                    <?php if($admin->avatar): ?>
                        <?php if(filter_var($admin->avatar, FILTER_VALIDATE_URL)): ?>
                            <img src="<?php echo e($admin->avatar); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/avatars/'.$admin->avatar)); ?>" alt="avatar" class="rounded-circle" width="50" height="50">
                        <?php endif; ?>
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/avatars/default-avatar.png')); ?>" alt="default avatar" class="rounded-circle" width="50" height="50">
                    <?php endif; ?>
                </td>

                <td><?php echo e($admin->name); ?></td>
                <td><?php echo e($admin->email); ?></td>
                <td><?php echo e($admin->phone); ?></td>
                <td><?php echo e($admin->address); ?></td>
                <td><?php echo e($admin->note); ?></td>

                <td class="text-center">
                    <!-- Button to lower admin role to client -->
                    <form action="<?php echo e(route('admin.lower_to_client', $admin->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-lower">
                            <i class="bi bi-arrow-down-circle"></i> Lower to Client
                        </button>
                    </form>

                    <!-- Button to up admin role to super -->
                    <form action="<?php echo e(route('admin.up_to_super', $admin->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="bi bi-arrow-up-circle"></i> Up to Supper
                        </button>
                    </form>


                    <form id="delete-form-<?php echo e($admin->user_id); ?>" action="<?php echo e(route('admin.destroy', $admin->user_id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete('<?php echo e($admin->user_id); ?>')">
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
        <?php echo e($admins->links('pagination::bootstrap-5')); ?>

    </div>

<?php $__env->stopSection(); ?>


<script>


     function confirmDelete(userId) {

            Swal.fire({

                title: 'Are you sure?',

                text: "This will move the admin to the blacklist and restrict their access!",

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#3085d6',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Yes, delete it!'

            }).then((result) => {

                if (result.isConfirmed) {

                    document.getElementById('delete-form-' + userId).submit();

                }

            })



        }

    </script>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/manage-admin.blade.php ENDPATH**/ ?>