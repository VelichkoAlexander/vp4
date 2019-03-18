@extends('layouts.app');


@section('title',  'Игры в разделе '. $category->name)


@section('content')

    <div class="content-main__container">
        <div class="products-columns">
            @foreach($categoryProducts as $product)
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product">
                        <a href="{{route('product.show',['id'=>$product->id])}}"
                           class="products-columns__item__title-product__link">
                            {{$product->name}}
                        </a>
                    </div>
                    <div class="products-columns__item__thumbnail">
                        <a href="{{route('product.show',['id'=>$product->id])}}"
                           class="products-columns__item__thumbnail__link">
                            <img src="/img/cover/{{$product->image}}" alt="Preview-image"
                                 class="products-columns__item__thumbnail__img">
                        </a>
                    </div>
                    <div class="products-columns__item__description">
                        <span class="products-price">{{$product->price}} руб</span>
                        <a href="#" class="btn btn-blue">Купить</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection