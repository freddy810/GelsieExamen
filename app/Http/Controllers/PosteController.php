<?php

namespace App\Http\Controllers;
use  App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    public function index()
   {
       $poste = Poste::paginate(5);
       return view('postes.index', compact('postes'));
   }

   
   public function create()
   {
       return view('postes.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'Intitule'=>'required',
           'Description'=>'required',
           'Niveau_hierarchique'=>'required',
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
       return view('postes.edit', compact('poste'));
   }


   public function update(Request $request, Poste $poste)
   {
       $request->validate([
        'Intitule'=>'required',
        'Description'=>'required',
        'Niveau_hierarchique'=>'required',
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


