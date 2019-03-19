<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product-crete', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->file('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img/cover'), $filename);
            $validationData['image'] = $filename;
        }

        Product::create($validationData);


        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = \App\Category::all();
        return view('product.index', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::select(
            'products.id',
            'products.name',
            'products.price',
            'products.image',
            'products.desc',
            'products.category_id',
            'categories.name as catName',
            'categories.desc as catdesc'
        )->join('categories', 'products.category_id', '=', 'categories.id')->where('products.id', $id)->get();
        $product = $product[0];
        return view('admin.product-edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validationData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->file('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img/cover'), $filename);
            $validationData['image'] = $filename;
        }

        $product->update($validationData);


        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/product');
    }
}
