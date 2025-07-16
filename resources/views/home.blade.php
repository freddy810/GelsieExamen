@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion RH | Tableau de Bord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
</head>

<body>

    <!-- Contenu principal -->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4"><i class="bi bi-speedometer2 me-2"></i>Tableau de Bord</h2>
            </div>

            <!-- Cartes de statistiques -->
            <div class="col-md-3 mb-4">
                <div class="card stat-card primary h-100">
                    <div class="card-body">
                        <h5 class="card-title">Employés Totaux</h5>
                        <h2 class="mb-0">142</h2>
                        <p class="text-muted mb-0"><i class="bi bi-arrow-up text-success"></i> +5% vs mois dernier</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card stat-card success h-100">
                    <div class="card-body">
                        <h5 class="card-title">Présents Aujourd'hui</h5>
                        <h2 class="mb-0">128</h2>
                        <p class="text-muted mb-0">90.1% de présence</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card stat-card warning h-100">
                    <div class="card-body">
                        <h5 class="card-title">En Absence</h5>
                        <h2 class="mb-0">14</h2>
                        <p class="text-muted mb-0">9.9% d'absentéisme</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card stat-card danger h-100">
                    <div class="card-body">
                        <h5 class="card-title">Postes Vacants</h5>
                        <h2 class="mb-0">8</h2>
                        <p class="text-muted mb-0">5.6% des postes</p>
                    </div>
                </div>
            </div>

            <!-- Graphique de répartition -->
            <div class="col-md-8">
                <div class="chart-container">
                    <h5 class="mb-4"><i class="bi bi-bar-chart me-2"></i>Répartition du Personnel</h5>
                    <canvas id="repartitionChart"></canvas>
                </div>
            </div>

            <!-- Répartition par département -->
            <div class="col-md-4">
                <div class="chart-container h-100">
                    <h5 class="mb-4"><i class="bi bi-pie-chart me-2"></i>Par Département</h5>
                    <canvas id="departmentChart"></canvas>
                </div>
            </div>

            <!-- Tableau des dernières absences -->
            <div class="col-12">
                <div class="data-table">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Employé</th>
                                    <th>Département</th>
                                    <th>Poste</th>
                                    <th>Type Absence</th>
                                    <th>Période</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                                class="employee-avatar">
                                            <div>
                                                <h6 class="mb-0">Jean Dupont</h6>
                                                <small class="text-muted">IT001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Informatique</td>
                                    <td>Développeur</td>
                                    <td>Congé annuel</td>
                                    <td>15/07 - 22/07</td>
                                    <td><span class="badge bg-success">Approuvé</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                                class="employee-avatar">
                                            <div>
                                                <h6 class="mb-0">Marie Martin</h6>
                                                <small class="text-muted">RH003</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Ressources Humaines</td>
                                    <td>Responsable RH</td>
                                    <td>Maladie</td>
                                    <td>10/07 - 12/07</td>
                                    <td><span class="badge bg-success">Approuvé</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                                class="employee-avatar">
                                            <div>
                                                <h6 class="mb-0">Pierre Lambert</h6>
                                                <small class="text-muted">MK005</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Marketing</td>
                                    <td>Chef de Projet</td>
                                    <td>RTT</td>
                                    <td>18/07</td>
                                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                                class="employee-avatar">
                                            <div>
                                                <h6 class="mb-0">Sophie Leroy</h6>
                                                <small class="text-muted">FI008</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Finance</td>
                                    <td>Comptable</td>
                                    <td>Formation</td>
                                    <td>05/08 - 07/08</td>
                                    <td><span class="badge bg-primary">Planifié</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Graphique de répartition des postes
        const repartitionCtx = document.getElementById('repartitionChart').getContext('2d');
        const repartitionChart = new Chart(repartitionCtx, {
            type: 'bar',
            data: {
                labels: ['Cadres', 'Techniciens', 'Employés', 'Ouvriers', 'Stagiaires'],
                datasets: [{
                    label: 'Nombre d\'employés',
                    data: [25, 42, 35, 28, 12],
                    backgroundColor: [
                        'rgba(52, 152, 219, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(155, 89, 182, 0.7)',
                        'rgba(241, 196, 15, 0.7)',
                        'rgba(230, 126, 34, 0.7)'
                    ],
                    borderColor: [
                        'rgba(52, 152, 219, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(155, 89, 182, 1)',
                        'rgba(241, 196, 15, 1)',
                        'rgba(230, 126, 34, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return context.parsed.y + ' employés (' + Math.round(context.parsed.y / 142 * 100) + '%)';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Nombre d\'employés'
                        }
                    }
                }
            }
        });

        // Graphique de répartition par département
        const departmentCtx = document.getElementById('departmentChart').getContext('2d');
        const departmentChart = new Chart(departmentCtx, {
            type: 'doughnut',
            data: {
                labels: ['Informatique', 'RH', 'Marketing', 'Finance', 'Production'],
                datasets: [{
                    data: [35, 18, 22, 15, 52],
                    backgroundColor: [
                        'rgba(52, 152, 219, 0.7)',
                        'rgba(155, 89, 182, 0.7)',
                        'rgba(26, 188, 156, 0.7)',
                        'rgba(241, 196, 15, 0.7)',
                        'rgba(231, 76, 60, 0.7)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return context.label + ': ' + context.raw + ' (' + Math.round(context.parsed / 142 * 100) + '%)';
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
@endsection