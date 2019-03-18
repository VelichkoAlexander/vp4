<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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

}
