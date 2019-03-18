<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        if (Auth::check()) {
            $userEmail = Auth::getUser()->email;
            $orders = \App\Order::where('email', '=', $userEmail)->join('products', 'orders.product_id', '=', 'products.id')->get();
            return view('orders', compact('orders'));
        }
        return redirect('/login');
    }

    public function store()
    {
        $this->middleware('guest');
        $validate = \request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'product_id' => 'required'
        ]);
        if (Order::create($validate)) {
            return ["success" => "all good"];
        }
        return ["error" => "some error"];


    }
}
