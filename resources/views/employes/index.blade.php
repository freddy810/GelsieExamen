@extends('layouts.app')
    @section('jumb', 'employes')
    @section('content')


        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 mt-4">
      
            <a href="{{route('employes.create')}}" class="btn btn-secondary mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
              </svg>
            </a>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>DATE DE NAISSANCE</th>
                  <th>ADRESSE</th>
                  <th>EMAIL</th>
                  <th>TELEPHONE</th>
                  <th>DATE EMBAUCHE</th>
                  <th>POSTE_ID</th>
                  <th>STATUT</th>
                </tr>
              </thead>
              <tbody>
                @Foreach($employes as $employe)
                <tr>
                  <td>{{$employe->id}}</td>
                  <td>{{$employe->Nom}}</td>
                  <td>{{$employe->Prenom}}</td>
                  <td>{{$employe->Date_de_naissance}}</td>
                  <td>{{$employe->Adresse}}</td>
                  <td>{{$employe->Email}}</td>
                  <td>{{$employe->Telephone}}</td>
                  <td>{{$employe->Date_embauche}}</td>
                  <td>{{$employe->poste->Intitule}}</td>
                  <td>{{$employe->Statut}}</td>
                  <td class="d-flex justify-content-between">
                    <a href="{{route('employes.show', $employe->id)}}" class="btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                      </svg>
                    </a>
                    <a href="{{route('employes.edit', $employe->id)}}" class="btn btn-success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                      </svg>
                    </a>
                    <form action="{{route('employes.destroy', $employe->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce employe ?')">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                      </svg>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <div class="d-flex justify-content-center">
              {{$employes->links('pagination::bootstrap-5')}}
            </div>

          </div>
        </div>

  @endsection