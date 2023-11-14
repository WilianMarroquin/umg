@extends('layouts.app')


@section('content')
    <div class="cont-general">
        <div class="informacion">
            <div id="terminos" class="terminosCondiciones">
                <h1>Universidad Mariano Galvez</h1>
                <p>La Universidad Mariano Gálvez de Guatemala fue fundada el 20 de abril de 1966. Lleva el nombre del prócer
                    de la independencia guatemalteca, Mariano Gálvez, y se estableció con el propósito de proporcionar una
                    educación superior de calidad en diversas áreas del conocimiento.
                    La carrera de Ingeniería en Sistemas, esta filosofía se refleja en la búsqueda de formar profesionales
                    competentes en tecnología, éticos en su práctica, comprometidos con la innovación y capaces de
                    contribuir al desarrollo tecnológico y económico de Guatemala.
                </p>
            </div>
            <div id="quienes" class="quienesSomos">
                <h1>¿Quienes Somos?</h1>
                <p>Somos una empresa con una plataforma en línea que conecta a propietarios de artículos de consumo
                    frecuente, como ropa, juguetes, herramientas y electrodomésticos, con personas que desean utilizar estos
                    artículos permamente o temporalmente, tambien tenemos a su dispocicion asesorameinto y servicios con el
                    fin de suplir todas sus necesidades. La idea principal es fomentar la economía circular y reducir el
                    consumo necesario y el desperdicio.</p>
            </div>
            <div id="sobre" class="SobreEcoRent">
                <h1>Presentacion</h1>
                <p>La Ingeniería en Sistemas es una disciplina que desempeña un papel crucial en el mundo actual, ya que la
                    tecnología y los sistemas de información son la columna vertebral de prácticamente todos los aspectos de
                    nuestra vida.
                    Nuestro programa se caracteriza por su enfoque práctico, combinado con una base sólida de teoría. Los
                    estudiantes no solo adquieren conocimientos en programación, diseño de sistemas y administración de
                    bases de datos, sino que también aprenden a aplicar estas habilidades en situaciones del mundo real.
                    Lo que hace que nuestra Universidad Mariano Gálvez sea especial es el compromiso con la calidad
                    educativa y la formación ética. Fomentamos en nuestros estudiantes los valores de integridad,
                    responsabilidad y trabajo en equipo, que son fundamentales en la construcción de una carrera exitosa en
                    Ingeniería en Sistemas.

                </p>
                <p>
                </p>
                <h6>Ingenieria En Sistemas</h6>
                <p>La ingeniería de sistemas, también conocida como ingeniería de sistemas, es un campo que se centra en el
                    diseño, desarrollo, implementación y gestión de sistemas complejos que pueden incluir software, hardware
                    y componentes de procesos. Los ingenieros de sistemas trabajan para integrar tecnologías y resolver
                    problemas de sistemas a gran escala. Estos van desde sistemas de TI y software hasta sistemas de control
                    industrial, sistemas de gestión de proyectos y más. El objetivo es garantizar que el sistema funcione de
                    manera eficiente y satisfaga las necesidades de los usuarios finales. La ingeniería de sistemas se
                    centra en la aplicación de principios y técnicas al diseño, desarrollo, implementación y mantenimiento
                    de sistemas complejos. Estos sistemas pueden ser de naturaleza técnica, como software, hardware y redes
                    informáticas, o pueden ser sistemas más amplios que incluyan procesos, personas y tecnología.</p>
            </div>
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
            <div id="valores" class="valores">
                <h1>Valores</h1>
                <h6>Sostenibilidad:</h6>
                <p>El proyecto fomenta la reutilización y el intercambio de objetos, lo que contribuye a reducir el impacto
                    ambiental de la producción y el consumo.
                </p>
                <h6>Comunidad:</h6>
                <p>El proyecto crea una comunidad de usuarios que comparten una visión común de consumo más consciente y
                    colaborativo.
                </p>
                <h6>Confianza:</h6>
                <p>El proyecto promueve la confianza entre los usuarios mediante la creación de perfiles verificados, una
                    plataforma segura y un sistema de calificación de usuarios.
                </p>
                <h6>Empatia:</h6>
                <p>El proyecto fomenta la empatía y la compasión entre los usuarios, ya que se basa en la idea de compartir
                    y ayudar a otros miembros de la comunidad.
                </p>
                <h6>Ahorro:</h6>
                <p>El proyecto permite a los usuarios ahorrar dinero al no tener que comprar objetos que sólo necesitan usar
                    temporalmente.
                </p>
                <h6>Innovacion:</h6>
                <p>El proyecto propone una nueva forma de consumo que desafía los modelos tradicionales de producción y
                    consumo.
                </p>
                <h6>Diversidad</h6>
                <p>El proyecto fomenta la diversidad de objetos y experiencias que los usuarios pueden compartir, lo que
                    enriquece la vida de todos los miembros de la comunidad.</p>
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
