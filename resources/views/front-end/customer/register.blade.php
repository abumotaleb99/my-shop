@extends("front-end.master") @section('title') Ogani | Register @endsection
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color: #7fad39;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Register</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Register</span>
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
                {!! Form::open(['url' => '/customer/customer-register', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-lg-8 col-md-12  mx-auto">
                            <h4>Register</h4>
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
                                <p>Account Password<span>*</span></p>
                                <input type="password" name="password">
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : "" }}</span>
                            </div>

                            <input type="submit" class="site-btn col-lg-6" value="Register">

                            <p class="pt-4">Already have an account? <a href="{{ url('customer/login') }}">Login</a></p>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    @endsection

    