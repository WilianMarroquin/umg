    @extends('layouts.app')

    @section('content')
        <div class="cont-general">
            <div class="informacion">
                <div class="terminosCondiciones">
                    <div id="valores" class="valores">
                        <h1>Valores</h1>
                        <h6>Sostenibilidad:</h6>
                        <p>El proyecto fomenta la reutilización y el intercambio de objetos, lo que contribuye a reducir el
                            impacto
                            ambiental de la producción y el consumo.
                        </p>

                        <h6>Comunidad:</h6>
                        <p>El proyecto crea una comunidad de usuarios que comparten una visión común de consumo más
                            consciente y
                            colaborativo.
                        </p>
                        <h6>Confianza:</h6>
                        <p>El proyecto promueve la confianza entre los usuarios mediante la creación de perfiles
                            verificados, una
                            plataforma segura y un sistema de calificación de usuarios.
                        </p>
                        <h6>Empatia:</h6>
                        <p>El proyecto fomenta la empatía y la compasión entre los usuarios, ya que se basa en la idea de
                            compartir
                            y ayudar a otros miembros de la comunidad.
                        </p>
                        <h6>Ahorro:</h6>
                        <p>El proyecto permite a los usuarios ahorrar dinero al no tener que comprar objetos que sólo
                            necesitan usar
                            temporalmente.
                        </p>
                        <h6>Innovacion:</h6>
                        <p>El proyecto propone una nueva forma de consumo que desafía los modelos tradicionales de
                            producción y
                            consumo.
                        </p>
                        <h6>Diversidad</h6>
                        <p>El proyecto fomenta la diversidad de objetos y experiencias que los usuarios pueden compartir, lo
                            que
                            enriquece la vida de todos los miembros de la comunidad.</p>
                    </div>
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
