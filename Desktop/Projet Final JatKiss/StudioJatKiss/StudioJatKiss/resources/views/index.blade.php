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
                    <div id="map" style="height: 647px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.1161695711908!2d2.604985076477422!3d48.70326051161102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6081107922fef%3A0x5c930149ff3ce51d!2s118%20Rue%20Gloriette%2C%2077170%20Brie-Comte-Robert!5e0!3m2!1sfr!2sfr!4v1694682856978!5m2!1sfr!2sfr" width="600" height="570" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
@endsection

{{--  <div class="calendar">
            <table id="calendar-table">
                <thead>
                    <tr>
                        <th>Heures</th>
                        <th>0h</th>
                        <th>1h</th>
                        <th>2h</th>
                        <th>3h</th>
                        <th>4h</th>
                        <th>5h</th>
                        <th>6h</th>
                        <th>7h</th>
                        <th>8h</th>
                        <th>9h</th>
                        <th>10h</th>
                        <th>11h</th>
                        <th>12h</th>
                        <th>13h</th>
                        <th>14h</th>
                        <th>15h</th>
                        <th>16h</th>
                        <th>17h</th>
                        <th>18h</th>
                        <th>19h</th>
                        <th>20h</th>
                        <th>21h</th>
                        <th>22h</th>
                        <th>23h</th>
                    </tr>
                </thead>
                {{--     @php
                        $days = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
                        $controller = app('App\Http\Controllers\ResaController');
                        $result = $controller->tableIndex();
                        $tableData = $result['tableData'];
                    @endphp
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td id="day{{ $i + 1 }}">{{ $days[$i] }}</td>
                            @for ($hour = 0; $hour < 24; $hour++)
                                @php
                                    $reservationId = $tableData[$i][$hour];
                                @endphp
                                @if ($reservationId !== '')
                                    <td class="reserved"></td>
                                @else
                                    <td></td>
                                @endif
                            @endfor
                        </tr>
                    @endfor
                </tbody> 
            </table>
        </div> --}}

 {{--  <!--    Menu de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Notre Studio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item" id="reservations">
                            <a id="resaLink" class="nav-link" href="#">Réservations</a>
                            <ul class="resaCategories" style="display: none;">
                                <li><a href="{{ route('getViewResa') }}">Mes réservations</a></li>
                                <li><a href="{{ route('resa') }}">Creer une réservation</a></li>
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
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profileShow') }}"><i
                                    class="fa-regular fa-user fa-bounce"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}


{{--  <script>
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
        </script> --}}




{{--   <script>
        // Code JavaScript pour générer dynamiquement les noms des jours
        const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre",
            "Novembre", "Décembre"];
        const days = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"];
        const table = document.getElementById('calendar-table'); // Utilisez l'ID de la table
        const dayCells = table.querySelectorAll('td[id^="day"]');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        // Initialisez la date affichée à aujourd'hui
        let displayedDate = new Date();

        // Fonction pour mettre à jour les cellules de jours avec la date spécifiée
        function updateDayCells(date) {
            console.log('La fonction updateDayCells est appelée avec la date :', date);
            for (let i = 0; i < dayCells.length; i++) {
                const dayCell = dayCells[i];
                const currentDay = new Date(date);
                currentDay.setDate(date.getDate() + i);
                dayCell.textContent = days[(currentDay.getDay() + i) % 7] + ' ' + currentDay.getDate() + ' ' + months[
                    currentDay.getMonth()];
            }

            // Effectuez une requête AJAX pour obtenir les réservations pour la date actuellement affichée
            $.ajax({
                url: "{{ route('getResa') }}",
                method: 'GET',
                data: {
                    date: date.toISOString().split('T')[0]
                },
                success: function(reservations) {
                    // Parcourez les réservations reçues du serveur
                    reservations.forEach(reservation => {
                        const [dayIndex, hour] = reservation.split('-');
                        const cell = table.querySelector(
                            `#day${dayIndex} + td:nth-child(${parseInt(hour) + 2})`);

                        // Vérifiez si la cellule est déjà réservée
                        if (!cell.classList.contains('reserved')) {
                            // Si la cellule n'est pas réservée, ajoutez la classe "reserved"
                            cell.classList.add('reserved');
                            cell.textContent = 'Réservé';
                        }
                    });
                }
            });
        }

        // Écoutez le clic sur le bouton Précédent
        prevButton.addEventListener('click', () => {
            // Décrémentez la date affichée de 5 jours
            displayedDate.setDate(displayedDate.getDate() - 5);
            updateDayCells(displayedDate);
        });

        // Écoutez le clic sur le bouton Suivant
        nextButton.addEventListener('click', () => {
            // Incrémentez la date affichée de 5 jours
            displayedDate.setDate(displayedDate.getDate() + 5);
            updateDayCells(displayedDate);
        });

        // Appelez la fonction initiale pour afficher les jours actuels
        updateDayCells(displayedDate);
    </script> --}}
