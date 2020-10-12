<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/estilospricipal.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>

    <!--Boton Menu Responsive Se crea el input  y el label de accionarlo en el header-->
    <input type="checkbox" id="check">

    <!--Header Menu Nav Principal-->
    <header class="header-menu">
        <!--Boton Para Menu Continuacion de los pasos de arriba en el input-->
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="area-left">
            <h3>GtnColaboradores</h3>
        </div>
        <div class="area-rigth">
            <a href="{{ route('logout') }}" class="btn-logout">Logout</a>
        </div>
    </header>

    <!-- Sidebar menu lateral-->
    <div class="sidebar">
        <center>
            <h4>DASHBOARD</h4>
        </center>
        <a href="">
            <li class="fas fa-desktop"></li> <span>Tablero</span>
        </a>
        <a href="">
            <li class="fas fa-cogs"></li> <span>Formularios</span>
        </a>
        <a href="">
            <li class="fas fa-table"></li> <span>Clientes</span>
        </a>
        <a href="">
            <li class="fas fa-th"></li> <span>Eventos</span>
        </a>
        <a href="">
            <li class="fas fa-sliders-h"></li> <span>Transacciones</span>
        </a>
    </div>
    <!-- Aca termina el menu lateral-->
    <!--Contenido de la siguiente parte-->
     <div class="contenido">
        <div class="fondocolor">
        </div>
        <div class="comienzo-cont contenedor">
                @yield('content')
            {{-- <div class="titulo-cont">
                <h3>Bienvenido Diego Duran</h3>
                <h6>¿Que deseas hacer?</h6>
            </div>
            <div class="opciones-comienzo">
                <div class="opc-comienzo">
                    <a href=""><img src="/img/006e984d-450e-4ce4-99fe-8c1f8a68c0ea.jpg" alt=""></a>
                    <h4 class="opc-titulo1">Nuevo cliente</h4>
                </div>
                <div class="opc-comienzo">
                    <a href=""><img src="/img/2fdb40c3-7ad2-42fb-9b20-330339a70077.jpg" alt=""></a>
                    <h4 class="opc-titulo2">Nuevo evento</h4>
                </div>
            </div> --}}
        </div>
        {{-- <div class="final-cont">
            <div class="box">
                <div class="eventos">
                    <center>
                        <h3>Eventos pendientes por publicar</h3>
                    </center>
                </div>
            </div>
            <div class="box-img">
                <div class="img-eventos">
                    <img src="/img/91612ff3-de2c-418e-a417-0e515517ab84.jpg" alt="" width="300px" height="300">
                </div>
            </div>
        </div> --}}
    </div>

</body>

</html>
