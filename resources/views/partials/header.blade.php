<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">@</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('employes.index')}}">Employe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('postes.index')}}">Poste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departemets.index')}}">Departement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('absences.index')}}">Absence</a>
                </li>
            </ul>
        </div>
    </div>
</nav>