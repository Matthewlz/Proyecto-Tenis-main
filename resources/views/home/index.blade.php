@section('title') Home @endsection
@section('capcelera')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
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
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css" />
    <!-- Add jQuery library (required) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <!-- Add the evo-calendar.js for.. obviously, functionality! -->
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
    <script src="{{ asset('js/maps.js') }}" defer></script>
    <script src="{{ asset('js/calendari.js') }}" defer></script>


@endsection
@extends('layouts.navarplantilla')
@section('body')
    <div class="banner-area">
        <h2> Club Tennis i Pàdel Blanes</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-10 mb-10">
                <h2>Benvingut</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p>En un temps en el que ningú no posa en dubte que l’esport ha de formar part de la vida saludable de
                    qualsevol
                    persona, ens complau comptar al Club de Tennis i Pàdel Blanes amb unes instal·lacions envejables per a
                    la
                    pràctica d’aquests esports : 4 pistes de tennis de terra batuda, 1 pista de tennis quick i 4 pistes de
                    pàdel
                    d’última generació. Sense oblidar-nos de la nostra piscina envoltada de gespa que fa les delícies de
                    grans i
                    petits.
                    Val la pena fer un break a les nostres ocupades vides i dedicar-lo a fer una mica d’esport. Així ho
                    avalen
                    els nostres prop de 100 socis, molts d’ells familiars, que suposen una massa social de 260 persones, les
                    100
                    parelles inscrites en l’última fase de la nostra lliga de pàdel o els prop de 200 nens que participen al
                    casal d’estiu que organitza la nostra escola de tennis i pàdel.
                    Si fa temps que no hi veniu, o no coneixeu el club, val la pena, tot fent-hi un passeig que us hi
                    acosteu :
                    hem modernitzat les nostres instal·lacions i a més ara tenim servei de bar tot el dia : tapes,
                    cervesetes,
                    mojitos o un bon àpat casolà que compensen la despesa d’energia.
                    Tenint en compte tots els beneficis que en traiem, en qualitat de vida per a nosaltres mateixos i en
                    l’educació en valors com l’esforç, la superació o l’autoconfiança dels nostres fills, ens sentim
                    orgullosos
                    de formar part d’aquesta petita família.
                    Sigueu feliços i gaudiu del Club Tennis i Pàdel Blanes.</p>
            </div>

        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/nadal.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/regalo.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/nadal.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-10 mb-10">
                <h2>Calendari D'esdeviments</h2>
            </div>
            <div id="calendar"></div>

         
                <div class="container mt-5 mb-5">
                    
        
                   
                    <div class="row">
                        @foreach ($activitats as $activitat)
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                             <div class="d-flex justify-content-center">
                                <h5 class="section-title h1">{{$activitat->name}}</h5>
                             </div>
                          
                            <div class="image-flip">
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card" style="background-image: url(/storage/activitat/{{$activitat->image_path}})">
                                         
                                            
                                        </div>
                                    </div>
                                    <div class="backside ">
                                        <div class="card">
                                            <div class="card-body text-center mt-4 ">
                                                <h4 class="card-title"> Breu Descripció</h4>
                                                <p class="card-text">{{$activitat->short_description}}</p>
                                                <li><a href="{{route('activitats.index',$activitat)}}"><i class=" icon-pencil icon-2x"></i>Inscriute</a></li>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                        @endforeach
                    </div>
                   
                </div>
            
          
            <!-- Team -->
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-10 mb-10">
                <h2>Ubicació</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam doloremque quae maxime quasi iste.
                    Eveniet recusandae veniam, totam quae dolorem illo nisi nihil delectus soluta accusantium beatae.
                    Voluptatem, ex eius.
                    Maxime aspernatur, debitis dolorum dignissimos consequatur officiis. Modi, accusamus quas vel, fugiat,
                    officia iure perferendis voluptates impedit cum labore praesentium veniam dignissimos! Omnis hic alias,
                    doloribus amet rem illum commodi!
                    Excepturi veritatis est sunt impedit similique repellat tempora voluptas reiciendis ullam, vel
                    temporibus labore et accusantium saepe odio inventore, debitis veniam quasi, iste dolor perferendis.
                    Quae ab amet suscipit illum.</p>
            </div>

        </div>
    </div>
    <div class="container-fluid" id="transicio">
        <div class="row">
            <div class="parallax">
                <div class="col-md-4 d-flex justify-content-center mt-10 mb-10">

                    <div class="card-group">
                        <div class="carta">
                            <i class="fa fa-map-marker fa-3x" aria-hidden="true" id="logo"></i>
                            <h2 id="titol2">Direcció</h2>
                            <p id="text2">Av. San Antón, 22, 29018 Málaga</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center mt-10 mb-10">
                    <div class="card-group">
                        <div class="carta">
                            <i class="fas fa-phone-alt  fa-3x" aria-hidden="true" id="logo"></i>
                            <h2 id="titol2">Telèfon</h2>
                            <p id="text2"> 972 33 04 32 / 634944021</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center mt-10 mb-10">
                    <div class="card-group">
                        <div class="carta">
                            <i class="fas fa-envelope fa-3x" aria-hidden="true" id="logo"></i>
                            <h2 id="titol2">Email</h2>
                            <p id="text2">info@clubdetenisblannes.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="separador"></div>
    <div id="map"></div>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARfWqVMq3ElKz9TWyUGqUWXPzDGLym-lM&callback=initMap">
    </script>


    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-10 mb-10">
                <h2>Benvingut</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p>En un temps en el que ningú no posa en dubte que l’esport ha de formar part de la vida saludable de
                    qualsevol
                    persona, ens complau comptar al Club de Tennis i Pàdel Blanes amb unes instal·lacions envejables per a
                    la
                    pràctica d’aquests esports : 4 pistes de tennis de terra batuda, 1 pista de tennis quick i 4 pistes de
                    pàdel
                    d’última generació. Sense oblidar-nos de la nostra piscina envoltada de gespa que fa les delícies de
                    grans i
                    petits.
                    Val la pena fer un break a les nostres ocupades vides i dedicar-lo a fer una mica d’esport. Així ho
                    avalen
                    els nostres prop de 100 socis, molts d’ells familiars, que suposen una massa social de 260 persones, les
                    100
                    parelles inscrites en l’última fase de la nostra lliga de pàdel o els prop de 200 nens que participen al
                    casal d’estiu que organitza la nostra escola de tennis i pàdel.
                    Si fa temps que no hi veniu, o no coneixeu el club, val la pena, tot fent-hi un passeig que us hi
                    acosteu :
                    hem modernitzat les nostres instal·lacions i a més ara tenim servei de bar tot el dia : tapes,
                    cervesetes,
                    mojitos o un bon àpat casolà que compensen la despesa d’energia.
                    Tenint en compte tots els beneficis que en traiem, en qualitat de vida per a nosaltres mateixos i en
                    l’educació en valors com l’esforç, la superació o l’autoconfiança dels nostres fills, ens sentim
                    orgullosos
                    de formar part d’aquesta petita família.
                    Sigueu feliços i gaudiu del Club Tennis i Pàdel Blanes.</p>
            </div>

        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-10 mb-10">
                <h2>Benvingut</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p>En un temps en el que ningú no posa en dubte que l’esport ha de formar part de la vida saludable de
                    qualsevol
                    persona, ens complau comptar al Club de Tennis i Pàdel Blanes amb unes instal·lacions envejables per a
                    la
                    pràctica d’aquests esports : 4 pistes de tennis de terra batuda, 1 pista de tennis quick i 4 pistes de
                    pàdel
                    d’última generació. Sense oblidar-nos de la nostra piscina envoltada de gespa que fa les delícies de
                    grans i
                    petits.
                    Val la pena fer un break a les nostres ocupades vides i dedicar-lo a fer una mica d’esport. Així ho
                    avalen
                    els nostres prop de 100 socis, molts d’ells familiars, que suposen una massa social de 260 persones, les
                    100
                    parelles inscrites en l’última fase de la nostra lliga de pàdel o els prop de 200 nens que participen al
                    casal d’estiu que organitza la nostra escola de tennis i pàdel.
                    Si fa temps que no hi veniu, o no coneixeu el club, val la pena, tot fent-hi un passeig que us hi
                    acosteu :
                    hem modernitzat les nostres instal·lacions i a més ara tenim servei de bar tot el dia : tapes,
                    cervesetes,
                    mojitos o un bon àpat casolà que compensen la despesa d’energia.
                    Tenint en compte tots els beneficis que en traiem, en qualitat de vida per a nosaltres mateixos i en
                    l’educació en valors com l’esforç, la superació o l’autoconfiança dels nostres fills, ens sentim
                    orgullosos
                    de formar part d’aquesta petita família.
                    Sigueu feliços i gaudiu del Club Tennis i Pàdel Blanes.</p>
            </div>

        </div>
    </div>

@endsection
