@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)

                    <tr>
                        <td>
                            <a href="{{route('product', [$product->category->code, $product->code])}}">
                                <img height="56px"
                                     src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg">
                                {{$product->name}}
                            </a>
                        </td>
                        <td><span class="badge bg-dark text-white ms-1 rounded-pill">{{$product->pivot->count}}</span>
                            <div class="btn-group">
                                <form action="{{route('basket-remove', $product)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="las la-minus"></i></button>
                                </form>
                                <form action="{{route('basket-add', $product)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="las la-plus"></i></button>
                                </form>
                            </div>
                        </td>
                        <td>{{$product->price}} руб.</td>
                        <td>{{$product->getPriceForCount()}} руб.</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{$order->getFullPrice()}} рублей</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a href="{{route('basket-place')}}">
                    <button type="button" class="btn btn-success">Оформить
                        заказ
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
