
@extends('layouts.app')
@section('title', 'afficher employe')
@section('jumb', 'employes')
@section('content')


        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-light mt-4 p-4">
                <form action="{{route('administrations.update', $administration->id)}}" method="POST">
                @csrf 
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" name="Nom" id="Nom" class="form-control"value="{{old('Nom', $employe->Nom)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" name="Prenom" id="Prenom"lass="form-control" value="{{old('Prenom', $employe->Prenom)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Date_de_naissance" class="form-label">Date_de_naissance</label>
                        <input type="Date" name="Date_de_naissance" id="Date_de_naissance" class="form-control" value="{{old('contact', $employe->Date_de_naissance)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Adresse" class="form-label">Adresse</label>
                        <input type="text" name="Adresse" id="Adresse" class="form-control" value="{{old('email', $employe->Adresse)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" name="Email" id="Email" class="form-control" value="{{old('Email', $employe->email)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Telephone" class="form-label">Telephone</label>
                        <input type="text" name="Telephone" id="Telephone" class="form-control" value="{{old('Telephone', $employe->Telephone)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Date_embauche" class="form-label">Date embauche</label>
                        <input type="Date" name="Date_embauche" id="Date_embauche"class="form-control" value="{{old('Date_embauche', $employe->Date_embauche)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Statut" class="form-label">Statut</label>
                        <input type="text" name="Statut" id="Statut" class="form-control" value="{{old('Statut', $employe->Statut)}}">
                    </div>
                </div>


                <div class="bouton mt-3" style="float: right;">
                    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                    <a type="button" href="{{route('employes.index')}}" class="btn btn-danger mt-3">Annuler</a>
                </div>
            </form>
        </div>
    </div>

  @endsection

 