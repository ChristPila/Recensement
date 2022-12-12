<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recense extends Model
{
    use HasFactory;
    protected $fillable=[
    'nom',
    'email',
    'password',
    'prenom',
    'postnom',
    'lieu_de_naissance',
    'sexe',
    'age',
    'nom_mere',
    'nom_pere',
    'etat_civil',
    'pays',
    'province',
    'nationalite',
    'commune',
    'quartier',
    'avenue'
];
}
