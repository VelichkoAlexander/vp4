@extends('layouts.app')

@section('title', 'Мои заказы')

@section('content')
    <div class="content-main__container">
        <div class="cart-product-list">
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-1.jpg"
                                                                    class="cart-product__item__product-photo__image">
                </div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a href="#">The Witcher 3</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span>
                </div>
            </div>
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-2.jpg"
                                                                    class="cart-product__item__product-photo__image">
                </div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a href="#">OverWatch</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span>
                </div>
            </div>
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-3.jpg"
                                                                    class="cart-product__item__product-photo__image">
                </div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a href="#">DeusEx</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span>
                </div>
            </div>
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="img/cover/game-4.jpg"
                                                                    class="cart-product__item__product-photo__image">
                </div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a href="#">World Of Warcraft</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">14.12.2016</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">400 рублей</span>
                </div>
            </div>
        </div>
    </div>

@endsection
