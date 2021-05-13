<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/9739f101ba.js" crossorigin="anonymous"></script>
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