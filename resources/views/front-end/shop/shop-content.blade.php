@extends("front-end.master") @section('title') Ogani | Shop @endsection
@section('body')
<!-- Breadcrumb Section Begin -->
<section
  class="breadcrumb-section set-bg"
  style="background-color: #7fad39;"
>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Shop</h2>
          <div class="breadcrumb__option">
            <a href="{{ url('/') }}">Home</a>
            <span>Shop</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-5">
        <div class="sidebar">
          <div class="sidebar__item">
            <h4>Categories</h4>
            <ul>
              @foreach($categories as $category)
                <li><a href="{{ url('/category-product', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="sidebar__item">
            <div class="latest-product__text">
              <h4>Latest Products</h4>
              <div class="latest-product__slider owl-carousel">
                <div class="latest-prdouct__slider__item">
                  @foreach($latestProducts as $latestProduct)
                  <a href="{{ url('product-details', ['id' => $latestProduct->id]) }}" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img
                        src="{{ asset($latestProduct->image) }}"
                        alt=""
                      />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>{{ $latestProduct->name }}</h6>
                      <span>{{ $latestProduct->price }} TK</span>
                    </div>
                  </a>
                  @endforeach
                </div>
                <div class="latest-prdouct__slider__item">
                  @foreach($latestProducts as $latestProduct)
                  <a href="{{ url('product-details', ['id' => $latestProduct->id]) }}" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img
                        src="{{ asset($latestProduct->image) }}"
                        alt=""
                      />
                    </div>
                    <div class="latest-product__item__text">
                      <h6>{{ $latestProduct->name }}</h6>
                      <span>{{ $latestProduct->price }} TK</span>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-7">
        <div class="row">
          <div class="filter__found" style="padding-left: 10px">
            <h6><span>{{ count($allProducts) }}</span> Products found</h6>
          </div>
        </div>
        <div class="row">
          @foreach($allProducts as $product)
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="{{ asset($product->image) }}"
              >
                <ul class="product__item__pic__hover">
                  <li>
                    <a href="{{ url('product-details', ['id' => $product->id]) }}"><i class="fa fa-retweet"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6><a href="{{ url('product-details', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
                <h5>{{ $product->price }} TK</h5>
              </div>
            </div>
          </div>
          @endforeach
        </div>
          {{ $allProducts->onEachSide(1)->links() }}

      </div>
    </div>
  </div>
</section>
<!-- Product Section End -->
@endsection
