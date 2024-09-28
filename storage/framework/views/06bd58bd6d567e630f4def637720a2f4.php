
<table class="cart-table table text-center align-middle mb-6 d-none d-md-table" id="cart-content2">
<thead>
    <tr>
        <th></th>
        <th></th>
        <th class="title text-start">Product</th>
        <th class="price">Price</th>
        <th class="quantity">Quantity</th>
        <th class="total">Subtotal</th>
    </tr>
</thead>
                        
<tbody class="border-top-0" >
    <?php if(session('cart') && count(session('cart')) > 0): ?>
        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th class="cart-remove">
                    <button data-product-id="<?php echo e($id); ?>" class="remove-btn cart_delete"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                </th>
                <th class="cart-thumb">
                    <a href="single-product.html">
                        <img src="<?php echo e(asset('storage/products/' . $details['image'])); ?>" alt="<?php echo e($details['name']); ?>">
                    </a>
                </th>
                <th class="text-start">
                    <a href="single-product.html"><?php echo e($details['name']); ?></a>
                </th>
                <td><?php echo e(number_format($details['price'], 2)); ?> $</td>
                <td class="text-center cart-quantity">
                    <div class="quantity">
                        <input type="number" value="<?php echo e($details['quantity']); ?>" min="1" class="cart-quantity-input" data-id="<?php echo e($id); ?>">
                    </div>
                </td>
                <td class="sub-total" id="subtotal-<?php echo e($id); ?>"><?php echo e(number_format($details['price'] * $details['quantity'], 2)); ?> $</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Your cart is empty!</td>
        </tr>
    <?php endif; ?>
</tbody>

</table><?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/client/shop/others/cartdetail.blade.php ENDPATH**/ ?>