    @extends('layouts.app')

    @section('content')
        <div class="cont-general">
            <div class="informacion">
                <div     class="terminosCondiciones">
                    <p>La Ingeniería en Sistemas es una disciplina que desempeña un papel crucial en el mundo actual, ya que la tecnología y los sistemas de información son la columna vertebral de prácticamente todos los aspectos de nuestra vida.
Nuestro programa se caracteriza por su enfoque práctico, combinado con una base sólida de teoría. Los estudiantes no solo adquieren conocimientos en programación, diseño de sistemas y administración de bases de datos, sino que también aprenden a aplicar estas habilidades en situaciones del mundo real.
Lo que hace que nuestra Universidad Mariano Gálvez sea especial es el compromiso con la calidad educativa y la formación ética. Fomentamos en nuestros estudiantes los valores de integridad, responsabilidad y trabajo en equipo, que son fundamentales en la construcción de una carrera exitosa en Ingeniería en Sistemas.

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
