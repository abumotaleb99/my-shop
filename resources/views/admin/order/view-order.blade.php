@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center" id="xyz"><b>Customer Info</b></h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $customer->street_address.', '. $customer->city }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center" id="xyz"><b>Shipping Info</b></h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $shipping->first_name.' '.$customer->shipping }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $shipping->phone }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $shipping->email }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $shipping->street_address.', '. $shipping->city }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center" id="xyz"><b>Payment Info</b></h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Payment Type</th>
                        <td>{{ $payment->payment_type }}</td>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <td>{{ $payment->status }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center" id="xyz"><b>Product Info</b></h3>
                <table class="table table-bordered">
                    <tr>
                        <th>SI No</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                    </tr>
                    @php($i= 1)
                    @foreach($orderDetails as $orderDetail)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $orderDetail->product_id }}</td>
                        <td>{{ $orderDetail->product_name }}</td>
                        <td>{{ $orderDetail->product_price }} TK</td>
                        <td>{{ $orderDetail->product_quantity }}</td>
                        <td>TK. {{ $orderDetail->product_price*$orderDetail->product_quantity }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection