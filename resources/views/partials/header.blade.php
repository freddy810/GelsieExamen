<style>
    :root {
        --primary-color: #3498db;
        --secondary-color: #2c3e50;
        --success-color: #2ecc71;
        --warning-color: #f39c12;
        --danger-color: #e74c3c;
        --light-color: #ecf0f1;
        --dark-color: #34495e;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f7fa;
        color: #333;
    }

    /* Navbar */
    .navbar {
        background-color: var(--secondary-color);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 15px 20px;
    }

    .navbar-brand {
        font-weight: 700;
        color: white;
    }

    .navbar-brand span {
        color: var(--primary-color);
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.8);
        margin: 0 10px;
        font-weight: 500;
        transition: all 0.2s;
    }

    .nav-link:hover,
    .nav-link.active {
        color: white;
    }

    /* Cartes de statistiques */
    .stat-card {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        border-left: 4px solid;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .stat-card.primary {
        border-left-color: var(--primary-color);
    }

    .stat-card.success {
        border-left-color: var(--success-color);
    }

    .stat-card.warning {
        border-left-color: var(--warning-color);
    }

    .stat-card.danger {
        border-left-color: var(--danger-color);
    }

    .stat-card .card-title {
        font-size: 14px;
        color: #7f8c8d;
        margin-bottom: 5px;
    }

    .stat-card h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 0;
    }

    /* Graphiques */
    .chart-container {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 20px;
        margin-bottom: 30px;
    }

    /* Tableau */
    .data-table {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .data-table th {
        background-color: #f8f9fa;
        color: var(--secondary-color);
        font-weight: 600;
        border-top: none;
    }

    .badge {
        padding: 5px 10px;
        font-weight: 500;
        border-radius: 4px;
    }

    .employee-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 12px;
    }
</style>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestion <span>RH</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}"><i class="bi bi-house-door me-1"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('employes.index')}}"><i class="bi bi-people me-1"></i> Personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('postes.index')}}"><i class="bi bi-briefcase me-1"></i> Postes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('absences.index')}}"><i class="bi bi-calendar-event me-1"></i> Absences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departements.index')}}"><i class="bi bi-graph-up me-1"></i> Departements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-gear me-1"></i> Paramètres</a>
                </li>
            </ul>
        </div>
    </div>
</nav>