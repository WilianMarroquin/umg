    @extends('layouts.app')

    @section('content')
        <div class="cont-general">
            <div class="informacion">
                     <div id="vision" class="vision">
                <h1>Vision</h1>
                <p>Fomentar profesionales altamente capacitados, éticos y comprometidos con el avance tecnológico y el
                    bienestar de la sociedad guatemalteca, brindando una educación de calidad y promoviendo la investigación
                    y la innovación en el campo de la informática y los sistemas.
                    Asimismo, que sus graduados sean capaces de conservar, acrecentar y difundir la cultura universal,
                    afirmando los valores propios e inmersos en el proceso productivo del país, y que contribuyan con
                    espíritu crítico a la solución de los problemas nacionales.
                </p>
            </div>
            <div id="mision" class="vision">
                <h1>Mision</h1>
                <p>Ser un referente en la formación de profesionales altamente calificados y éticos, así como un centro de
                    innovación y desarrollo tecnológico que contribuye al avance de la tecnología y al bienestar de la
                    sociedad guatemalteca y más allá.
                    Y que sus egresados, sean capaces de asumir los desafíos del mundo contemporáneo y de una sociedad
                    cambiante, comprometidos con el desarrollo económico, social, político y cultural del país, en
                    permanente interacción con el entorno nacional, con renovada vocación de servicio y espíritu de
                    solidaridad.
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
