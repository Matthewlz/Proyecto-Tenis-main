<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    @yield('capcelera')
     <title>@yield('head')</title>
</head>
<body>
    <nav>
        <div class="logo">
            ClubTennis Blanes
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn" class="input2">
        <ul>
            <li><a href="{{route('/')}}">Home</a></li>
            <li>
                <label for="btn-2" class="show">Activitats +</label>
                <a href="#">Activitats</a>
                <input type="checkbox" id="btn-2" class="input2">
                <ul>
                    <li><a href="{{route('activitats.casal')}}">Casal</a></li>
                    <li><a href="#">Tornejos</a></li>
                    <li>
                        <label for="btn-3" class="show">Esports +</label>
                        <a href="#">Esports<span class="fa fa-plus"></span></a>
                        <input type="checkbox" id="btn-3" class="input2">
                        <ul>
                            <li><a href="{{route('activitats.tennis')}}">Tenis</a></li>
                            <li><a href="{{route('activitats.paddel')}}">Pàdel</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="{{route('galeria.index')}}">Galeria</a></li>
            <li><a href="{{route('restaurant.index')}}">Restaurant</a></li>
            <li><a href="{{route('soci.index')}}">Soci</a></li>
            <li><a href="{{route('botiga.index')}}">Botiga</a></li>
            <li><a href="{{route('contactens.index')}}">Contacte</a></li>
            <li><a href="{{route('login')}}">Log</a></li>
        </ul>
    </nav> 
    @yield('body')
</body>
</html>