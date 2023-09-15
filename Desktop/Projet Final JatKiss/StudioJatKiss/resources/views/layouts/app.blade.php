<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config( 'Studio Jatkiss') }}</title>

    <!-- Fonts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMFZl8CD6re077Q9Zg_oCvIsFOws8suWg&callback=console.debug&libraries=maps,marker&v=beta"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css')  }}">
    <script src="https://kit.fontawesome.com/add92c8faf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <!-- Menu de navigation -->
                <nav id="navbar2" class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
                    <div class="container" id="navDiv">
                        <img src="{{ asset('images/logo/logo-or.jpeg')  }}" alt="Logo en or">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item" id="reservations">
                                    <a id="resaLink" class="nav-link" href="#">Réservations</a>
                                    <ul class="resaCategories" style="display: none;">
                                        <li><a href="{{ route('reservations.index') }}">Mes réservations</a></li>
                                        <li><a href="{{ route('reservations.create') }}">Creer une réservation</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item" id="prestations">
                                    <a id="prestaLink" class="nav-link" href="#">Prestations</a>
                                    <ul class="sub-categories" style="display: none;">
                                        <li><a href="{{ route('seance.enregistrement') }}">Enregistrement</a></li>
                                        <li><a href="{{ route('seance.photographie') }}">Photo</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.edit', Auth::user()) }}"><i class="fa-regular fa-user fa-bounce"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script>
                        // Écoutez le clic sur "Prestations"
                        const prestations = document.getElementById('prestations');
                        const subCategories = prestations.querySelector('.sub-categories');
                        const prestaLink = document.getElementById('prestaLink');

                        const reservations = document.getElementById('reservations');
                        const resaCategories = reservations.querySelector('.resaCategories');
                        const resaLink = document.getElementById('resaLink')

                        prestaLink.addEventListener('click', (e) => {
                            // Empêcher le lien de naviguer
                            e.preventDefault();

                            // Si les sous-catégories sont cachées, les afficher, sinon les cacher
                            if (subCategories.style.display === 'none') {
                                subCategories.style.display = 'block';
                            } else {
                                subCategories.style.display = 'none';
                            }
                        });

                        resaLink.addEventListener('click', (e) => {
                            // Empêcher le lien de naviguer
                            e.preventDefault();

                            // Si les sous-catégories sont cachées, les afficher, sinon les cacher
                            if (resaCategories.style.display === 'none') {
                                resaCategories.style.display = 'block';
                            } else {
                                resaCategories.style.display = 'none';
                            }
                        });
                    </script>
                </nav>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container w-50 text-center" style="position: absolute; margin-top:150px; margin-left: 25%;">

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


        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>

</html>