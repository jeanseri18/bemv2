<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Action;

class DashboardController extends Controller
{
    public function dashboard()
    {
          // Nombre d'actions journalières
          $dailyActions = Action::selectRaw('DATE(created_at) as date, COUNT(*) as count')
          ->groupBy('date')
          ->whereDate('created_at', Carbon::today())
          ->pluck('count', 'date');

      // Nombre d'actions mensuelles
      $monthlyActions = Action::selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count')
          ->groupBy('month', 'year')
          ->whereMonth('created_at', Carbon::now()->month)
          ->whereYear('created_at', Carbon::now()->year)
          ->pluck('count', 'month');

      // Nombre d'actions annuelles
      $annualActions = Action::selectRaw('YEAR(created_at) as year, COUNT(*) as count')
          ->groupBy('year')
          ->pluck('count', 'year');

      // Chart data (example: monthly actions)
      $chartData = Action::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
          ->groupBy('month')
          ->whereYear('created_at', Carbon::now()->year)
          ->pluck('count', 'month');

          return view('dashboard.dashboard', compact('dailyActions', 'monthlyActions', 'annualActions', 'chartData'));
    
    }
}
