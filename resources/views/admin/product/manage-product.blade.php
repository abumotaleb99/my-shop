@extends('admin.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Categories table</h6>
        @if($message = Session::get('message'))
            <p id="message" class="text-center text-success" >{{ $message }}</p>
        @endif
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Brand Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($products as $product)
              <tr>
                <td>
                  <h6 class="mb-0 ms-3 text-sm">{{ $i++ }}</h6>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $product->product_name }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $product->brand_name }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $product->category_name }}</p>
                </td>
                <td>
                  <img src="{{ asset($product->image) }}" height="50" width="30" >
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $product->price }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $product->quantity }}</p>
                </td>
                <td class="text-sm">
                  <p class="text-xs text-secondary mb-0">{{ $product->status == 1 ? "Published" : "Unpublished" }}</p>
                </td>
                <td class="text-end">
                  <a href="{{ url('product/edit-product', ['id' => $product->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Edit
                  </a> |
                  <a href="{{ url('product/delete-product', ['id' => $product->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Delete
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="ps-4 pe-1">
        {{ $products->onEachSide(1)->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection