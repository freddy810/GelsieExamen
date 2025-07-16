
@extends('layouts.app')
@section('title', 'afficher poste')
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
                        <input type="text" name="description" id="description" class="form-control" value="{{old('description', $poste->Decription)}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Niveau_hierarchique" class="form-label">Niveau hierarchique</label>
                        <input type="text" name="Niveau_hierarchique" id="Niveau_hierarchique" class="form-control" value="{{old('Niveau_hierarchique', $poste->Niveau_hierarchique)}}">
                    </div>
                </div>
                

                </form>
            </div>
        </div>

  @endsection

 