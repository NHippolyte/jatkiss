@extends('layouts.app')

@section('content')
<head>
    <title>Réservation de séance</title>
</head>
<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: silver;
                text-align: center;
                border: none;">
                    <div class="card-header">
                        <h4>Formulaire de Réservation</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reservations.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="pseudo">{{ __('Pseudo') }}</label>
                                <input value="{{ auth()->check() ? auth()->user()->pseudo : '' }}" type="pseudo" class="form-control" id="pseudo" name="pseudo">
                            </div>
                            <div class="form-group">
                                <label for="session_type">Type de Séance :</label>
                                <select class="form-control" id="session_type" name="session_type" required>
                                    <option value="Music">Séance d'Enregistrement</option>
                                    <option value="Photo">Séance Photo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date :</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="timeD">Heure de début :</label>
                                <input type="time" class="form-control" id="timeD" pattern="([01]\d|2[0-3]):00" name="timeD" required>
                            </div>
                            <div class="form-group">
                                <label for="timeF">Heure de fin :</label>
                                <input type="time" class="form-control" id="timeF" pattern="([01]\d|2[0-3]):00" name="timeF" required>
                            </div>
                            <button type="submit" class="btn btn-primary"> {{ __('Réserver') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajoutez le lien vers le script JavaScript de Bootstrap -->
    <script>
    // Sélectionnez les champs d'heure
    const timeDField = document.getElementById('timeD');
    const timeFField = document.getElementById('timeF');

    // Écoutez les événements de changement d'heure
    timeDField.addEventListener('change', () => {
        // Assurez-vous que les minutes sont toujours réglées à "00"
        const timeDValue = timeDField.value.split(':');
        if (timeDValue.length === 2) {
            timeDField.value = timeDValue[0] + ':00';
        }
    });

    timeFField.addEventListener('change', () => {
        // Assurez-vous que les minutes sont toujours réglées à "00"
        const timeFValue = timeFField.value.split(':');
        if (timeFValue.length === 2) {
            timeFField.value = timeFValue[0] + ':00';
        }
    });
</script>

@endsection