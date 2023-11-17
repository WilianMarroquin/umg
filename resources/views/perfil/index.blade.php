<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div style="justify-content: space-evenly; display:flex; width: 100%" class="opciones">
                {{-- <a class="navbar navbar-expand-md navbar-light; ver" style="color: black; text-decoration: none;"
                    href="{{ route('inicio') }}">
                    <img class="rosa" src="/img/logo.jpg" alt="">
                    Inicio
                </a> --}}
                <a class="navbar navbar-expand-md navbar-light; ver" style="color: black; text-decoration: none; "
                    href="{{ route('blog') }}">
                    <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/7407/7407915.png" alt="">
                    Blog
                </a>
                <a class="navbar navbar-expand-md navbar-light; ver" style="color: black; text-decoration: none;"
                    href="{{ route('servicios') }}">
                    <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/2175/2175429.png" alt="">
                    Servicios
                </a>
                <a class="navbar navbar-expand-md navbar-light; ver" style="color: black; text-decoration: none;"
                    href="{{ route('informacion') }}">
                    <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/8165/8165322.png" alt="">
                    Informacion
                </a>

                @Auth
                    <a class="navbar navbar-expand-md navbar-light; ver" style="color: black; text-decoration: none;"
                        href="{{ route('perfil') }}">
                        <img class="rosa" src="https://cdn-icons-png.flaticon.com/128/8780/8780541.png" alt="">
                        Perfil
                    </a>
                @endAuth
            </div>
            <style>
                .rosa {
                    width: 35px;
                }

                .ver {
                    font-size: 16px;
                }

                @media screen and (max-width:500px) {
                    .rosa {
                        width: 35px;
                    }

                    .ver {
                        font-size: 13px;
                    }
                }
            </style>
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
                            <li style="background: rgb(28, 255, 28); border-radius: 10px; color: white;" class="nav-item">
                                <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li style="background: rgb(6, 141, 6); border-radius: 10px; margin-left: 10px "
                                class="nav-item">
                                <a style="color: white" class="nav-link"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
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

    <style type="text/css">
        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
            line-height: 1.4;
        }


        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            color: #404040;
            font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
        }


        .seccion-perfil-usuario .perfil-usuario-body,
        .seccion-perfil-usuario {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
        }

        .seccion-perfil-usuario .perfil-usuario-header {
            width: 100%;
            display: flex;
            justify-content: center;

            margin-bottom: 1.25rem;
        }

        .seccion-perfil-usuario .perfil-usuario-portada {
            display: block;
            position: relative;
            width: 90%;
            height: 10rem;
            background-image: linear-gradient(45deg, #BC3CFF, #317FFF);
            border-radius: 0 0 20px 20px;

            background-image: url('http://localhost/multimedia/png/user-portada-3.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

        }

        .seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
            position: absolute;
            top: 1rem;
            right: 1rem;
            border: 0;
            border-radius: 8px;
            padding: 12px 25px;
            background-color: rgba(0, 0, 0, .5);
            color: #fff;
            cursor: pointer;
        }

        .seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
            margin-right: 1rem;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar {
            display: flex;
            width: 180px;
            height: 180px;
            align-items: center;
            justify-content: center;
            border: 7px solid #FFFFFF;
            background-color: #DFE5F2;
            border-radius: 50%;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            position: absolute;
            bottom: -40px;
            left: calc(50% - 90px);
            z-index: 1;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar img {
            width: 100%;
            position: relative;
            border-radius: 50%;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
            position: absolute;
            left: -2px;
            top: -2px;
            border: 0;
            background-color: #fff;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
        }

        .seccion-perfil-usuario .perfil-usuario-body {
            width: 70%;
            position: relative;
            max-width: 750px;
        }

        .seccion-perfil-usuario .perfil-usuario-body .titulo {
            display: block;
            width: 100%;
            font-size: 1.75em;
            margin-bottom: 0.5rem;
        }

        .seccion-perfil-usuario .perfil-usuario-body .texto {
            color: #848484;
            font-size: 0.95em;
        }

        .seccion-perfil-usuario .perfil-usuario-footer,
        .seccion-perfil-usuario .perfil-usuario-bio {
            display: flex;
            flex-wrap: wrap;
            padding: 1.5rem 2rem;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            background-color: #fff;
            border-radius: 15px;
            width: 100%;
        }

        .seccion-perfil-usuario .perfil-usuario-bio {
            margin-bottom: 1.25rem;
            text-align: center;
        }

        .seccion-perfil-usuario .lista-datos {
            width: 50%;
            list-style: none;
        }

        .seccion-perfil-usuario .lista-datos li {
            padding: 5px 0;
        }

        .seccion-perfil-usuario .lista-datos li>.icono {
            margin-right: 1rem;
            font-size: 1.2rem;
            vertical-align: middle;
        }

        .seccion-perfil-usuario .redes-sociales {
            position: absolute;
            right: calc(0px - 50px - 1rem);
            top: 0;
            display: flex;
            flex-direction: column;
        }

        .seccion-perfil-usuario .redes-sociales .boton-redes {
            border: 0;
            background-color: #fff;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: #fff;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            font-size: 1.3rem;
        }

        .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
            margin-top: .5rem;
        }

        .seccion-perfil-usuario .boton-redes.facebook {
            background-color: #4d78ec;
        }

        .seccion-perfil-usuario .boton-redes.twitter {
            background-color: #55c4f8;
        }

        .seccion-perfil-usuario .boton-redes.instagram {
            background: linear-gradient(45deg, hsl(301, 100%, 59%), #40A7FF);
        }

        /* adaptacion para dispositivos moviles */
        @media (max-width: 750px) {
            .seccion-perfil-usuario .lista-datos {
                width: 100%;
            }

            .seccion-perfil-usuario .perfil-usuario-portada,
            .seccion-perfil-usuario .perfil-usuario-body {
                width: 95%;
            }

            .seccion-perfil-usuario .redes-sociales {
                position: relative;
                flex-direction: row;
                width: 100%;
                left: 0;
                text-align: center;
                margin-top: 1rem;
                margin-bottom: 1rem;
                align-items: center;
                justify-content: center
            }

            .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
                margin-left: 1rem;
                margin-top: 0;
            }
        }
    </style>

    <div class="but" style="width: 100%;   text-align: center">
        <a style="" style="" href="{{ route('descripcion') }}"><button
                style="margin-top: 30px;  background: transparent; border: none; color: blue; text-decoration: underline; font-size: 24px">Configura
                tu perfil</button></a>
    </div>

    @foreach ($descripcion as $var)
        @if (Auth::user()->id == $var->users_id)
            <!-- cargar imagen desde dispositivo -->
            <section class="seccion-perfil-usuario">
                <div class="perfil-usuario-header">
                    <div class="perfil-usuario-portada">
                        <div class="perfil-usuario-avatar">
                            <img src="/img/{{ $var->foto }}" alt="">

                        </div>
                    </div>
                </div>
                </div>
                <div class="perfil-usuario-body">
                    <div class="perfil-usuario-bio">
                        <h3 class="titulo">{{ Auth::user()->name }}</h3>
                        <p class="texto">{{ $var->experiencia }}</p>

                        <a class="rt" href="{{ route('editar.perfil', $var) }}"><button class="es">Agregar
                                informacion al perfil</button></a>
                    </div>
                    <style>
                        .es {
                            background: transparent;
                            border: none;
                            color: blue;
                            text-decoration: underline;

                        }



                        @media screen and(max-width:500px) {
                            .es {
                                font-size: 13px;
                            }
                            .rt {
                              margin-bottom: -30px;

                            }
                        }
                    </style>




                    <div class="perfil-usuario-footer">
                        <ul class="lista-datos">
                            <li><i class="icono fas fa-map-signs"></i> {{ $var->preferencia_productos }}</li>
                            <li><i class="icono fas fa-phone-alt"></i> {{ $var->telefono }}</li>
                            <li><i class="icono fas fa-user-check"></i>{{ $var->nacionalidad }}</li>
                            <li><i class="icono fas fa-user-check"></i>{{ $var->etnia }}</li>
                        </ul>
                        <ul class="lista-datos">
                            <li><i class="icono fas fa-map-marker-alt"></i>{{ $var->direccion }}</li>
                            <li><i class="icono fas fa-calendar-alt"></i>{{ $var->fecha_nacimiento }}</li>
                            <li><i class="icono fas fa-user-check"></i>{{ $var->descripcion }}</li>
                        </ul>
                    </div>

                </div>
            </section>
            <style>
                .but {
                    display: none;
                }
            </style>
        @endif
    @endforeach

    <style>
        .mensaje a {
            color: inherit;
            margin-right: .5rem;
            display: inline-block;

        }

        .mensaje a:hover {
            color: #309B76;
            transform: scale(1.4)
        }
    </style>
    <div class="mis-redes"
        style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
        <p style="font-size: .75rem;">Nuestras Redes Sociales </p>
        <div>
            <a target="_blank" href="https://www.facebook.com/profile.php?id=100092850047728&mibextid=ZbWKwL"><i
                    class="fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://twitter.com/EcoRentGT?t=Yqva_suVtCDT1HBr0yFrAg&s=09"><i
                    class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://instagram.com/ecorent_gt?igshid=NTc4MTIwNjQ2YQ=="><i
                    class="fab fa-instagram"></i></a>

        </div>
    </div>

    {{-- <div class="agregar">
        <a href="{{ route('crear_producto') }}"><button><img
                    src="https://cdn-icons-png.flaticon.com/128/5127/5127835.png" alt=""> Agregar
                Producto</button></a>
    </div> --}}

    <div class="cont-general">
        <div class="cont-grupos">
            @foreach ($productos as $item)
                @if (Auth::user()->id == $item->users_id)
                    <div class="cont-individual">
                        <div class="arriba">
                            <div class="img">
                                <img src="/img/{{ $item->img }}" alt="">
                            </div>
                            <div class="textos">
                                <h3 class="ti">{{ $item->nombre }}</h3>
                                <small class="er">Tipo: </small><small>{{ $item->tipo }}</small><br>
                                <small class="er">Precio: </small><small>Q.{{ $item->precio }}</small><br>
                                <small class="er">Estado: </small><small>{{ $item->estado }}</small><br>

                            </div>
                        </div>
                        <div class="abajo">
                            <form action="{{ route('producto.delete', $item) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="delete" type="submit">Delete</button>
                            </form>
                            <a href="{{ route('editar_producto', $item) }}"><button
                                    class="editar">Editar</button></a>
                            <a href="{{ route('ver', $item->id) }}"><button class="butonp">Vizualisar</button></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <style>
        .cont-general {
            width: 70%;
            margin: auto;
            display: block;
        }

        .agregar {
            width: 100%;
            text-align: center;
        }

        .agregar a button {
            width: 200px;
            height: 50px;
            color: rgb(0, 168, 48);
            border: 1px solid green;
            background: rgb(255, 255, 255);
            margin-top: 20px;
            border-radius: 5px;
            transition: all .4s;
        }

        .agregar a button:hover {
            background: #309B76;
            color: white;
        }

        a button img {
            width: 30px;
        }

        .cont-grupos {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .cont-individual {
            width: 45%;
            height: 180px;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            padding: 20px;
            display: block;
            background: white;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .textos {
            display: block;
            width: 50%;
        }

        .textos h3 {
            text-align: center;
        }

        .er {
            font-weight: 800;
            margin-left: 5px;
        }

        .cont-individual .arriba .img {
            width: 50%;
            height: 100%;
        }

        .arriba .img img {
            width: 100%;
            height: 120px;
        }

        .arriba {
            display: flex;
        }

        .abajo {
            display: flex;
            justify-content: space-evenly;

        }

        .butonp {
            background: green;
            color: white;
            cursor: pointer;
            border: none;
            width: 100px;
            height: 30px;
            border-radius: 10px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.425);
        }

        .editar {
            background: transparent;
            border: none;
            border-radius: 5px;
            background: rgb(30, 227, 0);
            color: white;
            width: 100px;
            height: 30px;
            text-decoration: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.425);
        }

        .delete {
            background: transparent;
            border: none;
            border-radius: 5px;
            background: rgb(177, 0, 0);
            color: white;
            width: 100px;
            height: 30px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.425);
        }



        @media screen and (max-width:500px) {

            .cont-individual {
                width: 100%;
            }

            .editar {
                width: 70px;
                font-size: 10px;
            }

            .butonp {
                width: 70px;
                font-size: 10px;
            }

            .delete {
                width: 70px;
                font-size: 10px;
            }





        }



        }
    </style>

    </div>




</body>

</html>
