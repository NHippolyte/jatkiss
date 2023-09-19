@extends('layouts.app')

@section('content')
<body>
<div class="container"  id="photoPage" style="display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 100px;
    margin-bottom: 25vh;">

<h3 style="margin-bottom: 20px">Découvrez Nos Séance Photo</h3>

    <div class="row">
        <div class="col-md-6">
            <h2 style="text-align: center">Équipement Mis à Disposition</h2>
            <p style="text-align: center">Nous mettons à votre disposition une large gamme d'équipements de photographie de haute qualité, y compris des appareils photo, des objectifs, des éclairages, des fonds et plus encore. Utilisez le meilleur pour capturer vos moments spéciaux.</p>
            <h2 style="text-align: center">Tarif à la Demande</h2>
            <p style="text-align: center">Nos tarifs de photographie sont personnalisés en fonction de vos besoins spécifiques. Contactez-nous pour obtenir un devis basé sur la nature de votre projet et vos préférences.</p>
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center">Réservation</h2>
                    <p style="text-align: center">Réservez dès aujourd'hui votre séance de photographie en nous contactant. Nous sommes prêts à vous fournir une expérience de photographie exceptionnelle.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center; margin-bottom: 30px;">Réserver Maintenant</h2>
                    @guest
                    <a class="btnn" role="button" href="{{ route('login') }}">
                        Cliquer ici
                     </a>
                    @else
                    <a class="btnn" role="button" href="{{ route('reservations.create') }}">
                        Cliquer ici
                     </a>
                     @endguest
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/lybroPhoto.png')  }}">
  </div>
    </div>
</body>
@endsection