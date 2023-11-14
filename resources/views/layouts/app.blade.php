<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistemas Operativos</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesone.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div style="justify-content: space-evenly; display:flex; width: 100%" class="opciones">
                     {{-- <a class="navbar navbar-expand-md navbar-light; ver"
                        style="color: black; text-decoration: none; " href="{{route('inicio')}}">
                        <img class="rosa" src="/img/logo.jpg" alt="">
                        Inicio
                    </a> --}}
                    <a class="navbar navbar-expand-md navbar-light; ver"
                        style="color: black; text-decoration: none; " href="{{route('Blog')}}">
                        <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/7407/7407915.png" alt="">
                        Blog
                    </a>
                    <a class="navbar navbar-expand-md navbar-light; ver"
                        style="color: black; text-decoration: none; " href="{{route('servicios')}}">
                        <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/2175/2175429.png" alt="">
                        Servicios
                    </a>
                    <a class="navbar navbar-expand-md navbar-light; ver"
                        style="color: black; text-decoration: none; " href="{{route('informacion')}}">
                        <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/8165/8165322.png" alt="">
                        Informacion
                    </a>
                    @Auth
                    <a class="ver"
                        style="color: black; text-decoration: none;" href="{{route('perfil')}}">
                        <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/8780/8780541.png" alt="">
                        Perfil
                    </a>
                    @endAuth
                    <style>
                        .rosa{
                            width: 35px;
                        }
                        .ver{
                            font-size: 16px;
                        }
                        @media screen and (max-width:500px){
                            .rosa{
                                width: 35px;
                            }
                            .ver{
                                font-size: 13px;
                            }
                        }
                    </style>
                 
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
    
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li style="background: blue;  border-radius: 10px; color: white;" class="nav-item">
                                    <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
    
                            @if (Route::has('register'))
                                <li style="background: #00c5e4;  border-radius: 10px; margin-left: 10px " class="nav-item">
                                    <a style="color: white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    </div>
</body>
</html>
