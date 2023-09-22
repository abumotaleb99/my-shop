@extends("front-end.master") @section('title') Ogani | Checkout @endsection
@section('body')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color: #7fad39;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Login</span>
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
                {!! Form::open(['url' => '/customer/customer-login', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-lg-8 col-md-12  mx-auto">
                            <h4>Login</h4>
                            <h5 class="text text-center text-danger">{{ Session::get('message') }}</h5>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email" name="email">
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : "" }}</span>
                            </div>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="password" name="password">
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : "" }}</span>
                            </div>

                            <input type="submit" class="site-btn col-lg-6" value="Login">

                            <p class="pt-4" style="hover:none">Don't have an account? <a href="{{ url('/customer/register') }}">Register</a></p>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    @endsection

    