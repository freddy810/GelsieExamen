<?php

namespace App\Http\Controllers;

use  App\Models\Absence;
use Illuminate\Http\Request;


class AbsenceController extends Controller
{

    public function index()
    {
        $absences = Absence::paginate(5);
        return view('absences.index', compact('absences'));
    }

    public function create()
    {
        return view('absences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Type' => 'required',
            'Date_debut' => 'required',
            'Date_fin' => 'required',
            'Statut' => 'required',
        ]);

        Absence::create($request->all());
        return redirect()->route('absences.index');
    }


    public function show(Absence $absence)
    {
        return view('absences.show', compact('absence'));
    }


    public function edit(Absence $absence)
    {
        return view('absences.edit', compact('absence'));
    }


    public function update(Request $request, Absence $absence)
    {
        $request->validate([
            'Type' => 'required',
            'Date_debut' => 'required',
            'Date_fin' => 'required',
            'Statut' => 'required',
        ]);

        $absence->update($request->all());
        return redirect()->route('absences.index');
    }


    public function destroy(Absence $absence)
    {
        $absence->delete();
        return redirect()->route('absences.index');
    }
}
