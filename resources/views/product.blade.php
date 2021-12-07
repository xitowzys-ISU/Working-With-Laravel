@extends('layouts.master')

@section('title', $product)

@section('content')
    <div class="starter-template">
        <h1>{{$product}}</h1>
        <p>Цена: <b> руб.</b></p>
        <img src="#">
        <p>test</p>
        <a class="btn btn-success" href="#">Добавить в корзину</a>
    </div>
@endsection
