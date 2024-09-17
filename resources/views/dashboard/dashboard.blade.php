@extends('layouts.dashboard')

@section('title', 'Welcome | Geeks')

@section('content')


<div class="container">
    <div class="row">
        <!-- Nombre d'actions journalières -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visites Journalières</h5>
                    <p class="card-text">{{ $dailyActions->sum() }}</p>
                </div>
            </div>
        </div>

        <!-- Nombre d'actions mensuelles -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visites Mensuelles</h5>
                    <p class="card-text">{{ $monthlyActions->sum() }}</p>
                </div>
            </div>
        </div>

        <!-- Nombre d'actions annuelles -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visites Annuelles</h5>
                    <p class="card-text">{{ $annualActions->sum() }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphique -->
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Graphique des Visites Mensuelles</h5>
            <canvas id="actionsChart"></canvas>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('actionsChart').getContext('2d');
    var actionsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json(range(1, 12)), // Mois de 1 à 12
            datasets: [{
                label: 'Actions',
                data: @json($chartData),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection