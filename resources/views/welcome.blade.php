<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pemesanan Tiket Kereta</title>

    <link href="assets/css/style.css"
        rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-image: url('img/back.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #app {
            background-color: rgba(0, 0, 0, 0.459);
            height: 625px;
        }
    </style>
    <div id="app">

        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        <header class="py-3 bg-dark">
            <div class="container">
                <!-- Start Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        <h2>
                        <a href="/">
                            <b>
                            <span class="text-white">Tiket</span><span class="text-info"> Kereta</span>
                        </b>
                        </a>
                    </h2>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item pr-2">
                                <a class="btn btn-custom btn-info" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-custom btn-outline-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                                <a class="nav-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                    @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Header -->
            </div>
        </header><br><br><br><br><br><br><br><br><br>
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->

        <div class="kartu">
        <div class="content text-center text-white">
            <h1>SELAMAT DATANG DI WEB</h1>
            <h1> pemesanan tiket kereta</h1>
            <a href="/home" class="btn btn-info col-sm-2">Pesan Tiket</a>
        </div>
</div>
    </div>
</body>
</html>
