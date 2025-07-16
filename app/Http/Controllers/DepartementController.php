<?php

namespace App\Http\Controllers;

use  App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
   
   public function index()
   {
       $Departement = Departement::paginate(5);
       return view('departements.index', compact('departements'));
   }

   
   public function create()
   {
       return view('departements.create');
   }


   public function store(Request $request)
   {
       $request->validate([
           'Nom'=>'required',
           'Description'=>'required',
       ]);

       Departement::create($request->all());
       return redirect()->route('departements.index');
   }

   
   public function show(Departement $departement)
   {
       return view('departements.show', compact('departement'));
   }

  
   public function edit(Departement $departement)
   {
       return view('departements.edit', compact('departement'));
   }


   public function update(Request $request, Departement $departement)
   {
       $request->validate([
           'Nom'=>'required',
           'Description'=>'required',
       ]);

       $departement->update($request->all());
       return redirect()->route('departements.index');
   }

   
   public function destroy(Departement $departement)
   {
       $departement->delete();
       return redirect()->route('departements.index');
   }
}



