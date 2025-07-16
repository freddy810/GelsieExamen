
@extends('layouts.app')
@section('title', 'supprimer poste')
@section('jumb', 'postes')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('postes.update', $poste->id)}}" method="POST">
                @csrf 
                @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Intitule" class="form-label">Intitule</label>
                            <input type="text" name="Intitule" id="Intitule" class="form-control" value="{{old('Intitule', $poste->Intitule)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Description" class="form-label">Description</label>
                            <input type="text" name="Description" id="Description" class="form-control" value="{{old('Description', $poste->Description)}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Niveau_hierarchique" class="form-label">Niveau hierarchique</label>
                            <input type="text" name="Niveau_hierarchique" id="Niveau_hierarchique" class="form-control" value="{{old('Niveau_hierarchique', $poste->Niveau_hierarchique)}}">
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

 