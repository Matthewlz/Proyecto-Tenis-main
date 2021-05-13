@extends('layouts.navarplantilla')


@section('capcelera')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/botiga.css') }}">


@endsection



@section('body')
   
    <div class="container">
        <div class="row mb-20 mt-20"  style="background-color:rgb(60, 60, 60)">
            <div class="col-md-12 d-flex justify-content-center">
                <h1 id="titol">Botiga</h1>
            </div>
            @for ($i = 0; $i < 9; $i++)
            <div class="col-md-4 mb-40">
               
                <div class="product">
                    <div class="imgbox">
                        <img src="/img/camisa.jpg" alt="">
                    </div>
                    <div class="details">
                        <h2>Nom de la marca</h2><br><span>Men's Designer T-shirt</span>
                        <div class="price">55.99€</div>
                        <label>Sizes</label>
                        <ol>
                            <li>XS</li>
                            <li>S</li>
                            <li>M</li>
                            <li>L</li>
                            <li>XL</li>
                            <li>XXL</li>
                            <li>3XL</li>
                            <li>4XL</li>
                            <li>5XL</li>
                        </ol>
                        <label>Colors</label>
                        <ol class="colors">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        </ol>
                        <a class="link" href="#">Escollir Camiseta</a>
                    </div>
                </div>

            </div>
            @endfor
         
        </div>
    </div>


@endsection
