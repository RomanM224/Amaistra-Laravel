<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('custom_css')
</head>

<body style="background-image:url({{ asset('images/background.jpg')}})">
    <div class="page">
        <header style="background-image:url({{ asset('images/header_img.jpg')}})">
            <div class="logo_block">
                <a href="">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <nav>
                <ul class="nav_list">
                    <li> <a href="{{ route('index') }}" class="navbar_item">Главная</a></li>
                    <li> <a href="{{ route('orders') }}" class="navbar_item">Заказы</a></li>
                    <li> <a href="{{ route('showAllPosts') }}" class="navbar_item">Новости</a></li>
                    <li> <a href="{{ route('showAllReview') }}" class="navbar_item">Отзовы</a></li>
                    <li> <a href="{{ route('contacts') }}" class="navbar_item">Контакты</a></li>
                    @auth 
                    <li> <a href="{{ route('home') }}" class="navbar_item">Панель Админа</a></li>
                    @endauth
                </ul>
            </nav>

        </header>


        @yield('content')
    </div>



</body>

</html>