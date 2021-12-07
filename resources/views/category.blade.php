@extends('layouts.master')

@section('title', $category->name)

@section('content')
    <h1>{{$category->name}}</h1>
    <h2>Найдено: {{$category->products->count()}}</h2>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        @foreach($category->products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
