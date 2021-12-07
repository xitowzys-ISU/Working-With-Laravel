@extends('layouts.master')

@section('title', 'Все товары')

@section('content')
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach


    </div>
@endsection
