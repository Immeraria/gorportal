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

                <div class="container py-4">

                    @yield('content')

                </div>

            </div>

        </main>

        <footer class="bg-dark flex">

            <div class="row container text-center">

                <div class="col">
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                </div>
                <div class="col">
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                </div>
                <div class="col">
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                    <p class="m-3 text-white">Text</p>
                </div>

            </div>

        </footer>

    </div>
</body>

</html>