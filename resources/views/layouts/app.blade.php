<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- левая часть навигации -->

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ url('/') }}">GorPortal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('applications.index') }}">{{ __('заявки') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('applications.create') }}">{{ __('создание заявки') }}</a>
                        </li>


                        <!-- бургер меню -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </ul>


                    <!-- правая часть навигации -->

                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>

                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user() }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Выйти') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>

                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">

            <div class="bg-white">

                <div class="container p-0">

                    @yield('content')

                </div>

            </div>

        </main>

        <footer class="bg-light flex justify-content-center">

            <div class="container">

                <div class="row">
                    
                    <div class="col">
                        <p class="m-3">О нас</p>
                        <p class="mx-3 my-2">Адрес: поселок ДОК, ул. рылеева д.38</p>
                        <p class="mx-3 my-2">Контактный номер: 8(800)555-35-35</p>
                        <p class="mx-3 my-2">E-mail: dobro@tyumen-city.ru</p>
                        <p class="mx-3 my-2">Мы вас ни разу не обманываем, не мы сами создаем проблемы, а вы. Вы лучшие и вообще прекрасные люди, которые заботятся о нашем любимом городе.</p>
                    </div>
                    <div class="col">
                        <p class="m-3">Наши партнеры</p>
                        <p class="mx-3 my-2"><a href="https://gkh.admtyumen.ru/">ЖКХ</a></p>
                        <p class="mx-3 my-2"><a href="https://sk607253.ru">Строительные материалы</a></p>
                        <p class="mx-3 my-2"><a href="https://enki-tk.ru">Цемент</a></p>
                        <p class="mx-3 my-2"><a href="https://aira.ru">Уличная мебель</a></p>
                    </div>
                    <div class="col mbot-5">
                        <p class="m-3">Наши проекты</p>
                        <p class="mx-3 my-2"><a href="https://admtyumen.ru/">Портал ОГВ ТО</a></p>
                        <p class="mx-3 my-2"><a href="https://gubernator.admtyumen.ru/">Губернатор</a></p>
                        <p class="mx-3 my-2"><a href="https://law.admtyumen.ru/">Законодательство</a></p>
                        <p class="mx-3 my-2"><a href="https://admtyumen.ru/ogv_ru/gov/local_gov/municipalities.htm">Местное самоуправление</a></p>
                        <p class="mx-3 my-2"><a href="https://gis.72to.ru/">Геопортал</a></p>
                        <p class="mx-3 my-2"><a href="https://uslugi.admtyumen.ru/lk/catalog/grServices/service.htm?id=147@egServiceTarget">Здравоохранение</a></p>
                    </div> 

                </div>

            </div>

        </footer>

    </div>
</body>

</html>