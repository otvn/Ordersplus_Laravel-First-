<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all KPIs from the database
        $kpis = Kpi::all();

        // Return the dashboard view and pass the KPIs data to it
        return view('dashboard', compact('kpis'));
    }
}
