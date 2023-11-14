    @extends('layouts.app')

    @section('content')
        <div class="cont-general">
            <div class="informacion">
                <div class="terminosCondiciones">
                    <p>La ingeniería de sistemas, también conocida como ingeniería de sistemas, es un campo que se centra en
                        el diseño, desarrollo, implementación y gestión de sistemas complejos que pueden incluir software,
                        hardware y componentes de procesos. Los ingenieros de sistemas trabajan para integrar tecnologías y
                        resolver problemas de sistemas a gran escala. Estos van desde sistemas de TI y software hasta
                        sistemas de control industrial, sistemas de gestión de proyectos y más. El objetivo es garantizar
                        que el sistema funcione de manera eficiente y satisfaga las necesidades de los usuarios finales. La
                        ingeniería de sistemas se centra en la aplicación de principios y técnicas al diseño, desarrollo,
                        implementación y mantenimiento de sistemas complejos. Estos sistemas pueden ser de naturaleza
                        técnica, como software, hardware y redes informáticas, o pueden ser sistemas más amplios que
                        incluyan procesos, personas y tecnología.
                    </p>
                </div>
            </div>
        </div>
        <style>
            ul {
                list-style: none;
                margin-left: -20px;
                text-align: center
            }

            ul li a {
                text-decoration: none;
                color: black;
                font-size: 16px;
                line-height: 50px;
                font-weight: 900;
            }

            .cont-general {
                display: flex;
            }

            .nav {
                position: fixed;
            }

            .informacion {
                width: 68%;
                margin: auto;
                box-shadow: 0 0 6px 0 rgba(0, 128, 128, 0.126);
                padding: 40px;
                background: white;
            }

            p {
                font-size: 18px;
            }

            h1 {
                text-align: center
            }

            h4 {
                text-align: start;
                font-weight: 900;
            }

            h6 {
                font-weight: 900;
                font-size: 19px;
            }

            @media screen and (max-width:500px) {
                .nav {
                    display: none;
                }

                .informacion {
                    width: 93%;

                }

                p {
                    font-size: 13px;
                }
            }
        </style>
    @endsection
