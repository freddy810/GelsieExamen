
@extends('layouts.app')
@section('title', 'Creation poste')
@section('jumb', 'postes')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('postes.store')}}" method="POST">
                @csrf 
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Intitule" class="form-label">Intitule</label>
                            <input type="text" name="Intitule" id="Intitule" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Description" class="form-label">Description</label>
                            <input type="text" name="Description" id="Description" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Niveau_hierarchique" class="form-label">Niveau hierarchique</label>
                            <input type="text" name="Niveau_hierarchique" id="Niveau_hierarchique" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="departements_id" class="form-label">Departement Occupé</label>   
                            <select name="departements_id" id="departements_id" class="form-select">
                                <option value="">Sélectionner un departement</option>
                                @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->Nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('postes.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 