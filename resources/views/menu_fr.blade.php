<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
                <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ url('/') }}" class="nav-link">D'ACCUEIL</a></li>
                        <li class="has-children">
                            <a href="#" class="nav-link">SOLUTIONS FINANCIÈRES</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="#" class="nav-link">FINANCIER 1</a></li>
                                <li><a href="#" class="nav-link">FINANCIER 2</a></li>
                                <li><a href="#" class="nav-link">FINANCIER 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="nav-link">À PROPOS DE NOUS</a></li>
                        <li><a href="#" class="nav-link">FAQ</a></li>
                        <li><a href="#" class="nav-link">RÉFÉRENCES</a></li>
                        <li><a href="#" class="nav-link">COMMENCER</a></li>
                        <li><a href="#" class="nav-link">NOUS CONTACTER</a></li>
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
