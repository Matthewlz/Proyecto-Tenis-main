@extends('layouts.navarplantilla')


@section('capcelera')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection



@section('body')

<div class="container">
  <div class="formBx">
      <form action="{{route('contactens.store')}}" method="POST">
          @csrf
          <h2>Contacta'ns</h2>
          <div class="inputBox">
              <input type="text" name="name" required="required">
              <span>Nom Complet</span>
          </div>
          <div class="inputBox">
              <input type="email" name="email" required="required">
              <span>Gmail</span>
          </div>
          <div class="inputBox">
             <textarea required="required" name="message"></textarea>
              <span>Escriu el missatge</span>
          </div>
          <div class="inputBox">
             <input type="submit" value="Envia">
           </div>
      </form>
  </div>
 <div class="imgBx">
     <img src="img/girl.png" alt="dona">
  </div> 
</div>
  @if (session('info'))
      <script>alert("{{session('info')}}")</script>
  @endif
@endsection
