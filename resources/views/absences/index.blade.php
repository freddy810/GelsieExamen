@extends('layouts.app')
    @section('jumb', 'absences')
    @section('content')

    <style>
      body {
          font-family: 'Segoe UI', sans-serif;
          background-color: #f5f7fa;
          color: #2c3e50;
          margin: 0;
          padding: 2em;
      }

      header {
          background-color: #2c3e50;
          color: #ecf0f1;
          padding: 1em;
          text-align: center;
          margin-bottom: 2em;
      }

      table {
          width: 100%;
          border-collapse: collapse;
          background-color: #fff;
      }

      th,
      td {
          border: 1px solid #bdc3c7;
          padding: 0.75em;
          text-align: left;
      }

      a.btn,
      button {
          display: inline-block;
          background-color: #3498db;
          color: #fff;
          padding: 0.4em 0.8em;
          text-decoration: none;
          margin: 0.2em;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }

      a.btn:hover,
      button:hover {
          background-color: #2980b9;
      }
  </style>

    
    <main>
      <table id="employeTable">
          <thead>
              <tr>
                <th>ID</th>
                <th>TYPE</th>
                <th>DATE DEBUT</th>
                <th>DATE FIN</th>
                <th>STATUT</th>
              </tr>
          </thead>
          <tbody>
            @Foreach($absences as $absence)
                <tr>
                  <td>{{$absence->id}}</td>
                  <td>{{$absence->Type}}</td>
                  <td>{{$absence->Date_debut}}</td>
                  <td>{{$absence->Date_fin}}</td>
                  <td>{{$absence->Statut}}</td>
                  <td class="d-flex justify-content-between">
                    <a href="{{route('absences.show', $absence->id)}}" class="btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                      </svg>
                    </a>
                    <a href="{{route('absences.edit', $absence->id)}}" class="btn btn-success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                      </svg>
                    </a>
                    <form action="{{route('absences.destroy', $absence->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce absence ?')">
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
      <a href="{{route('absences.create')}}" class="btn">&#10133; Ajouter un Absence</a> <!-- + icône -->
  </main>

        
            <div class="d-flex justify-content-center">
              {{$absences->links('pagination::bootstrap-5')}}
            </div>

          </div>
        </div>

  @endsection