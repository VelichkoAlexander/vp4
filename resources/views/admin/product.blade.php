@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <a href="/product/create/" class="btn btn-info">create Products</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desc</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>
                                    <img src="{{asset('/img/cover/'.$product->image)}}"
                                         class="cart-product__item__product-photo__image">
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->desc}}</td>
                                <td>
                                    <a href="/product/{{$product->id}}/edit/" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection