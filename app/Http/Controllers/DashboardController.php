<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use App\Models\Order; // Import the Order model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all KPIs from the database
        $kpis = Kpi::all();

        // Fetch all Orders from the database
        $orders = Order::all(); 
        
        return view('dashboard', compact('kpis', 'orders'));
    }
    
}
