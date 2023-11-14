@extends('layouts.app')

@section('content')
    <div class="encabezado">
        <img src="/img/logogrande.png" alt="">

        <div class="res">
            <div class="complementor">
                <img src="https://cdn-icons-png.flaticon.com/128/3722/3722195.png" alt="">
            </div>
            <div class="in">
                <input type="text" placeholder="Buscar..">
            </div>
        </div>
    </div>
    </div>
    <div style="width: 90%; height:2px; border-bottom:1px solid gray; margin:auto; margin-bottom: 10px;" class="linea">

    </div>
    <div class="productos">
        @foreach ($productos as $item)
            @if ($item->unidades>0)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <span style="color: rgb(12, 255, 12); position:absolute">{{ $item->estado }}</span>
                            <img src="/img/{{ $item->img }}" alt="">
                            <h2>{{ $item->nombre }} <span
                                    style="color: green; font-size: 12px;">Q.{{ $item->precio }}</span>
                            </h2>
                        </div>
                        <div class="flip-card-back">
                            <h5 style="text-align: center; font-weight: 900">{{ $item->nombre }}</h5>
                            <p style="line-height: 18px">{{ $item->descripcion }}</p>
                            <p style="text-align: center; text-decoration: underline; ">{{ $item->venta_arquiler }}</p>
                            <p style="color: rgb(0, 255, 0)">{{ $item->estado }}</p>
                            @auth
                                <a href="{{ route('facturar', $item) }}"><button class="bt">{{$item->venta_arquiler}}
                                        <span>Q.{{ $item->precio }}</span></button></a>
                            @endauth
                            @guest
                                <h5 style="color: red">Para realizar la compra debe iniciar secion o registrarse</h5>
                            @endguest

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
<style>
    .bt {
        width: 100%;
        height: 30px;
        border: none;
        border: 1px solid green;
        color: green;
        background: transparent;
        margin: auto;
        transition: all .4s;
    }

    .bt:hover {
        background: green;
        color: white;
        box-shadow: 0 0 6px rgba(0, 255, 0, 0.224);
    }


    .productos {
        width: 95%;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin: auto;

    }

    .flip-card {
        background: transparent;
        width: 280px;
        height: 250px;
        perspective: 1000px;
        margin-bottom: 13px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 16px;
    }

    .flip-card-front {
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.066);
        background: white;
    }

    .flip-card-front img {
        width: 80%;
        height: 74%;
        margin-top: 1rem;
    }

    .flip-card-back {
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.066);
        background: white;
        color: rgb(0, 0, 0);
        transform: rotateY(180deg);
        padding: 20px;
        text-align: start;
    }



    .link img {
        width: 30px;
    }

    ul {
        display: flex;
        justify-content: space-evenly;
    }

    ul li {

        list-style: none;
    }

    ul li a {
        color: black;
        text-decoration: none;
        font-size: 18px;

    }

    .encabezado {
        display: flex;
        width: 100%;
        padding: 20px;
    }

    .encabezado img {
        width: 20%;

    }

    .res {
        display: flex;
        margin-left: 1.5%;
        margin-top: 35px;
        width: 100%;
    }

    .in {
        width: 100%;
        display: flex
    }

    .in input {
        width: 60%;
        height: 50px;
        background: rgb(234, 229, 229);
        border: none;
        outline: none;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .complementor {
        height: 50px;
        width: 50px;
        border-top-left-radius: 10px;
        background: rgb(234, 229, 229);
        border-bottom-left-radius: 10px;
        padding: 7px;
    }


    .complementor img {
        width: 35px;
        height: 35px;
    }
</style>
