<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use App\Models\Order;
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

        // Track first-time buyers (those who have a unique customer_id)
        $firstTimeBuyersCount = Order::select('customer_id')
                                     ->distinct()  // Get only unique customer IDs
                                     ->whereNotNull('customer_id')  // Ensure the customer_id exists
                                     ->where('status', 'Accepted')  // Only count accepted orders
                                     ->count();  // Count the distinct customer IDs

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
