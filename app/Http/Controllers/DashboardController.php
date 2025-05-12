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


     // Fetch only 3 most recent Orders from the database
    $orders = Order::orderBy('created_at', 'desc')->take(3)->get();  // Fetch the latest 3 orders
        
        return view('dashboard', compact('kpis', 'orders'));
    }
    
}
