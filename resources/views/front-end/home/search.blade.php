@extends("front-end.master") @section('title') Ogani | Home @endsection @section('body')
<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Search Results</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="featured__item">
          <div
            class="featured__item__pic set-bg"
            data-setbg="{{ asset($product->image) }}"
          >
            <ul class="featured__item__pic__hover">
              <li>
                <a href="{{ url('product-details', ['id' => $product->id]) }}"><i class="fa fa-retweet"></i></a>
              </li>
              <li>
                <a href="{{ url('product-details', ['id' => $product->id]) }}"><i class="fa fa-shopping-cart"></i></a>
              </li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ url('product-details', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
            <h5>{{ $product->price }} TK</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $products->onEachSide(1)->links() }}

  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<!-- <div class="banner" style="padding-bottom: 100px">
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
</div> -->
<!-- Banner End -->
@endsection
