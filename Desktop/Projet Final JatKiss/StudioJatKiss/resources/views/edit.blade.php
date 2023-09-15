<!-- resources/views/reservation/edit.blade.php -->

@extends('layouts.app') <!-- Utilisez votre mise en page de base -->

@section('content')
    <h1 style="margin-top: 100px">Modifier la réservation</h1>

    <form action="{{ route('reservations.update' , $reservation) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Ajoutez ici les champs de formulaire pour la modification, pré-remplis avec les données de la réservation -->
        <div>
            <label for="date">Date :</label>
            <input type="date" name="date" id="date" value="{{ $reservation->date }}">
        </div>

        <div>
            <label for="timeD">Heure de début :</label>
            <input type="time" name="timeD" id="timeD" value="{{ $reservation->timeD }}">
        </div>

        <div>
            <label for="timeF">Heure de fin :</label>
            <input type="time" name="timeF" id="timeF" value="{{ $reservation->timeF }}">
        </div>


        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
