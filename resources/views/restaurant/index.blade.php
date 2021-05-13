@extends('layouts.navarplantilla')

@section('capcelera')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection



@section('body')

    <section class="food_menu ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 text-center">
                    <div class="section_tittle mt-20">
                        <h2> Menu</h2>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                        @foreach ($menus as $menu)
                            <a id="{{ $menu->name }}-tab" data-toggle="tab" href="#{{ $menu->name }}" role="tab"
                                aria-controls="{{ $menu->name }}" aria-selected="false">{{ $menu->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($menus as $menu)
                   <?php  $iterator=$loop->iteration ?>
                        <div class="tab-pane fade single-member" id="{{$menu->name}}" role="tabpanel" aria-labelledby="Launch-tab">
                            <div class="row">
                                @foreach ($plats as $plat)
                                    @if ($plat->menu_id ==$iterator)
                                        <div class="col-sm-6 col-lg-6">
                                            <div class="single_food_item media">
                                                <img src="/storage/plat/{{$plat->image_path}}" class="mr-3" width="150" height="150" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h3>{{ $plat->title }}</h3>
                                                    <p>{{ $plat->description }}</p>
                                                    <h5>{{ $plat->preu }}€</h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
