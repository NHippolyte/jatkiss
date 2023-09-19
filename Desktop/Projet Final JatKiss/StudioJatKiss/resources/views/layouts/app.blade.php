<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Studio Jatkiss') }}</title>

    <!-- Fonts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMFZl8CD6re077Q9Zg_oCvIsFOws8suWg&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://kit.fontawesome.com/add92c8faf.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav id="navbar" class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid navCont" id="navContId">
                <img class="navbar-brand" src="{{ asset('images/logo/logo-or.jpeg') }}" alt="Logo en or">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 55%;">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item active navbar-dark">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="dropdown nav-item navbar-dark">
                            <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Prestations
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('seance.enregistrement') }}">Enregistrement</a></li>
                                <li><a class="dropdown-item" href="{{ route('seance.photographie') }}">Photo</a></li>
                            </ul>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown nav-item">
                                <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Réservations
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('reservations.index') }}">Mes
                                            réservations</a></li>
                                    <li><a class="dropdown-item" href="{{ route('reservations.create') }}">Creer une
                                            réservation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showProfile') }}"><i
                                        class="fa-regular fa-user fa-bounce"></i></a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container w-50 text-center">

            @if (session()->has('message'))
                <p class="alert alert-success">{{ session()->get('message') }}</p>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <footer>
            <div id="foot">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer-block">
                                <h3>Horaires</h3>
                                <p> 7/7 : 24/24 <br>
                                    Sur réservation </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-block">
                                <h3>Rendez-vous</h3>
                                <p>Prenez rendez-vous en ligne</p>
                                @guest
                                    <a class="linkFoot" href="{{ route('login') }}">
                                        Cliquer ici
                                    </a>
                                @else
                                    <a class="linkFoot" href="{{ route('reservations.create') }}">
                                        Cliquer ici
                                    </a>
                                @endguest
                            </div>
                        </div>

                        <div class="col">
                            <div class="footer-block">
                                <h3> Réseaux Sociaux</h3>
                                <div class="footer-links">
                                    <a href="0783152184"><i class="fa-solid fa-phone fa-beat"></i></a> |
                                    <a href="https://instagram.com/jatkissofficiel?igshid=MzRlODBiNWFlZA=="><i
                                            class="fa-brands fa-instagram fa-beat"></i></a> |
                                    <a href="https://t.snapchat.com/yWYFPCGQ"><i
                                            class="fa-brands fa-snapchat fa-beat"></i></a> |
                                    <a href="#"><i class="fa-brands fa-twitter fa-beat"></i></a>
                                </div>
                                <p><a href="#">Règlement</a> | <a href="#">Politique de
                                        confidentialité</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </footer>

</body>

</html>
