
@extends('layouts.app')
@section('title', 'afficher absence')
@section('jumb', 'absences')
@section('content')

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f5f7fa;
        color: #2c3e50;
        padding: 2em;
    }

    header {
        background-color: #2c3e50;
        color: #fff;
        padding: 1em;
        text-align: center;
        margin-bottom: 2em;
    }

    .details {
        background-color: #fff;
        padding: 1.5em;
        border-radius: 8px;
        border: 1px solid #bdc3c7;
    }

    p {
        margin: 1em 0;
    }

    a.btn {
        background-color: #3498db;
        color: #fff;
        padding: 0.5em 1em;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        margin-top: 1em;
    }

    a.btn:hover {
        background-color: #2980b9;
    }
</style>

        <main class="details" id="detailEmploye">
            <form id="form-ajout" action="{{route('absences.update', $absence->id)}}" method="POST">
                @csrf 
                @method('PUT')
                <label>Type: <input type="text" id="Type" name="Type" value="{{old('Type', $absence->Type)}}"  required></label>
                <label>Date_debut: <input type="date" id="Date_debut" name="Date_debut" value="{{old('Date_debut', $absence->Date_debut)}}" required></label>
                <label>Date_fin: <input type="date" id="Date_fin" name="Date_fin" value="{{old('Date_fin', $absence->Date_fin)}}" required></label>
                <label>Statut: <input type="text" id="Statut"  name="Statut" value="{{old('Statut', $absence->Statut)}}" required></label>
                <a type="button" href="{{route('absences.index')}}" class="btn btn-primary mt-3">OK</a>
            </form>
        </main>


       

  @endsection

 