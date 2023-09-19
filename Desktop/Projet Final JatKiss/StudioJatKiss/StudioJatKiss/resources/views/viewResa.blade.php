@extends('layouts.app')

@section('content')

    <body id="bodViewResa">
        <div class="viewResa" style="margin-top: 100px;">
            <h1>Vos réservations</h1>
            <div id="tableResa">
                <table border="1">
                    <tr>
                        <th> Id </th>
                        <th> Presta </th>
                        <th> Date </th>
                        <th> Heure debut </th>
                        <th> Heure fin </th>
                        <th> Actions </th> <!-- Ajout d'une colonne pour les actions -->
                    </tr>
                    @if (count($reservations) > 0)
                        @foreach ($reservations as $r)
                            <tr>
                                <td> {{ $r->user_id }} </td>
                                <td> {{ $r->prestation->nom }} </td>
                                <td> {{ date('d-m-y', strtotime($r->date)) }} </td>
                                <td> {{ $r->timeD }} </td>
                                <td> {{ $r->timeF }} </td>
                                <td>
                                    <form action="{{ route('reservations.destroy', $r) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">Supprimer</button>
                                    </form>
                                    <a href="{{ route('reservations.edit', $r) }}" class="btn-edit">Éditer</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Aucune réservation trouvée.</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </body>
@endsection
