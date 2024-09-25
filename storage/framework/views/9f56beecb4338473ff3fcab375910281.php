<?php $__env->startSection('manage_admin_create'); ?>
<style>
    .form-container {
        background: url('https://i.pinimg.com/564x/d6/e0/95/d6e0957a44d11d542d03abafd16e8234.jpg') no-repeat center center;
        background-size: cover;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: auto;
        color: white;
    }

    .form-container h1 {
        text-align: center;
        font-size: 2.5rem;
        color: #f8f9fa;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 3px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .form-container .form-label {
        color: white;
    }

    .form-container input,
    .form-container select,
    .form-container textarea {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        color: black;
    }

    .form-container button {
        width: 100%;
        padding: 15px;
        background-color: #ff5722;
        border: none;
        border-radius: 50px;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .form-container button:hover {
        background-color: #ff7043;
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    body {
        background-color: #000;
    }

    .error {
        color: #ff6b6b;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>

<div class="form-container mt-5">
    <h1>Add Admin</h1>

    <!-- Hiển thị lỗi validate -->
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
            <!-- Hiển thị lỗi cho field name -->
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
            <!-- Hiển thị lỗi cho field email -->
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <!-- Hiển thị lỗi cho field password -->
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>">
            <!-- Hiển thị lỗi cho field phone -->
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="male" <?php echo e(old('gender') == 'male' ? 'selected' : ''); ?>>Male</option>
                <option value="female" <?php echo e(old('gender') == 'female' ? 'selected' : ''); ?>>Female</option>
            </select>
            <!-- Hiển thị lỗi cho field gender -->
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>">
            <!-- Hiển thị lỗi cho field address -->
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Upload Avatar (from local)</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
            <!-- Hiển thị lỗi cho field avatar -->
            <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="avatar_url" class="form-label">Avatar URL (optional)</label>
            <input type="url" class="form-control" id="avatar_url" name="avatar_url" value="<?php echo e(old('avatar_url')); ?>">
            <!-- Hiển thị lỗi cho field avatar_url -->
            <?php $__errorArgs = ['avatar_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/admin/manage-admin-create.blade.php ENDPATH**/ ?>