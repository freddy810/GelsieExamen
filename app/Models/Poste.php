<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = ['Intitule', 'Description', 'Niveau_hierarchique', 'departements_id'];

    public function employes()
    {
        return $this->hasMany(Employe::class, 'poste_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departements_id');
    }
}
