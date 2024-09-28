
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
    @if(session('cart') && count(session('cart')) > 0)
        @foreach(session('cart') as $id => $details)
            <tr>
                <th class="cart-remove">
                    <button data-product-id="{{ $id }}" class="remove-btn cart_delete"><i class="lastudioicon lastudioicon-e-remove"></i></button>
                </th>
                <th class="cart-thumb">
                    <a href="single-product.html">
                        <img src="{{ asset('storage/products/' . $details['image']) }}" alt="{{ $details['name'] }}">
                    </a>
                </th>
                <th class="text-start">
                    <a href="single-product.html">{{ $details['name'] }}</a>
                </th>
                <td>{{ number_format($details['price'], 2) }} $</td>
                <td class="text-center cart-quantity">
                    <div class="quantity">
                        <input type="number" value="{{ $details['quantity'] }}" min="1" class="cart-quantity-input" data-id="{{ $id }}">
                    </div>
                </td>
                <td class="sub-total" id="subtotal-{{ $id }}">{{ number_format($details['price'] * $details['quantity'], 2) }} $</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6">Your cart is empty!</td>
        </tr>
    @endif
</tbody>

</table>