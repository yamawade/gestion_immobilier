<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'categorie',
        'image',
        'description',
        'adresse',
        'statut',
        'espace_vert',
        'nombre_chambre',
        'nombre_toilette',
        'dimension_bien',
        'nombre_balcon',
        'user_id'
    ];
}
