<?php

namespace App\Http\Controllers;

use  App\Models\Poste;
use  App\Models\Departement;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    public function index()
    {
        $postes = Poste::paginate(5);
        $postes->load('departement');
        return view('postes.index', compact('postes'));
    }


    public function create()
    {
        $departements = Departement::all();
        return view('postes.create', compact('departements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Intitule' => 'required',
            'Description' => 'required',
            'Niveau_hierarchique' => 'required',
            'departements_id' => 'required|exists:departements,id',
        ]);

        Poste::create($request->all());
        return redirect()->route('postes.index');
    }


    public function show(Poste $poste)
    {
        return view('postes.show', compact('poste'));
    }

    public function edit(Poste $poste)
    {
        $departements = Departement::all();
        return view('postes.edit', compact('poste', 'departements'));
    }


    public function update(Request $request, Poste $poste)
    {
        $request->validate([
            'Intitule' => 'required',
            'Description' => 'required',
            'Niveau_hierarchique' => 'required',
            'departements_id' => 'required|exists:departements,id',
        ]);

        $poste->update($request->all());
        return redirect()->route('postes.index');
    }


    public function destroy(Poste $poste)
    {
        $poste->delete();
        return redirect()->route('postes.index');
    }
}
