<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user(){
        return ($this->belongsTo(User::class,'user_id'));
    }
}
