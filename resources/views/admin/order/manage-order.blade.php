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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Total</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Date</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Status</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Type</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Status</th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($orders as $order)
              <tr>
                <td>
                  <h6 class="mb-0 ms-3 text-sm">{{ $i++ }}</h6>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->first_name . " " . $order->last_name }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->order_total }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->created_at }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->status }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->payment_type }}</p>
                </td>
                <td>
                  <p class="text-xs text-secondary mb-0">{{ $order->payment_status }}</p>
                </td>
                <td class="text-end">
                  <a href="{{ url('/order/view-order', ['id' => $order->id]) }}" class="text-secondary font-weight-bold text-xs">
                    View Order
                  </a> |
                  <a href="{{ url('/order/view-invoice', ['id' => $order->id]) }}" class="text-secondary font-weight-bold text-xs">
                    View Invoice
                  </a> |
                  <a href="{{ url('/order/download-invoice', ['id' => $order->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Download Invoice
                  </a> |
                  <a href="{{ url('/order/edit-order', ['id' => $order->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Edit
                  </a> |
                  <a href="{{ url('/order/delete-order', ['id' => $order->id]) }}" class="text-secondary font-weight-bold text-xs">
                    Delete
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="ps-4 pe-1">
        {{ $orders->onEachSide(1)->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection