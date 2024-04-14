<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">DIMENTOR</a>
            <nav class="header__menu">
                <ul class="header__menu-list">
                    <li class="header__menu-item"><a href="post/create" class="header__menu-link">Create post</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')
</body>

</html>