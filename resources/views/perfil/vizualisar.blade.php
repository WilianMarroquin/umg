@extends('layouts.app')

@section('content')


<div class="con-gereral">
<h1  style="text-align: center"> {{$item->nombre}}</h1>
<span style="font-size: 18px; font-weight: 800">Descripcion: </span><span>{{$item->descripcion}}</span><br>
<span style="font-size: 18px; font-weight: 800">Tipo: </span><span>{{$item->tipo}}</span><br>
<span style="font-size: 18px; font-weight: 800">Estado: </span><span>{{$item->estado}}</span><br>
<span style="font-size: 18px; font-weight: 800">Precio: </span><span>Q.{{$item->precio}}</span><br>
<span style="font-size: 18px; font-weight: 800">Unidades: </span><span>{{$item->unidades}}</span><br>
<div style="width: 100%" class="img">
<img style="width: 50%; height: 200px; margin-left: 22%" src="/img/{{$item->img}}" alt="">    
</div>

</div>
<style>
    .con-gereral{
        background: white; border-radius: 10px; width: 50%; height: 500px; box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.463); margin: auto; padding: 20px;
    }
    @media screen and (max-width:500px){
        .con-gereral{
            width: 90%; 
        }
    }
</style>

@endsection