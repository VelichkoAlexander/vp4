<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function category()
    {
        $categories = Category::all();
        return view('category.admin', compact('categories'));
    }

    public function order()
    {
        $orders = Order::join('products', 'orders.product_id', '=', 'products.id')->get();
        return view('admin.orders', compact('orders'));
    }

    public function product()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function email()
    {
        if (Auth::check()) {
            $user = Auth::getUser();
        }
        return view('admin.email-edit', compact('user'));
    }


}
