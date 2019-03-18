@extends('layouts.app');


@section('title',  'Последние товары')


@section('content')

    <div class="content-main__container">
        <div class="products-columns">
            @foreach($lastProducts as $product)
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
                        <a  href="javascript:;"
                           class="btn btn-blue js-orderBtn" data-product_id="{{$product->id}}">Купить</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection