<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('index')}}">Кальян клаб</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('index')}}">Все
                        товары</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('categories')}}">Категории</a></li>
            </ul>


            <form class="d-flex" action="{{route('basket')}}">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Корзина
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Панель администратора</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        @yield('content')
    </div>
</section>

{{--<footer class="py-5 bg-dark">--}}
{{--    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>--}}
{{--</footer>--}}

<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>

