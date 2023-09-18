@extends("front-end.master") @section('title') Ogani | Home @endsection @section('body')
<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Latest Product</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="featured__item">
          <div
            class="featured__item__pic set-bg"
            data-setbg="{{ asset('/') }}front-end/img/featured/feature-1.jpg"
          >
            <ul class="featured__item__pic__hover">
              <li>
                <a href="#"><i class="fa fa-retweet"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
              </li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Crab Pool Security</a></h6>
            <h5>$30.00</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner" style="padding-bottom: 100px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img
            src="{{ asset('/') }}front-end/img/banner/banner-1.jpg"
            alt=""
          />
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img
            src="{{ asset('/') }}front-end/img/banner/banner-2.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->
@endsection
