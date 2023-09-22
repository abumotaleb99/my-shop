<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showCustomerRegisterForm() {
        return view('front-end.customer.register');
    }

    public function customerRegister(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'password' => 'required|min:6|max:30'
        ]);

        $customer = new Customer;

        $customer->first_name = $request->first_name;
        $customer->last_name  = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->street_address = $request->street_address;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->password = bcrypt($request->password);
        $customer->save(); 

        // return response()->json($customer);

        $customerId = $customer->id;
        Session::put('myShopCustomerId', $customerId);
        Session::put('myShopCustomerName', $customer->first_name . ' ' . $customer->last_name);

        return redirect("/");
    }

    public function showCustomerLoginForm() {
        return view('front-end.customer.login');
    }

    public function customerLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6|max:30'
        ]);

        $customer = Customer::where('email', $request->email)->first();

        if($customer){
            if(password_verify($request->password, $customer->password)) {
                Session::put('myShopCustomerId', $customer->id);
                Session::put('myShopCustomerName', $customer->first_name . ' ' . $customer->last_name);
    
                return redirect('/');
    
            }else{
                return redirect('/customer/login')->with('message', 'Please, use valid password!');
            }
        }else{
            return redirect('/customer/login')->with('message', 'Please use valid email and password!');
        }

        return redirect("/");
    }

    public function customerLogout(Request $request) {
        Session::forget('myShopCustomerId');
        Session::forget('myShopCustomerName');

        return redirect('/');
    }
}
