@extends('layouts.app')

@section('content')
 <form action="{{route('descripcion.update', $var)}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PATCH')
        <div class="grupo" style="display: none">
            <label for="">Nombre</label>
            <input type="text" name="users_id" value="{{Auth::user()->id}}">
        </div>
        <div class="grupo">
            <label for="">Direccion:</label>
            <input type="text" name="direccion" value="{{$var->direccion}}">
        </div>
        <div class="grupo">
            <label for="">Telefono</label>
            <input type="text" name="telefono" value="{{$var->telefono}}">
        </div>
        <div class="grupo">
            <label for="">Fecha de nacimiento:</label>
            <input type="text" name="fecha_nacimiento" value="{{$var->fecha_nacimiento}}">
        </div>
        <div class="grupo">
            <label for="">Nacionalidad:</label>
            <input type="text" name='nacionalidad' value="{{$var->nacionalidad}}">
        </div>
        <div class="grupo">
            <label for="">Etnia:</label>
            <input type="text" name='etnia' value="{{$var->etnia}}">
        </div>
        <div class="grupo">
            <label for="">Preferencia de productos:</label>
            <input type="text" name='preferencia_productos' value="{{$var->preferencia_productos}}">
        </div>
        <div class="grupo">
            <label for="">Profecion:</label>
            <input type="text" name='experiencia' value="{{$var->experiencia}}">
        </div>
        <div class="grupo">
            <label for="">Nit:</label>
            <input type="text" name='nit' value="{{$var->nit}}">
        </div>
        <div class="grupo" style="margin: auto; margin-bottom: 20px">
            <label for="">Foto de perfil:</label>
            <label for="file-upload" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Subir archivo
            </label>
            <input name="foto" id="file-upload" onchange='cambiar()' value="{{$var->foto}}" type="file" style='display: none;'/>
            <div id="info"></div>
        </div>
        <div class="grupo">
            <label for="">Descripcion de su perfil:</label>
            <input type="text" name='descripcion' value="{{$var->descripcion}}">
        </div>
        <div class="grupo" style="display: none">
            <label for=""></label>
            <input type="text" name='unico' value="1">
        </div>

        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Enviar</button>
    </form>

    <script>
        function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}
    </script>
    <style>
        .subir {
            padding: 5px 10px;
            background: #84f53e;
            color: #fff;
            border: 0px solid #fff;
            cursor: pointer;
        }

        .subir:hover {
            color: #fff;
            background: #426b00;
        }

        form {
            width: 400px;
            margin: auto;
            display: grid;
            border: 1px solid gray;
            padding: 30px;
            box-shadow: 0 0 6px 0 rgb(0, 0, .6);
            border-radius: 10px;

        }

        .grupo {
            margin-bottom: 10px;
        }

        input {
            border: none;
            background: transparent;
            border-bottom: 1px solid gray;
            outline: none;
            width: 100%;
            font-size: 18px;
        }

        label {
            font-size: 15px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        button {
            position: relative;
            display: inline-block;
            padding: 20px 40px;
            margin: 40px 0;
            background: transparent;
            color: #4ae664;
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s;
            letter-spacing: 4px;
            overflow: hidden;
            border: none;
        }

        button:hover {
            background: #4ae664;
            color: #050801;
            box-shadow: 0 0 6px 0 rgb(0, 0, .6);
        }

        button span {
            position: absolute;

        }

        button span:nth-child(1) {
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #4ae664);
            animation: animate1 1s linear infinite;

        }

        @keyframes animate1 {
            0% {
                left: -100%;

            }

            50%,
            100% {
                left: 100%;

            }
        }

        button span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #4ae664);
            animation: animate2 1s linear infinite;
            animation-delay: 0.25s;

        }

        @keyframes animate2 {
            0% {
                top: -100%;

            }

            50%,
            100% {
                top: 100%;

            }
        }

        button span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #4ae664);
            animation: animate3 1s linear infinite;
            animation-delay: 0.50s;
        }

        @keyframes animate3 {
            0% {
                right: -100%;

            }

            50%,
            100% {
                right: 100%;

            }
        }

        button span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #4ae664);
            animation: animate4 1s linear infinite;
            animation-delay: 0.75s;

        }

        @keyframes animate4 {
            0% {
                bottom: -100%;

            }

            50%,
            100% {
                bottom: 100%;

            }
        }
        @media screen and (max-width:500px){

form{
    width: 300px;
}

}
    </style>
    
@endsection