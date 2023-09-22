<?php

namespace App\Http\Controllers;
use Cart;
use Session;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $cartItems = Cart::content();
        return view('front-end.checkout.checkout', [
            'cartItems' => $cartItems
        ]);
    }

    public function newOrder(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'payment_type' => 'required',
        ]);

        $paymentType = $request->payment_type;

        if($paymentType == "cash_on_delivery"){
            $shipping = New Shipping();
            $shipping->first_name = $request->first_name;
            $shipping->last_name  = $request->last_name;
            $shipping->email = $request->email;
            $shipping->phone = $request->phone;
            $shipping->street_address = $request->street_address;
            $shipping->city = $request->city;
            $shipping->country = $request->country;
            $shipping->order_notes = $request->order_notes;
            $shipping->save();
            
            $order = new Order;
            $order->customer_id = Session::get('myShopCustomerId');
            $order->shipping_id = $shipping->id;
            $order->order_total = Session::get('myShopOrderTotal');
            $order->save();

            $payment = new Payment;
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();
            }

            Cart::destroy();

            return redirect("/order/success");
            
        }elseif($paymentType == "paypal"){

        }

    }

    public function successOrder() {
        return view("front-end.checkout.success");
    }


}
