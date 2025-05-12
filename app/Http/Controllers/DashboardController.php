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

 // Fetch total first-time buyers (those who have placed exactly 1 order and that order is Accepted)
    $firstTimeBuyersCount = Order::select('customer_id')
        ->groupBy('customer_id') // Group by customer_id to count orders per customer
        ->havingRaw('count(*) = 1') // Only customers who have placed 1 order
        ->where('status', 'Accepted') // Ensure the order is "Accepted"
        ->count();

        // Return the dashboard view with the data
        return view('dashboard', compact(
            'kpis', 
            'orders', 
            'ordersReceivedCount', 
            'ordersServedCount', 
            'pendingOrdersCount', 
            'firstTimeBuyersCount'
        ));
    }
}
