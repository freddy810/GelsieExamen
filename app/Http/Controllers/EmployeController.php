<?php

namespace App\Http\Controllers;

use  App\Models\Employe;
use  App\Models\Poste;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::paginate(5);
        $employes->load('poste');
        return view('employes.index', compact('employes'));
    }


    public function create()
    {
        $postes = Poste::all();
        return view('employes.create', compact('postes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Date_de_naissance' => 'required',
            'Adresse' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'Date_embauche' => 'required',
            'Statut' => 'required',
            'poste_id' => 'required|exists:postes,id',
        ]);

        Employe::create($request->all());
        return redirect()->route('employes.index');
    }


    public function show(Employe $employe)
    {
        return view('employes.show', compact('employe'));
    }


    public function edit(Employe $employe)
    {
        $postes = Poste::all();
        return view('employes.edit', compact('postes', 'employe'));
    }


    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Date_de_naissance' => 'required',
            'Adresse' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'Date_embauche' => 'required',
            'Statut' => 'required',
            'poste_id' => 'required|exists:postes,id',
        ]);

        $employe->update($request->all());
        return redirect()->route('employes.index');
    }


    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
