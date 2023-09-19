@extends('layouts.app')

@section('content')      
        <div class="container mt-3" style="width: 100%;">
           {{--  <div class="jumbotron text-center">
                <h1 style="margin-bottom: 50px; color: #f7d473;">Bienvenue au Studio JatKiss</h1>
            </div> --}}
            <h3 style="margin-top:100px; margin-bottom: 50px; color: black; text-decoration: underline">Venez découvrire :</h3>
            <div class="row">
                <div class="col-md-6" id="recBloc">
                    <a style="text-decoration: none;" href="{{ route('seance.enregistrement') }}">
                        <h2>Nos Séance d'Enregistrement</h2>
                        <p>Optez pour une séance d'enregistrement professionnelle où vous pouvez choisir parmi nos
                            ingénieurs du
                            son talentueux. Avec des tarifs flexibles à l'heure, obtenez le son parfait pour votre projet
                            musical.</p>
                    </a>
                </div>
                <div class="col-md-6" id="photoBloc">
                    <a style="text-decoration: none;" class="photoLink" href="{{ route('seance.photographie') }}">
                        <h2>Nos Séance de Photographie</h2>
                        <p>Explorez le monde de la photographie avec nos équipements haut de gamme mis à votre disposition.
                            Nos
                            tarifs sont adaptés à vos besoins, offrant une expérience de photographie unique et
                            personnalisée.
                        </p>
                    </a>
                </div>
            </div>
        </div>
       
        <!-- Titre "Nos Projets" -->
        <div class="container mt-5">
            <h2 class="text-center">Nos Projets et Nos Artistes</h2>
        </div>

        <!-- Trois images en ligne -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4">
                    <a href="https://deezer.page.link/eGdUvG7biDZRGVkr9"><img src="{{ asset('images/Lybro.png') }}" class="img-fluid" alt="Projet 1"></a>
                    <p class="text-center mt-2">Lybro Le Sayan</p>
                </div>
                <div class="col-md-4">
                   <a href="https://deezer.page.link/Y3zRQvEZ3i5cyZEN8"><img src="{{ asset('images/Agis.png') }}" class="img-fluid" alt="Projet 2"></a>
                    <p class="text-center mt-2">Agis ou reve</p>
                </div>
                <div class="col-md-4">
                   <a href="https://deezer.page.link/1WrdLjx6UKYtxNH87"><img src="{{ asset('images/Youka.png') }}" class="img-fluid" alt="Projet 3"></a>
                    <p class="text-center mt-2">Youka</p>
                </div>
            </div>
        </div>


        <!-- Présentation des propriétaires du studio -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 equip">
                    <h2>Notre Equipe</h2>
                    <ul>
                        <li style="margin-bottom: 15px">
                            <div class="equipBloc">
                                <img src="{{ asset('images/mady.png') }}">Mady - BeatsMakers<br>
                                <a href="https://www.instagram.com/madi_alaprod/">Découvrire</a>
                            </div>
                        </li>
                        <li>
                            <div class="equipBloc">
                                <img src="{{ asset('images/seysey.png') }}">Sey Sey - BeatsMakers<br>
                                <a href="https://www.instagram.com/seysey_prod/">Découvrire</a>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li style="margin-bottom: 15px">
                            <div class="equipBloc">
                                <img src="{{ asset('images/Paki.png') }}">Paki - Ingénieur du son<br>
                                <a href="https://www.instagram.com/pakinou_91/">Découvrire</a>
                            </div>
                        </li>
                        <li>
                            <div class="equipBloc">
                                <img src="{{ asset('images/fouka.png') }}">Fouka - Ingénieur du son<br>
                                <a href="https://www.instagram.com/fouka242/">Découvrire</a>
                            </div>

                        </li>
                    </ul>

                </div>
                <div class="col-md-6 loc">
                    <h2>Localisation du studio</h2>
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.1161695711908!2d2.604985076477422!3d48.70326051161102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6081107922fef%3A0x5c930149ff3ce51d!2s118%20Rue%20Gloriette%2C%2077170%20Brie-Comte-Robert!5e0!3m2!1sfr!2sfr!4v1694682856978!5m2!1sfr!2sfr"  style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
@endsection

