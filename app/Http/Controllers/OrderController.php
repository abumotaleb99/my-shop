<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\OrderDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manageOrderInfo () {
        $orders = DB::table('orders')
                    ->join('customers', 'orders.customer_id', '=', 'customers.id')
                    ->join('payments', 'orders.id', '=', 'payments.order_id')
                    ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.status AS payment_status')
                    ->paginate(10);

        return view("admin.order.manage-order", [
            'orders' => $orders
        ]);
    }


}
