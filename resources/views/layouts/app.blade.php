<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('./fontawesome/css/all.min.css') }}">

    <title>Online Library - Home</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="{{ asset ('./images/pro.png') }}" width="150px">
                    </a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                    </ul>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                            <form class="navbar-form navbar-left">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name=search value="{{ old('search',request()->input('search')) }}">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                            </form>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ms-auto"> --}}
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    @section('pagination')
    @show

        <!-- footer -->
        <div class="panel panel-default">
            <div class="panel-footer">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                <div class="text-center" id="center-content">
                    <img src="{{ asset ('./images/pro.png') }}" alt="logo" width="150px">
                </div>
                </div>
                <div class="col-sm-12 col-md-4">
                <div class="text-center">
                    <h4>Timedoor Academy Pro - Online Library</h4>
                    <p>Copyright 2023 &copy; All Right Reserved</p>
                </div>
                </div>
                <div class="col-sm-12 col-md-4">
                <div class="row" id="center-content">
                    <div class="col-sm-4 col-md-1">
                    <a href="#"><i class="fab fa-lg fa-facebook"></i></a>
                    </div>
                    <div class="col-sm-4 col-md-1">
                    <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                    <div class="col-sm-4 col-md-1">
                    <a href="#"><i class="fab fa-lg fa-twitter"></i></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

