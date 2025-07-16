

@extends('layouts.app')
@section('title', 'Creation absence')
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

    form {
        background-color: #fff;
        padding: 2em;
        border-radius: 8px;
        border: 1px solid #bdc3c7;
        max-width: 500px;
        margin: auto;
    }

    label {
        display: block;
        margin-top: 1em;
    }

    input {
        width: 100%;
        padding: 0.5em;
        margin-top: 0.2em;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        margin-top: 1.5em;
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 0.6em 1em;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>
</head>

<body>
<form id="form-ajout" action="{{route('absences.update', $absence->id)}}" method="POST">
    @csrf 
    @method('PUT') 
    <label>Nom: <input Nom="text" id="Nom" name="Nom"  required></label>
    <label>Description: <input type="text" id="Description" name="Description" required></label>
    <button type="submit">Valider</button>
    <a type="button" href="{{route('departements.index')}}" class="btn btn-danger mt-3">Annuler</a>
</form>

  @endsection

 