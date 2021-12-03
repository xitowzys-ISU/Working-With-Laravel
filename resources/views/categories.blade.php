<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Кальян клаб</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Все товары</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Категории</a></li>
            </ul>


            <form class="d-flex">
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


<div class="container">
    <div class="starter-template">
        <div class="panel">
            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles">
                <img src="http://laravel-diplom-1.rdavydov.ru/storage/categories/mobile.jpg">
                <h2>Мобильные телефоны</h2>
            </a>
            <p>
                В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
            </p>
        </div>
        <div class="panel">
            <a href="http://laravel-diplom-1.rdavydov.ru/portable">
                <img src="http://laravel-diplom-1.rdavydov.ru/storage/categories/portable.jpg">
                <h2>Портативная техника</h2>
            </a>
            <p>
                Раздел с портативной техникой.
            </p>
        </div>
        <div class="panel">
            <a href="http://laravel-diplom-1.rdavydov.ru/appliances">
                <img src="http://laravel-diplom-1.rdavydov.ru/storage/categories/appliance.jpg">
                <h2>Бытовая техника</h2>
            </a>
            <p>
                Раздел с бытовой техникой
            </p>
        </div>
    </div>
</div>

<footer class="py-5 bg-dark fixed-bottom">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
</body>
</html>
