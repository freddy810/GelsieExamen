
@extends('layouts.app')
@section('title', 'supprimer departement')
@section('jumb', 'departements')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('departements.update', $departement->id)}}" method="POST">
                @csrf 
                @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" name="Nom" id="Nom" class="form-control" value="{{old('Nom', $departement->Nom)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Description" class="form-label">Description</label>
                            <input type="text" name="Description" id="Description" class="form-control" value="{{old('Description', $departement->Description)}}">
                        </div>
                    </div>

                    <div class="bouton mt-3" style="float: right;">
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        <a type="button" href="{{route('departements.index')}}" class="btn btn-danger mt-3">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

  @endsection

 