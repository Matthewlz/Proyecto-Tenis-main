@extends('layouts.navarplantilla')


@section('capcelera')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/soci.css')}}">
@endsection



@section('body')
<div>
  <img src="/img/banner.jpg" alt="banner" width="1350">
</div>
<div class="wrapper">
  <div class="single-price">
      <h1>Basic</h1>
      <div class="price">
          <h2>15€</h2>
      </div>
      <div class="deals">
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
      </div>
      <a href="#">Select</a>
  </div>
  <div class="single-price">
      <h1>Standard</h1>
      <div class="price">
          <h2>35€</h2>
      </div>
      <div class="deals">
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
      </div>
      <a href="#">Select</a>
  </div>
  <div class="single-price">
      <h1>Preumium</h1>
      <div class="price">
          <h2>45€</h2>
      </div>
      <div class="deals">
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
          <h4>Lorem, ipsum dolor.</h4>
      </div>
      <a href="#">Select</a>
  </div>
  <div class="text">
  
      <div class="text1">
          <h2>FORMA DE PAGO DE LA CUOTA</h2>
          <p>La forma de pago se hará mensualmente mediante domiciliación bancaria. la primera semanade cada mes.

              En caso de devolución de recibo, se cargarán 4 € por gastos de devolución.
              En el caso de dos cuotas impagadas se procederá a la baja definitiva. Si un ex abonado/socio con cuotas pendientes volviera a apuntarse, tendrá que pagar los recibos pendientes.</p>
      </div>
      <div class="text2">
          <h2>FORMA DE PAGO DE LA CUOTA</h2>
          <p>La forma de pago se hará mensualmente mediante domiciliación bancaria. la primera semanade cada mes.

              En caso de devolución de recibo, se cargarán 4 € por gastos de devolución.
              En el caso de dos cuotas impagadas se procederá a la baja definitiva. Si un ex abonado/socio con cuotas pendientes volviera a apuntarse, tendrá que pagar los recibos pendientes.</p>
      </div>
      <div class="text3">
          <h2>FORMA DE PAGO DE LA CUOTA</h2>
          <p>La forma de pago se hará mensualmente mediante domiciliación bancaria. la primera semanade cada mes.

              En caso de devolución de recibo, se cargarán 4 € por gastos de devolución.
              En el caso de dos cuotas impagadas se procederá a la baja definitiva. Si un ex abonado/socio con cuotas pendientes volviera a apuntarse, tendrá que pagar los recibos pendientes.</p>
      </div>
   
  </div>
</div>
@endsection
