<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OganiController extends Controller
{
    public function index() {
        return view('front-end.home.home');
    }

    public function categoryProduct() {
        return view('front-end.category.category-content');
    }

    public function shop() {
        return view('front-end.shop.shop-content');
    }

    public function contact() {
        return view('front-end.contact.contact-content');
    }



}
