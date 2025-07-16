<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = ['Type', 'Date_debut', 'Date_fin', 'Statut', 'employes_id'];

    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employes_id');
    }
}
