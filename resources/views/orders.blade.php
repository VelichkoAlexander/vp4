@extends('layouts.app')

@section('title', 'Мои заказы')

@section('content')
    <div class="content-main__container">
        <div class="cart-product-list">
            @forelse($orders as $product)
                <div class="cart-product-list__item">
                    <div class="cart-product__item__product-photo">
                        <img src="img/cover/{{$product->image}}" class="cart-product__item__product-photo__image">
                    </div>
                    <div class="cart-product__item__product-name">
                        <div class="cart-product__item__product-name__content">
                            <a href="{{route('product.show',['id'=>$product->id])}}">{{$product->name}}</a>
                        </div>
                    </div>
                    <div class="cart-product__item__cart-date">
                        <div class="cart-product__item__cart-date__content">{{$product->created_at}}</div>
                    </div>
                    <div class="cart-product__item__product-price">
                        <span class="product-price__value">{{$product->price}} рублей</span>
                    </div>
                </div>
            @empty
                <p>У вас нет заказов</p>
            @endforelse

        </div>
    </div>

@endsection
