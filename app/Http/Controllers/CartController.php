<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        $this->validate($request, [
            'qty' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);

        Cart::add([
            'id' => $request->product_id,
            'name' => $product->name,
            'qty' => $request->qty,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'image' => $product->image
                ]
            ]);

        return redirect('/cart/show');
    }

    public function showCart() {
        $cartItems = Cart::content();

        return view('front-end.cart.cart', [
            'cartItems' => $cartItems
        ]);
    }

    public function deleteCartItem($rowId) {
        Cart::remove($rowId);

        return redirect('/cart/show');
    }

    
}
