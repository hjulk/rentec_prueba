<!DOCTYPE html>
<html lang="es">
    <head>
        <title>FactorTeck @yield('titulo')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">
        <link rel="preload" href="{{asset("css/bootstrap.min.css")}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="{{asset("css/style.css")}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="stylesheet" href="{{asset("css/flaticon/font/flaticon.css")}}">
        <link rel="preload" href="{{asset("css/icomoon/style.css")}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="{{asset("css/pagina.css")}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        @yield("styles")
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap" id="home-section">
            @include("topbar_es")
            @include("menu_es")
            <div class="">
                @yield("contenido")
            </div>
            @include("footer_es")
            <script src="{{asset("js/jquery.slim.min.js")}}"></script>
            <script src="{{asset("js/jquery-migrate.min.js")}}"></script>
            <script src="{{asset("js/popper.min.js")}}"></script>
            <script src="{{asset("js/bootstrap.min.js")}}"></script>
            <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
            <script src="{{asset("js/jquery.sticky.js")}}"></script>
            <script src="{{asset("js/jquery.validate.min.js")}}"></script>
            <script src="{{asset("js/main.js")}}"></script>
            <script src="{{asset("js/pagina.js")}}"></script>
            @yield("scripts")
        </div>
    </body>
</html>
