@extends("front-end.master") @section('title') Ogani | Checkout @endsection
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color: #7fad39;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing and Shipping Details</h4>
                {!! Form::open(['url' => '/order/new-order', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="first_name">
                                        <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : "" }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="last_name">
                                        <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : "" }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email" name="email">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="phone" name="phone">
                                <span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" name="street_address" class="checkout__input__add">
                                <span class="text-danger">{{ $errors->has('street_address') ? $errors->first('street_address') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city">
                                <span class="text-danger">{{ $errors->has('city') ? $errors->first('city') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text" name="country">
                                <span class="text-danger">{{ $errors->has('country') ? $errors->first('country') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>(optional)</span></p>
                                <input type="text" name="order_notes"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @php($sum = 0)
                                    @foreach($cartItems as $cartItem)
                                    <li>{{ $cartItem->name }}<span>{{ $total = $cartItem->price*$cartItem->qty }} TK</span></li>
                                    <?php $sum = $sum + $total ?>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal" style="padding: 0">Subtotal <span>{{ $sum }} TK</span></div>
                                <div class="checkout__order__subtotal" style="padding: 0">VAT <span>{{ $vat = 0 }} TK</span></div>
                                <div class="checkout__order__total" style="padding: 0">Total <span>{{ $orderTotal = $sum + $vat }} TK</span></div>
                                <p>Select a payment method</p>
                                <div class="d-flex mb-1">
                                    <input type="radio" style="margin-right: 8px;" name="payment_type" id="cash_on_delivery" value="cash_on_delivery" checked>
                                    <label for="cash_on_delivery" class="">Cash On Delivery</label>
                                </div>
                                <div class="d-flex mb-2">
                                    <input type="radio" style="margin-right: 8px;" name="payment_type" id="paypal" value="paypal">
                                    <label for="paypal" class="">Paypal</label>
                                </div>
                                <input type="submit" class="site-btn btn-block" value="PLACE ORDER">
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
