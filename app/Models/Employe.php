<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['Nom', 'Prenom', 'Date_de_naissance', 'Adresse', 'Email', 'Telephone', 'Date_embauche', 'Statut', 'poste_id'];
    
    public function poste()
    {
        return $this->belongsTo(Poste::class, 'poste_id');
    }
}
