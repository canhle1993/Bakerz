
<div class="offcanvas-body">
      <!-- Offcanvas Cart Items Start  -->
      <ul class="offcanvas-cart-items" id="cart-content">
          <li>
              <!-- Mini Cart Item Start  -->
              @if(session('cart') && count(session('cart')) > 0)
                @foreach(session('cart') as $id => $details)
                    <div class="mini-cart-item">
                        
                        <a href="#" class="mini-cart-item__remove cart_delete" data-product-id="{{ $id }}">
                            <i class="lastudioicon lastudioicon-e-remove"></i></a>
                        
                        <div class="mini-cart-item__thumbnail">
                            <a href="single-product.html"><img width="70" height="88" src="{{ asset('storage/products/' . $details['image']) }}" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item__content">
                            <h6 class="mini-cart-item__title"><a href="single-product.html">{{ $details['name'] }}</a></h6>
                            <span class="mini-cart-item__quantity">{{ $details['quantity'] }} × {{ number_format($details['price'], 2) }} $</span>
                            <span style="display: none;" class="mini-cart-item__quantity subtotal">{{ $details['quantity'] * $details['price'] }} $</span>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="mini-cart-item__content">
                        <h6>Your cart is empty!</h6>
                    </div>
                @endif
              <!-- Mini Cart Item End  -->
          </li>
      </ul>
      <!-- Offcanvas Cart Items End  -->
  </div>