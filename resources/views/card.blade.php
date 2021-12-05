<div class="col mb-5">
    <div class="card h-100">
        <!-- Products image-->
        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..."/>
        <!-- Products details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Products name-->
                <h5 class="fw-bolder">{{$product->name}}</h5>
                <!-- Products price-->
                {{$product->price}} рублей
            </div>
        </div>
        <!-- Products actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

            <a href="{{route('basket')}}" class="btn btn-primary" role="button">В корзину</a>
            <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default"
               role="button">Подробнее</a>
        </div>
    </div>
</div>