@extends('admin.master') 

@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">
                Total Categories
              </p>
              <h5 class="font-weight-bolder mb-0">
                {{ count($totalCategories) }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div
              class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
            >
              <i
                class="ni ni-money-coins text-lg opacity-10"
                aria-hidden="true"
              ></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">
                Total Brands
              </p>
              <h5 class="font-weight-bolder mb-0">
                {{ count($totalBrands) }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div
              class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
            >
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">
                Total Products
              </p>
              <h5 class="font-weight-bolder mb-0">
                {{ count($totalProducts) }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div
              class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
            >
              <i
                class="ni ni-paper-diploma text-lg opacity-10"
                aria-hidden="true"
              ></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Customers</p>
              <h5 class="font-weight-bolder mb-0">
                {{ count($totalCustomers) }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div
              class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
            >
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
