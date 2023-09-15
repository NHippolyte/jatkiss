<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Prestation;

class Reservation extends Model
{

    // Nom de la table associée au modèle
    protected $table = 'reservations';

    // Clé primaire de la table
    protected $primaryKey = 'resa_id';

    // Les attributs qui peuvent être modifiés
    protected $fillable = [
        'user_id', 'prestation_id', 'date', 'timeD', 'timeF'
    ];

      // Relation avec l'utilisateur (une réservation appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function prestation()
    {
        return $this->belongsTo(Prestation::class, 'prestation_id');
    }

}
