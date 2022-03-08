<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
                <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ url('/') }}" class="nav-link">INICIO</a></li>
                        <li class="has-children">
                            <a href="#" class="nav-link">SOLUCIONES FINANCIERAS</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="#" class="nav-link">SOLUCIÓN 1</a></li>
                                <li><a href="#" class="nav-link">SOLUCIÓN 2</a></li>
                                <li><a href="#" class="nav-link">SOLUCIÓN 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="nav-link">NOSOTROS</a></li>
                        <li><a href="#" class="nav-link">PREGUNTAS FRECUENTES</a></li>
                        <li><a href="#" class="nav-link">REFERENCIAS</a></li>
                        <li><a href="#" class="nav-link">EMPEZAR</a></li>
                        <li><a href="#" class="nav-link">CONTÁCTENOS</a></li>
                    </ul>
                </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none">
                <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>
                </a>
            </div>
        </div>
    </div>
</header>
