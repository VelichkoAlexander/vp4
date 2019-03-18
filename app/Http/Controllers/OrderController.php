<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;
use App\Order;
use App\User;
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

        $order = Order::create($validate);
        $user = User::where('is_admin', '=', true)->first('email');
        if ($order) {
            Mail::to($user->email)->send(
                new OrderCreated($order)
            );

            return ["success" => "all good"];
        }
        return ["error" => "some error"];


    }
}
