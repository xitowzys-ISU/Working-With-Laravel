<div class="col mb-5">
    <div class="card h-100">

        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..."/>

        <div class="card-body p-4">
            <div class="text-center">

                <h5 class="fw-bolder">{{$product->name}}</h5>

                {{$product->price}} рублей
            </div>
        </div>

        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <form action="{{route('basket-add', $product)}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default"
                   role="button">Подробнее</a>
            </form>
        </div>
    </div>
</div>
