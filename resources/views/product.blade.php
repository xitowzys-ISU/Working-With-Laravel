@extends('layouts.master')

@section('title', $product)

@section('content')
    <div class="starter-template">
        <h1>{{$product}}</h1>
        <p>Цена: <b>71990 руб.</b></p>
        <img src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>
        <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>
    </div>
@endsection
