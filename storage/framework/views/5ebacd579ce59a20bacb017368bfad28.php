
<div class="offcanvas-body">
      <!-- Offcanvas Cart Items Start  -->
      <ul class="offcanvas-cart-items" id="cart-content">
          <li>
              <!-- Mini Cart Item Start  -->
              <?php if(session('cart') && count(session('cart')) > 0): ?>
                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mini-cart-item">
                        
                        <a href="#" class="mini-cart-item__remove cart_delete" data-product-id="<?php echo e($id); ?>">
                            <i class="lastudioicon lastudioicon-e-remove"></i></a>
                        
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="<?php echo e(asset('storage/products/' . $details['image'])); ?>" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html"><?php echo e($details['name']); ?></a></h6>
                            <span class="mini-cart-item__quantity"><?php echo e($details['quantity']); ?> × <?php echo e(number_format($details['price'], 2)); ?> $</span>
                            <span style="display: none;" class="mini-cart-item__quantity subtotal"><?php echo e($details['quantity'] * $details['price']); ?> $</span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="mini-cart-item__content">
                        <h6>Your cart is empty!</h6>
                    </div>
                <?php endif; ?>
              <!-- Mini Cart Item End  -->
          </li>
      </ul>
      <!-- Offcanvas Cart Items End  -->
  </div><?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client/shop/others/cartpartials.blade.php ENDPATH**/ ?>