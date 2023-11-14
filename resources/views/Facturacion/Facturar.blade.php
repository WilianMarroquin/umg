@extends('layouts.app')

@section('content')

</div><div id="app" class="col-11 rosap">

    <h2>Comprobante</h2>

    <div class="row my-3">
      <div class="col-10">
        <h1>EcoRent</h1>
        <p>Guastatoya, El Progreso</p>
      </div>
      <div class="col-2">
        <img class="je" src="/img/logogrande.png" />
      </div>
    </div>
  
    <hr />
  
    <div class="row fact-info mt-3">
      <div class="col-3">
        <h5>Facturar a</h5>
        <p>
            {{$factura['users_id']}}
        </p>
      </div>
      <div class="col-3">
        <h5>Enviar a</h5>
        <p>
          {{$factura['direccion']}}
          {{$factura['correo']}}
        </p>
      </div>
      <div class="col-3">
        
        <h5>Tipo de pago</h5>
        <h5>Tipo de tramite</h5>
      </div>
      <div class="col-3">
    
        <p>{{$factura['tipo_pago']}}</p>
        <p>{{$factura['venta_alquiler']}}</p>
      </div>
    </div>
  
    <div class="row my-5">
      <table class="table table-borderless factura rosas">
        <thead>
          <tr>
            <th>Cant.</th>
            <th>Descripcion</th>
            <th>Precio Unitario</th>
            <th>Importe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>{{$factura['nombre_producto']}}</td>
            <td>{{$factura['precio']}}</td>
          </tr>
        
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <td class="jer">Total Factura</th>
            <td class="jer">{{$factura['precio']}}</th>
          </tr>
        </tfoot>
      </table>
    </div>
  
    <div class="cond row">
      <div class="col-12 mt-3">
        <h4>Condiciones y formas de pago</h4>
        <p>El pago se debe realizar en un plazo de 15 dias.</p>
        <p>
          Banco Banreserva
          <br />
          IBAN: DO XX 0075 XXXX XX XX XXXX XXXX
          <br />
          Código SWIFT: BPDODOSXXXX
        </p>
      </div>
    </div>
</div>

<div class="boton">
    <button onclick="imprimir()"><img src="https://cdn-icons-png.flaticon.com/128/4447/4447812.png" alt=""> Imprimir</button>
</div>

<script>
    function imprimir(){
        print('app'); 
    }
</script>

<style>
  .rosap{
    width: 90%; margin:auto;
  }
  .je{
    width: 180px;
  }
    .boton{
        width: 30%; 
        margin: auto;
        text-align: center; 
        margin-bottom: 50px;
        font-size: 23px; 
    }
    button{
        background: transparent; 
        border: none; 
        height: 44px; 
        width: 250px; 
        border: 3px solid rgb(87, 146, 0);
        border-radius: 10px;  
        transition: all .4s;
    }
    button:hover{
        background: greenyellow; 
        color: white;
    }
    button img{
        width: 35px;
    }
    .factura {
  table-layout: fixed;
}

.fact-info > div > h5 {
  font-weight: bold;
}

.factura > thead {
  border-top: solid 3px #000;
  border-bottom: 3px solid #000;
}

.factura > thead > tr > th:nth-child(2), .factura > tbod > tr > td:nth-child(2) {
  width: 300px;
}

.factura > thead > tr > th:nth-child(n+3) {
  text-align: right;
}

.factura > tbody > tr > td:nth-child(n+3) {
  text-align: right;
}

.factura > tfoot > tr > th, .factura > tfoot > tr > th:nth-child(n+3) {
  font-size: 24px;
  text-align: right;
}

.cond {
  border-top: solid 2px #000;
}
@media screen and (max-width:500px){
  .je{
    width: 100px;
    margin-left: -70px;
  }
  th{
    font-size: 10px;
  }
 .rosas{
  width: 80%;
  flex-wrap: wrap;
 }
 .boton{
  width: 100%;
  text-align: center;
 }
 button {
  width: 200px;
 }

</style>

@endsection