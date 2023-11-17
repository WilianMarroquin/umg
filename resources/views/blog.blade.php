@extends('layouts.app')

@section('content')
    <header style="margin-top: -30px">
        <div class="imagen-portada">
            <img src="https://www.galileo.edu/fisicc/files/2020/06/preview_video_fisicc-compressor.jpg" alt="">
            <div class="textos-imagen">
                <h1 style="font-weight: 900">Universidad Mariano Galvez De Guatemala</h1>
                <h2 style="font-weight: 900"> Buscar la verdad y la verdad os hara libres</h2>
            </div>
        </div>
        <div class="opciones-portada">
            <div class="Opciones-individual">
                <a href="{{ route('origen') }}">Origen Y Filosofia</a>
            </div>

            <a class="Opciones-individual" href="{{ route('protocolo') }}">
                <p>Protocolo</p>
            </a>

            <a href="{{ route('ingenieria') }}" class="Opciones-individual">
                <p>Ingenieria</p>
            </a>
            <a href="{{ route('valores') }}" class="Opciones-individual">
                <p>Valores</p>
            </a>
            <a href="#direccion" class="Opciones-individual">
                <p>Ubicacion</p>
            </a>
            <a href="{{ route('mision') }}" class="Opciones-individual">
                <p>Mision y Vision</p>
            </a>

        </div>
    </header>


    <div class="cont-eco">
        <div class="grupos-eco">
            <div class="individual-eco">
                <p> <span class="number">1</span>La Universidad Mariano Gálvez de Guatemala fue fundada el 20 de abril de
                    1966. Lleva el nombre del prócer de la independencia guatemalteca, Mariano Gálvez, y se estableció con
                    el propósito de proporcionar una educación superior de calidad en diversas áreas del conocimiento.
                    La carrera de Ingeniería en Sistemas, esta filosofía se refleja en la búsqueda de formar profesionales
                    competentes en tecnología, éticos en su práctica, comprometidos con la innovación y capaces de
                    contribuir al desarrollo tecnológico y económico de Guatemala.
                </p>
                <img src="ImagenePaginaDev\primeraImg.jpg" alt="">
            </div>
            <div class="individual-eco">
                <img src="ImagenePaginaDev\umg (7).jpg" alt="">
                <p><span class="number">2</span>La Ingeniería en Sistemas es una disciplina que desempeña un papel crucial
                    en el mundo actual, ya que la tecnología y los sistemas de información son la columna vertebral de
                    prácticamente todos los aspectos de nuestra vida.
                    Nuestro programa se caracteriza por su enfoque práctico, combinado con una base sólida de teoría. Los
                    estudiantes no solo adquieren conocimientos en programación, diseño de sistemas y administración de
                    bases de datos, sino que también aprenden a aplicar estas habilidades en situaciones del mundo real.
                    Lo que hace que nuestra Universidad Mariano Gálvez sea especial es el compromiso con la calidad
                    educativa y la formación ética. Fomentamos en nuestros estudiantes los valores de integridad,
                    responsabilidad y trabajo en equipo, que son fundamentales en la construcción de una carrera exitosa en
                    Ingeniería en Sistemas.
                </p>
            </div>
            <div class="individual-eco">
                <p><span class="number">3</span>La ingeniería de sistemas, también conocida como ingeniería de sistemas, es
                    un campo que se centra en el diseño, desarrollo, implementación y gestión de sistemas complejos que
                    pueden incluir software, hardware y componentes de procesos. Los ingenieros de sistemas trabajan para
                    integrar tecnologías y resolver problemas de sistemas a gran escala. Estos van desde sistemas de TI y
                    software hasta sistemas de control industrial, sistemas de gestión de proyectos y más. El objetivo es
                    garantizar que el sistema funcione de manera eficiente y satisfaga las necesidades de los usuarios
                    finales. La ingeniería de sistemas se centra en la aplicación de principios y técnicas al diseño,
                    desarrollo, implementación y mantenimiento de sistemas complejos. Estos sistemas pueden ser de
                    naturaleza técnica, como software, hardware y redes informáticas, o pueden ser sistemas más amplios que
                    incluyan procesos, personas y tecnología.</p>
                <img src="ImagenePaginaDev\umg (6).jpg" alt="">
            </div>
        </div>


        <div class="final-footer">
            <div class="letrass">
                <p>Mapa de sitio | Ayuda | Aviso Legal | Politica de privacidad | Terminos y Condiciones |
                    Contactenos</p>
                <p>@ Copyright 2023 - 2023, EcoRent.com -Networks. Derechos Reservados</p>
            </div>

        </div>
    </div>



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            width: 100%;
            display: block;
        }

        .textos-nav {
            display: flex;
            width: 70%;
            position: absolute;
            top: 30px;
            left: 400px;
        }

        .textos-nav p {
            margin-left: 15px;
            font-size: 20px;
            color: rgb(143, 136, 136);
        }

        .btn-acceder {
            width: 150px;
            height: 30px;
            background: rgb(14, 230, 97);
            position: absolute;
            right: 15px;
            top: 26px;
            text-align: center;
            line-height: 30px;
            border-radius: 10px;
            color: white;
        }

        .nav-bajo {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .nav-bajo p {
            margin-right: 15px;
            font-size: 15px;
            color: rgb(143, 136, 136);
        }

        .imagen-portada {
            margin-top: 10px;
            width: 100%;
        }

        .imagen-portada img {
            width: 100%;
            height: 430px;
            position: relative;
        }

        .opciones-portada {
            display: flex;
            box-shadow: 0px 13px 30px -8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            width: 95%;
            margin: auto;
            margin-bottom: 10px;
            margin-top: -150px;
            background-color: white;
            position: relative;
        }

        .Opciones-individual {
            width: 15%;
            height: 80px;
            border-right: 1px solid rgb(197, 192, 192);
            font-size: 20px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: none;
            color: gray;
        }

        .Opciones-individual p {
            margin-top: 30px;
        }

        .textos-imagen {
            position: relative;
            top: -300px;
            text-align: center;
            color: white;
        }

        .textos-imagen h1 {
            font-size: 40px;
            font-weight: 900;
            flex-wrap: wrap;
        }

        .contenidos-main {
            width: 90%;
            margin: auto;
            display: flex;
            height: 400px;
            margin-top: 40px;
        }

        .texto-main {
            line-height: 30px;
            display: flex;
            font-size: 14px;
            margin-right: 80px;
            color: rgb(0, 0, 0);

        }

        .texto-main img {
            height: 100%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .texto-main .titulo {
            text-align: center;
            width: 40%;
            margin-top: 13%;
            margin-left: 30px;
            color: rgb(83, 82, 82);
        }

        .eslogan {
            line-height: 24px;
            margin-top: 15px;
            color: rgb(166, 162, 162);
        }

        .textos-portada {
            line-height: 20px;
            font-size: 15px;
            margin-top: 10px;

        }

        .Opciones-individual:hover {
            text-decoration: underline;
            color: rgb(9, 167, 20);
        }

        .cont-opciones {
            width: 100%;
            margin: auto;
            margin-top: 20px;
            height: 620px;
            background-color: #e6f7ec;
            opacity: 1;
            background-image: radial-gradient(#0d9d24 0.6000000000000001px, transparent 0.6000000000000001px), radial-gradient(#0d9d24 0.6000000000000001px, #e6f7ec 0.6000000000000001px);
            background-size: 24px 24px;
            background-position: 0 0, 12px 12px;
        }

        .cont-grupos {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            margin: auto;
        }

        .cont-individual {
            width: 30%;
            margin-left: 3%;
            height: 250px;
            background: gray;
            position: relative;
            margin-top: 20px;
            box-shadow: 0 0 15px 0 rgb(14, 230, 97);
            cursor: pointer;
        }

        .cont-individual img {
            width: 100%;
            height: 100%;
        }

        .cont-individual h5 {
            font-size: 30px;
            font-weight: 600;
            position: relative;
            color: white;
            margin-top: 200px;
            text-align: center;
        }

        .titulo {
            color: rgb(0, 0, 0);
            text-align: center;

            margin-top: 30px;
            font-size: 35px;
        }

        .ocultor {
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .contImg {
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .individual-hover {
            position: absolute;
            top: 5px;
            left: 15px;
            transform: scale(0);
            transition: transform .4s;
        }

        .individual-hover p {
            margin-top: 10px;
            color: white
        }

        /* efecto del hober */
        .cont-individual:hover .ocultor {
            background-image: linear-gradient(120deg, #d5fc7941 0%, #96e6a14d 100%);

        }

        .cont-individual:hover .individual-hover {
            transform: scale(1);
        }

        .cont-individual:hover h5 {
            display: none;
        }

        a {
            margin-left: 15px;
            font-size: 20px;
            color: rgb(143, 136, 136);
            text-decoration: none;
        }

        .datos {
            display: flex;
        }

        .comentarios {
            width: 100%;
            margin-top: 60px;
            margin: auto;
            height: 500px;
            background: rgb(210, 247, 222);
            background: linear-gradient(0deg, rgba(210, 247, 222, 1) 0%, rgba(245, 245, 245, 1) 83%);

        }

        .datos {
            width: 70%;
            margin: auto;
            justify-content: center;
            flex-wrap: wrap;
        }

        .comentario {
            width: 630px;
            height: 200px;
            border: 0;
        }

        .datos-input {
            width: 190px;
            margin-left: 19px;
            font-size: 20px;
            border: 0;
        }

        .margin {
            margin-bottom: 10px;
        }

        .submit {
            color: white;
            background-color: #086818;
            width: 200px;
            height: 50px;
            text-align: center;
            margin-left: 41%;
            border: 0;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 20px;
        }

        .textos-input {
            margin-top: 10px;
            color: gray;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .ubicacion {
            width: 90%;
            margin: auto;
            height: 600px;
            margin-top: -80px;

            background: #f9fffa;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.1)
        }

        .cont-ubicacion {
            width: 95%;
            margin: auto;
            height: 100%;
        }

        .grupos-ubicacion {
            display: flex;
        }

        .ubi {
            width: 34%;
            height: 100%;
            margin-top: 45px;

        }

        .mapa-ubicacion {
            height: 500px;
            background: rgb(210, 247, 222);
            background: linear-gradient(0deg, rgba(210, 247, 222, 1) 0%, rgba(245, 245, 245, 1) 83%);
        }

        .mapa-ubicacion p {
            color: rgb(5, 5, 5);
            margin: 10px 10px;
        }

        .img-ubicacion img {
            width: 100%;
            height: 500px;
        }

        .mapa-ubicacion iframe {
            width: 100%;
            height: 280px;
        }

        .titulo-ubicacion {
            text-align: center;
            height: 500px;

        }

        .titulo-ubicacion .letras {
            margin-top: 370px;
            font-weight: 900;
        }

        .letras img {
            width: 260px;
            position: absolute;
            margin-top: -250px;
            margin-left: -125px;
        }

        footer {
            width: 100%;
            height: 250px;

            margin-top: -70px;
        }

        .cont-footer {
            margin: 70px 70px;
            padding: 70px 70px;
        }

        .grupos-footer {
            display: flex;
            justify-content: space-evenly;
        }

        .grupos-footer h4 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .grupos-footer p {
            line-height: 25px;
        }

        .final-footer {
            width: 120%;
            height: 100px;
            text-align: center;
            color: white;
            background: black;
            box-shadow: 0 0 6px 0 rgb(0, 0, .6);
            line-height: 20px;
            margin-left: -10%;
            margin-top: 10px;
        }

        .final-footer .letrass {
            padding: 10px 5px;
        }

        .individual-eco {
            display: flex;
            margin-top: 20px;
        }

        .cont-eco {
            background-color: rgba(245, 245, 245, 1);
            margin-top: -60px;

        }

        .individual-eco p {
            margin-top: 100px;
            font-size: 15px;
        }

        .grupos-eco {
            margin: 60px;
            padding: 60px;
        }

        .grupos-eco img {
            width: 40%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .number {

            background: rgb(40, 120, 16);
            color: white;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            width: 30px;
            height: 30px;
            padding: 3px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
            margin-right: 5px;

        }

        @media screen and (max-width:500px) {
            .opciones-portada {
                margin-top: -280px;
            }

            .Opciones-individual p {
                font-size: 10px;
            }

            .grupos-eco {
                width: 100%;

            }

            .individual-eco p {
                margin-top: 100px;
                font-size: 10px;
            }

            .grupos-eco {
                margin: 10px;
                padding: 10px;
            }

            .grupos-eco img {
                height: 100px;
                margin-top: 150px;
            }

            .ubicacion {
                margin-top: 60px;

            }

            .ubicacion {
                width: 90%;
                margin: auto;
                height: 600px;
                background: #f9fffa;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.1)
            }

            .cont-ubicacion {
                width: 95%;
                margin: auto;
                height: 100%;
            }

            .grupos-ubicacion {
                display: flex;
            }

            .ubi {
                width: 34%;
                height: 100%;


            }

            .mapa-ubicacion {
                height: 500px;
                background: rgb(210, 247, 222);
                background: linear-gradient(0deg, rgba(210, 247, 222, 1) 0%, rgba(245, 245, 245, 1) 83%);
            }

            .mapa-ubicacion p {
                color: rgb(5, 5, 5);
                margin: 10px 10px;
                font-size: 7px;
            }

            .img-ubicacion img {
                width: 100%;
                height: 500px;
            }

            .mapa-ubicacion iframe {
                width: 100%;
                height: 200px;
            }

            .titulo-ubicacion {
                text-align: center;
                height: 500px;

            }

            .titulo-ubicacion .letras {
                margin-top: 370px;
                font-weight: 900;
            }

            .letras img {
                width: 260px;
                position: absolute;
                margin-top: -250px;
                margin-left: -125px;
                font-size: 10px;
            }

            .comentarios {
                display: none;
            }



        }
    </style>
@endsection
