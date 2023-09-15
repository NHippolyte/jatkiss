@extends('layouts.app')

@section('content')
<div class="container" id="recPage" style="display: flex;
    flex-direction: column;
    align-items: center; margin-top: 100px;">

    <h3>Découvrez Nos Séance d'Enregistrement</h3>

    <div class="row">
        <div class="col-md-6">
            <h2>Tarif à l'Heure</h2>
            <p style="text-align: center">Dans notre studio basé à Brie-Comte-Robert (77). <br>
                 Nous vous proposons un service d'enregistrement de haute qualité à un tarif abordable de 30€ par heure.<br>
                  Que vous soyez musicien, groupe, chanteur soliste ou podcasteur, notre studio est l'endroit idéal pour donner vie à vos projets audio.<br> 
                Notre studio est équipé de matériel de pointe et d'un espace conçu pour vous offrir une expérience d'enregistrement optimale, avec une cabine insonorisée et des microphones professionnels.<br>
                 Notre équipe expérimentée de techniciens du son est passionnée par leur travail et veillera à ce que vous obteniez le meilleur son possible.<br>
                Que vous souhaitiez enregistrer une démo, un album complet, un jingle publicitaire ou un podcast, notre studio convient à tous les types de projets. Nous nous engageons à offrir un service de qualité supérieure à un prix abordable.
                
                N'hésitez pas à nous contacter pour réserver une session d'enregistrement ou obtenir plus d'informations sur nos services.<br>
                 Nous sommes là pour répondre à toutes vos questions et vous aider à concrétiser vos idées musicales ou audiovisuelles.<br>
                  Ne laissez pas vos projets en attente, venez profiter de notre studio professionnel dès maintenant.</p>
            <div class="row">
                <div class="col-md-6">
                    <h2>Horaires </h2> <p>Disponibles Bientôt... <br> Nous travaillons constamment à l'ajout de nouvelles plages horaires pour répondre à vos besoins. Revenez bientôt pour consulter nos horaires disponibles.</p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="display: flex; justify-content: center; flex-direction: column">
                    <h2 style="text-align: center">Réserver Maintenant</h2>
                    <a href="{{ route('reservations.create') }}"><button>
                            Cliquer ici
                        </button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/sabor.png')  }}">
{{--             <h2>Choix de l'Ingénieur du Son</h2>
            <p>Nous vous offrons la possibilité de choisir parmi une équipe d'ingénieurs du son talentueux pour votre séance. Ils vous aideront à atteindre le son que vous recherchez.</p>
 --}}        </div>
    </div>

   
</div>
@endsection