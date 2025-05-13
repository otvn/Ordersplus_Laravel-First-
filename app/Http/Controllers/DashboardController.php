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
        
        // Calculate the required values for cards
        $ordersReceivedCount = Order::count(); // Total orders received
        $ordersServedCount = Order::where('status', 'Accepted')->count(); // Total orders served (Accepted status)
        $pendingOrdersCount = Order::where('status', 'Pending')->count(); // Pending orders

 
 // Track first-time buyers (those who have a unique phone number)
        $firstTimeBuyersCount = Order::select('phone')
                                     ->distinct()
                                     ->whereNotNull('phone')
                                     ->where('status', 'Accepted') // Assuming first-time buyers are only those who made successful purchases
                                     ->count();
        // Return the dashboard view with the data
        return view('dashboard', compact(
            'kpis', 
            'orders', 
            'ordersReceivedCount', 
            'ordersServedCount', 
            'pendingOrdersCount',
            'firstTimeBuyersCount' // Pass the first-time buyers count to the view
            
        ));
    }
}
