<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userEmail = Auth::getUser()->email;
        $orders = \App\Order::where('email', '=', $userEmail)->join('products', 'orders.product_id', '=', 'products.id')->get();
        return view('orders', compact('orders'));
    }
}
