@extends('layouts.app');


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Product</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('product.update', ['id'=> $product->id])}}"
                              enctype="multipart/form-data">
                            @method('PATCH')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Product Name</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="name" required
                                           autofocus
                                           value="{{$product->name}}"
                                    >
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <label for="exampleFormControlFile1">Cover for product
                                    <img src="{{asset('/img/cover/'.$product->image)}}"
                                         class="cart-product__item__product-photo__image">
                                </label>
                                <div class="col-md-6">
                                    <input name='image' type="file" class="form-control-file"
                                           id="exampleFormControlFile1">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" required
                                           autofocus
                                           value="{{$product->price}}"
                                    >
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <label for="exampleFormControlSelect1">Category</label>
                                <div class="col-md-6">
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    {{$category->id === $product->category_id ? 'selected' : ''}}>
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desc" class="col-md-4 col-form-label text-md-right">Product Desc</label>
                                <div class="col-md-12">
                                    <textarea name="desc" id="desc" style="width: 100%; min-height: 250px">

                                    {{$product->desc}}

                                    </textarea>

                                </div>

                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{route('product.index')}}/{{$product->id}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


