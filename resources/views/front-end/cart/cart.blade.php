@extends("front-end.master") @section('title') Ogani | Cart @endsection
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color: #7fad39;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($sum = 0)
                            @if (count($cartItems) > 0)
                                @foreach($cartItems as $cartItem)
                                <tr>
                                    <td class="shoping__cart__item" style="padding: 0">
                                        <img src="{{ asset($cartItem->options->image) }}" height="70" width="50" alt="">
                                        <h5>{{ $cartItem->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $cartItem->price }} TK
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <!-- <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div> -->
                                        <span>{{ $cartItem->qty }}</span>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{ $total = $cartItem->price*$cartItem->qty }}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{ url('/cart-item/delete', ['rowId'=>$cartItem->rowId]) }}"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                <?php $sum = $sum + $total ?>
                                @endforeach
                                @else 
                                <tr>
                                    <td colspan="5" class="text-center font-weight-bold">Cart Is Empty!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('/shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>{{ $sum }}</span></li>
                            <li>VAT <span> {{ $vat = 0 }}</span></li>
                            <li>Total <span>{{ $orderTotal = $sum + $vat }}</span></li>
                            <?php Session::put('myShopOrderTotal', $orderTotal); ?>
                        </ul>
                        @if(Session::get('myShopCustomerId'))
                        <!-- <a href="{{ url('/checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                        <a href="{{ count($cartItems) > 0 ? url('/checkout') : 'javascript:void(0)' }}" class="primary-btn {{ count($cartItems) === 0 ? ' disabled' : '' }}">PROCEED TO CHECKOUT</a>
                        @else
                        <!-- <a href="{{ url('/customer/login') }}" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                        <a href="{{ count($cartItems) > 0 ? url('/customer/login') : 'javascript:void(0)' }}" class="primary-btn {{ count($cartItems) === 0 ? ' disabled' : '' }}">PROCEED TO CHECKOUT</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    @endsection
    