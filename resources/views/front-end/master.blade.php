<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/bootstrap.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/font-awesome.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/elegant-icons.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/nice-select.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/jquery-ui.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/owl.carousel.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/slicknav.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('/') }}front-end/css/style.css"
      type="text/css"
    />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="{{ url('/') }}"
          ><img src="{{ asset('/') }}front-end/img/logo.png" alt=""
        /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="{{ url('cart/show') }}"><i class="fa fa-shopping-bag"></i> <span>{{ count($cartItems) }}</span></a>
          </li>
        </ul>
        <div class="header__cart__price">item: <span>{{ Session::get('myShopOrderTotal') ? Session::get('myShopOrderTotal') : "0" }} TK</span></div>
      </div>
      <div class="humberger__menu__widget">
        <div class="header__top__right__auth">
          <a href="{{ url('/customer/login') }}"><i class="fa fa-user"></i> Login</a>
        </div>
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/shop') }}">Shop</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> ogani@gmail.com</li>
          <li>Free Shipping for all Order of $99</li>
        </ul>
      </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> ogani@gmail.com</li>
                  <li>Free Shipping for all Order of $99</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="header__top__right__auth">
                  @if(Session::get('myShopCustomerId'))
                  <a href="#" onclick="document.getElementById('customerLogoutForm').submit();">Logout</a>
                  <form id="customerLogoutForm" action="{{ url('/customer/logout') }}" method="POST">
                    @csrf
                  </form>
                  @else
                  <a href="{{ url('/customer/login') }}"><i class="fa fa-user"></i> Login</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="{{ url('/') }}"
                ><img src="{{ asset('/') }}front-end/img/logo.png" alt=""
              /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li  @if(Route::currentRouteName() === 'home') class='active' @endif><a href="{{ url('/') }}">Home</a></li>
                <li  @if(Route::currentRouteName() === 'shop') class='active' @endif><a href="{{ url('/shop') }}">Shop</a></li>
                <li  @if(Route::currentRouteName() === 'contact') class='active' @endif><a href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart">
              <ul>
                <li>
                  <a href="{{ url('cart/show') }}"
                    ><i class="fa fa-shopping-bag"></i> <span>{{ count($cartItems) }}</span></a
                  >
                </li>
              </ul>
              <div class="header__cart__price">item: <span>{{ Session::get('myShopOrderTotal') ?  Session::get('myShopOrderTotal') : "0" }} TK</span></div>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            @if(Route::currentRouteName() === 'home')

            <div class="hero__categories">
              <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>All Categories</span>
              </div>
              <ul>
                @foreach($categories as $category)
                <li><a href="{{ url('/category-product', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
              </ul>
            </div>

            @endif
          </div>
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                {!! Form::open(['url' => '/search-product', 'method' => 'post']) !!}
                  <div class="hero__search__categories">
                    All Categories
                    <span class="arrow_carrot-down"></span>
                  </div>
                  <input type="text" name="search" placeholder="What do yo u need?" />
                  <button type="submit" class="site-btn">SEARCH</button>
                {!! Form::close() !!}   
              </div>
              <div class="hero__search__phone">
                <div class="hero__search__phone__icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="hero__search__phone__text">
                  <h5>+880 0000 000 000</h5>
                  <span>support 24/7 time</span>
                </div>
              </div>
            </div>
            @if(Route::currentRouteName() === 'home')
            <div
              class="hero__item set-bg"
              data-setbg="{{ asset('/') }}front-end/img/hero/banner.jpg"
            >
              <div class="hero__text">
                <span>New Arrivals</span>
                <h1 >BIG SALE</h1>
                <h2>Up To <br />50% Off</h2>
                <p>Free Pickup and Delivery Available</p>
                <a href="{{ url('/shop') }}" class="primary-btn">SHOP NOW</a>
              </div>
            </div>

            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    @yield('body')

    <!-- Footer Section Begin -->
    <footer class="footer spad" style="padding-top: 0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer__copyright" style="border-top: 0">
              <div class="footer__copyright__text">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
              <div class="footer__copyright__payment">
                <img
                  src="{{ asset('/') }}front-end/img/payment-item.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/') }}front-end/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/jquery-ui.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/jquery.slicknav.js"></script>
    <script src="{{ asset('/') }}front-end/js/mixitup.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/main.js"></script>
  </body>
</html>
