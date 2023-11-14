    @extends('layouts.app')

    @section('content')
        <div class="cont-general">
            <div class="informacion">
                <div     class="terminosCondiciones">
                    <p>La Universidad Mariano Gálvez de Guatemala fue fundada el 20 de abril de 1966. Lleva el nombre del
                        prócer de la independencia guatemalteca, Mariano Gálvez, y se estableció con el propósito de
                        proporcionar una educación superior de calidad en diversas áreas del conocimiento.
                        La carrera de Ingeniería en Sistemas, esta filosofía se refleja en la búsqueda de formar
                        profesionales competentes en tecnología, éticos en su práctica, comprometidos con la innovación y
                        capaces de contribuir al desarrollo tecnológico y económico de Guatemala.
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
