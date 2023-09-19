@extends('layouts.app')

@section('content')

    <body>

        <div class="container userPage">
            <div class="row" style="margin-top: 150px;">
                <div class="col-md-6 affichUser">
                    <h1>Profil de {{ $user->pseudo }}</h1>

                    <h2>Informations de l'utilisateur</h2>
                    <p>Pseudo: {{ $user->pseudo }}</p>
                    <p>E-mail: {{ $user->email }}</p>
                </div>
                <div class="col-md-6 modifInf">
                    
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        <h2>Modifier les informations</h2>
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" value="{{ $user->nom }}">
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" value="{{ $user->prenom }}">
                        </div>

                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" value="{{ $user->pseudo }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Nouveau mot de passe</label>
                            <input type="password" name="password">
                        </div>
                        <button type="submit">Mettre à jour</button>
                    </form>

                </div>
            </div>

        </div>
    @endsection
