@extends('master')

@section('title', $category->name)

{{--<header class="bg-dark py-5">--}}
{{--    <div class="container px-4 px-lg-5 my-5">--}}
{{--        <div class="text-center text-white">--}}
{{--            <h1 class="display-4 fw-bolder">Кальян клаб</h1>--}}
{{--            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
<!-- Section-->

@section('content')
    <h1>{{$category->name}}</h1>
    <h2>Найдено: {{$category->products->count()}}</h2>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        @foreach($category->products as $product)
            @include('card', compact('product'))
        @endforeach
    </div>
@endsection
