<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    protected $table = 'prestations'; // Assurez-vous que le nom de la table correspond à votre base de données

    protected $fillable = [
        'nom',
    ];
}
