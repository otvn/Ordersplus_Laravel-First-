@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto p-4">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-10 gap-6 p-6">
      <!-- Left Column -->
      <div class="lg:col-span-7">
        <div class="bg-white shadow-2xl text-white p-6">
            <!-- Top Row -->
            <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
              <!-- Left: Welcome and Search -->
              <div class="flex flex-col lg:flex-row items-center gap-6 w-full lg:w-auto">
                <h2 class="text-xl text-black font-bold">Welcome, <span class="text-yellow-400">Onti 👋</span></h2>
                <!-- Search -->
                <div class="relative w-full max-w-md">
                  <input
                    type="text"
                    placeholder="Search"
                    class="w-full bg-gray-800 text-white rounded-full py-2 px-4 pl-10 focus:outline-none"
                  />
                  <svg
                    class="absolute left-3 top-2.5 w-5 h-5 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
                  </svg>
                </div>
              </div>
            
              <!-- Right: Notification + Profile -->
              <div class="flex items-center gap-4">
                <button class="relative">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>
                  <span class="absolute -top-1 -right-1 bg-red-500 text-xs rounded-full w-4 h-4 flex items-center justify-center">1</span>
                </button>
                <div class="flex items-center gap-2">
                  <img src="https://i.pravatar.cc/40?img=5" alt="profile" class="w-10 h-10 rounded-full" />
                  <div class="text-sm">
                    <div class="font-semibold text-black">Nausin Onti</div>
                    <div class="text-gray-600 text-xs">Admin</div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
              <!-- Card 1 -->
<div class="bg-blue-400 text-black rounded-xl p-4 flex justify-between items-center">
    <div>
        <div class="text-lg font-bold">
            <!-- Directly access Today's Revenue KPI -->
            @php
                $todayRevenue = $kpis->where('name', 'Today\'s Revenue')->first();
            @endphp
            @if($todayRevenue)
                ${{ number_format($todayRevenue->value) }}  <!-- Display value with dollar sign -->
            @endif
        </div>
        <div class="text-sm">Today's Revenue</div>
    </div>
    <div class="bg-black p-2 rounded-full">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 8c-1.657 0-3 1.343-3 3v4m3-7c1.657 0 3 1.343 3 3v4m-6 0h6" />
        </svg>
    </div>
</div>


              <!-- Card 2 -->

<!-- Card for Today's Orders -->
<div class="bg-red-400 text-black rounded-xl p-4 flex justify-between items-center">
    <div>
        <div class="text-lg font-bold">
            <!-- Directly access Today's Orders KPI without looping -->
            @php
                $todayOrders = $kpis->firstWhere('name', 'Today\'s Orders'); // Fetch the specific KPI
            @endphp

            @if($todayOrders)
            ${{ number_format($todayOrders->value) }} 
                  <!-- Display the value for Today's Orders -->
            @endif
        </div>
        <div class="text-sm">Today's Orders</div>
    </div>
    <div class="bg-black p-2 rounded-full">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 10h2l1 2h13l1-2h2m-4 4h-1a4 4 0 00-8 0H7m2 4h6" />
        </svg>
    </div>
</div>

              <!-- Card 3 -->
             <!-- Card for Avg. Expense -->
<div class="bg-gray-400 text-black rounded-xl p-4 flex justify-between items-center">
    <div>
        <div class="text-lg font-bold">
            <!-- Directly access Avg. Expense KPI without looping -->
            @php
                $avgExpense = $kpis->firstWhere('name', 'Avg. Expense'); // Fetch the specific KPI
            @endphp

            @if($avgExpense)
                ${{ number_format($avgExpense->value) }}  <!-- Display the value for Avg. Expense with dollar sign -->
            @endif
        </div>
        <div class="text-sm">Avg. Expense</div>
    </div>
    <div class="bg-black p-2 rounded-full">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 13l4 4L19 7" />
        </svg>
    </div>
</div>

          
              <!-- Card 4 -->
              <!-- Card for Avg. Revenue -->
<div class="bg-purple-400 text-black rounded-xl p-4 flex justify-between items-center">
    <div>
        <div class="text-lg font-bold">
            <!-- Directly access Avg. Revenue KPI without looping -->
            @php
                $avgRevenue = $kpis->firstWhere('name', 'Avg. Revenue'); // Fetch the specific KPI
            @endphp

            @if($avgRevenue)
                ${{ number_format($avgRevenue->value) }}  <!-- Display the value for Avg. Revenue with dollar sign -->
            @endif
        </div>
        <div class="text-sm">Avg. Revenue</div>
    </div>
    <div class="bg-black p-2 rounded-full">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 14l6-6m0 0l-6-6m6 6H3" />
        </svg>
    </div>
</div>

            </div>
          </div>
          

   

          <div class="max-w-3xl mt-4 mx-auto grid lg:grid-cols-2  gap-6">
            <!-- Total Revenue Section -->
            <div class="bg-white  p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">Total Revenue</h2>
                    <select class="border rounded px-2 py-1 text-sm">
                        <option>Last 8 Months</option>
                    </select>
                </div>
                <p class="text-3xl font-bold">$184,839</p>
                <div class="mt-4 w-84 ">
                    <canvas id="revenueChart" class="w-full h-64"></canvas>
                </div>
            </div>
    
            <!-- Top Categories Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold">Top Categories</h2>
                    <select class="border rounded px-2 py-1 text-sm">
                        <option>This Month</option>
                    </select>
                </div>
                <div class="flex justify-center pl-14 w-48 h-48">
                    <canvas id="categoriesChart" class=" w-48 h-48"></canvas>
                </div>
                <div class="text-sm">
                    <p><span class="inline-block w-4 h-4 bg-blue-400 rounded-full mr-2"></span>Seafood 30%</p>
                    <p><span class="inline-block w-4 h-4 bg-gray-800 rounded-full mr-2"></span>Dessert 25%</p>
                    <p><span class="inline-block w-4 h-4 bg-gray-200 rounded-full mr-2"></span>Beverages 25%</p>
                    <p><span class="inline-block w-4 h-4 bg-gray-400 rounded-full mr-2"></span>Pasta 20%</p>
                </div>
            </div>
        </div>
    
        <script>
            // Line Chart for Revenue (Income and Expense)
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    datasets: [
                        {
                            label: 'Income',
                            data: [8000, 10000, 9000, 12000, 16580, 14000, 18000, 20000],
                            borderColor: '#87CEEB',
                            backgroundColor: 'rgba(22, 154, 249, 0.1)',
                            fill: true,
                            tension: 0.4,
                            pointBackgroundColor: 'white'
                        },
                        {
                            label: 'Expense',
                            data: [5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000],
                            borderColor: '#FFFFF',
                            backgroundColor: 'rgba(31, 41, 55, 0.1)',
                            fill: true,
                            tension: 0.4,
                           
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 25000,
                            ticks: {
                                stepSize: 5000,
                                callback: function(value) {
                                    return value / 1000 + 'K';
                                },
                                color: 'black'
                            },
                            grid: {
                    color: '#9CA3AF' // Change y-axis grid lines to white
                }
                        },
                        x: {
                ticks: {
                    color: 'black' // Change x-axis labels to white
                },
                grid: {
                    color: '#9CA3AF' // Change y-axis grid lines to white
                }
            }
                    },
                    plugins: {
                        legend: {
                labels: {
                    color: 'black' // Change legend text color to white
                }
            },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': $' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
    
            // Donut Chart for Top Categories
            const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
            new Chart(categoriesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Seafood', 'Dessert', 'Beverages', 'Pasta'],
                    datasets: [{
                        data: [30, 25, 25, 20],
                        backgroundColor: ['#60A5FA', '#1F2937', '#E5E7EB', '#9CA3AF'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    cutout: '50%',
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        </script>
        <!-- Development team -->
        <div class="max-w-6xl mx-auto p-6 bg-[#E5E7EB] rounded-lg shadow-md mt-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-black-400">Supplier Performance</h1>
            <div class="flex space-x-3">
                <button class="text-black hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <button class="text-black hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </button>
                <button class="text-black hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Team Member 1 -->
        <div class="flex items-center shadow-2xl justify-between p-4 bg-white mt-4 rounded-lg mb-4">
            <div class="flex items-center space-x-4">
                <img src="/assets/orders/images/developer.jpg" alt="Profile of Logan Paul" class="w-12 h-12 rounded-full">
                <div>
                    <h2 class="text-lg font-semibold text-black">Logan Paul</h2>
                    
                </div>
            </div>
            <div class="text-2xl font-bold text-black ">82%</div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="90">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value ">90%</span>
                </div>
                <p class="text-sm text-black mt-2">On-time delivery rate</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="74">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">74%</span>
                </div>
                <p class="text-sm text-black mt-2">Product quality ratings</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="86">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">86%</span>
                </div>
                <p class="text-sm text-black mt-2">Order fulfillment accuracy</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="78">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">78%</span>
                </div>
                <p class="text-sm text-text-black mt-2">Customer satisfaction</p>
            </div>
        </div>

        <!-- Team Member 2 -->
    <div class="flex items-center shadow-2xl justify-between p-4 bg-white mt-4 rounded-lg mb-4">
            <div class="flex items-center space-x-4">
                <img src="/assets/orders/images/developer.jpg" alt="Profile of Logan Paul" class="w-12 h-12 rounded-full">
                <div>
                    <h2 class="text-lg font-semibold text-black">Logan Paul</h2>
                    
                </div>
            </div>
            <div class="text-2xl font-bold text-black ">82%</div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="90">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value ">90%</span>
                </div>
                <p class="text-sm text-black mt-2">On-time delivery rate</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="74">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">74%</span>
                </div>
                <p class="text-sm text-black mt-2">Product quality ratings</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="86">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">86%</span>
                </div>
                <p class="text-sm text-black mt-2">Order fulfillment accuracy</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="78">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">78%</span>
                </div>
                <p class="text-sm text-text-black mt-2">Customer satisfaction</p>
            </div>
        </div>

        <!-- Team Member 3 -->
         <div class="flex items-center shadow-2xl justify-between p-4 bg-white mt-4 rounded-lg mb-4">
            <div class="flex items-center space-x-4">
                <img src="/assets/orders/images/developer.jpg" alt="Profile of Logan Paul" class="w-12 h-12 rounded-full">
                <div>
                    <h2 class="text-lg font-semibold text-black">Logan Paul</h2>
                    
                </div>
            </div>
            <div class="text-2xl font-bold text-black ">82%</div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="90">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value ">90%</span>
                </div>
                <p class="text-sm text-black mt-2">On-time delivery rate</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="74">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">74%</span>
                </div>
                <p class="text-sm text-black mt-2">Product quality ratings</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="86">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">86%</span>
                </div>
                <p class="text-sm text-black mt-2">Order fulfillment accuracy</p>
            </div>
            <div class="text-center hidden lg:block">
                <div class="progress-ring" data-progress="78">
                    <svg viewBox="0 0 100 100">
                        <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                        <circle class="progress-ring__fill" cx="50" cy="50" r="40" pathLength="100"/>
                    </svg>
                    <span class="progress-ring__value">78%</span>
                </div>
                <p class="text-sm text-text-black mt-2">Customer satisfaction</p>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.progress-ring').forEach(ring => {
            const progress = ring.getAttribute('data-progress');
            const circle = ring.querySelector('.progress-ring__fill');
            const offset = 100 - progress; // Calculate the dash offset (pathLength is 100)
            circle.style.strokeDasharray = '100 100';
            circle.style.strokeDashoffset = offset;
        });
        </script> 
            <div class="mr-4 mt-6 grid lg:grid-cols-[30%_70%] gap-4">
                <!-- Left Portion: Cards (40%) -->
                <div class="grid gap-3 grid-cols-1">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-xl h-20 p-4 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">1520</h3>
                            <span class="bg-gray-400 text-white text-xs px-2 py-1 rounded">Orders received</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/cash-on-delivery.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 2 -->
                    <div class="bg-white rounded-xl h-20 p-4 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">1428</h3>
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">Orders served</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/taco-truck.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 3 -->
                    <div class="bg-white rounded-xl p-4 h-20 flex items-center justify-between shadow">
                        <div >
                            <h3 class="text-xl font-bold">30</h3>
                            <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded">Pending orders</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/clock.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 4 -->
                    <div class="bg-white rounded-xl p-4 h-20 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">$105</h3>
                            <span class="bg-purple-400 text-white text-xs px-2 py-1 rounded">First Time Buyer</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/eating.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                </div>
        
                <!-- R-Monthly Sales Performence -->
                <div class="flex flex-col gap-4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h1 class="text-xl font-bold mb-6">Monthly Sales Performance</h1>
                        
                        <!-- Chart Container -->
                        <div class="relative h-64">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
        
                    <!-- Top Selling Dishes -->
                   
                </div>
            </div>
        
            <script>
                const ctx = document.getElementById('salesChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Oct', 'Jan', 'Sep', 'Mar', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                        datasets: [
                            {
                                label: 'Orders Received',
                                data: [5, 10, 5, 10, 2, 5, 2, 10, 5, 10],
                                backgroundColor: '#D3D3D3',
                                barThickness: 20,
                            },
                            {
                                label: 'Orders Served',
                                data: [10, 15, 12, 5, 10, 10, 5, 5, 15, 15],
                                backgroundColor: '#60A5FA',
                                barThickness: 20,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 20,
                                ticks: {
                                    stepSize: 5,
                                    color: 'black',
                                },
                                grid: {
                                    color: '#9CA3AF',
                                },
                            },
                            x: {
                                ticks: {
                                    color: 'black',
                                },
                                grid: {
                                    display: false,
                                    
                                },
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    color: '#black',
                                    padding: 20,
                                },
                            },
                        },
                    }
                });
            </script>
<!-- Order Overview        -->
<div class="bg-white mt-10 shadow-lg rounded-lg p-6">
  <h2 class="text-2xl font-bold text-black-300 mb-6">Order Overview</h2>

  <table class="min-w-full table-auto">
    <thead>
      <tr class="bg-blue-400">
        <th class="px-4 py-2 text-left text-sm text-white">Order Id</th>
        <th class="px-4 py-2 text-left text-sm text-white">Restaurant</th>
        <th class="px-4 py-2 text-left text-sm text-white">Product</th>
        <th class="px-4 py-2 text-left text-sm text-white">Phone</th>
        <th class="px-4 py-2 text-left text-sm text-white">Price</th>
        <th class="px-4 py-2 text-left text-sm text-white">Status</th>
        <th class="px-4 py-2 text-left text-sm text-white">Shipping/Delivery Status</th>
        <th class="px-4 py-2 text-left text-sm text-white">Invoicing</th>
        <th class="px-4 py-2 text-left text-sm text-white">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
        <tr class="border-b">
          <td class="px-4 py-2 text-black text-sm">{{ $order->id }}</td>
          <td class="px-4 py-2 text-black text-sm">{{ $order->restaurant }}</td>
          <td class="px-4 py-2 text-sm flex items-center space-x-2">
            <img src="{{ asset('assets/orders/images/' . $order->product_image) }}" alt="Food Image" class="w-10 h-10 object-cover rounded-full">
            <span class="text-text-black">{{ $order->product_name }}</span>
          </td>
          <td class="px-4 py-2 text-black text-sm">{{ $order->phone }}</td>
          <td class="px-4 py-2 text-text-black text-sm">${{ number_format($order->price, 2) }}</td>
          <td class="px-4 py-2 text-lg text-green-500">{{ $order->status }}</td>
          <td class="px-4 py-2 text-text-black text-sm">{{ $order->delivery_status }}</td>
          <td class="px-4 py-2 text-text-black text-sm">Invoice #{{ $order->id }} - ${{ number_format($order->price, 2) }}</td>
          <td class="px-4 py-2 text-sm">
            <button class="bg-blue-500 text-white px-6 py-2 mb-2 rounded-lg mr-2">Track</button>
            <button class="bg-[#9CA3AF] text-white px-6 py-2 rounded-lg">Cancel</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>

     
    
        <!-- Right Column -->
      <div class="bg-white lg:col-span-3">
              <div class="bg-white lg:col-span-3">
        <div class="  p-6 w-full max-w-md rounded-lg">
            <!-- Header with title and dropdown -->
            <div class="bg-[#E5E7EB] mt-10 shadow-lg rounded-lg p-3">
               <div class="flex justify-between items-center mb-4">
  <h2 class="text-xl font-bold  text-black mt-3 mb-6">Top Selling Products</h2>
<button class="flex border items-center text-lg  px-3 py-1 rounded-lg text-sm text-black shadow-sm">
                This Week
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              </div>
  <div class="flex flex-col space-y-4">
    <!-- Product Card 1 -->
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/Tandoori-Chicken-20.jpg') }}" alt="Grilled Chicken" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Grilled Chicken</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$200.00</span>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/orange_cake.jpg') }}" alt="Sunny Citrus Cake" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Sunny Citrus Cake</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$150.00</span>
      </div>
    </div>

    <!-- Product Card 3 -->
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Fiery Shrimp Salad" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Fiery Shrimp Salad</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$120.00</span>
      </div>
    </div>
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/orange_cake.jpg') }}" alt="Fiery Shrimp Salad" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Fiery Shrimp Salad</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$120.00</span>
      </div>
    </div>
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Fiery Shrimp Salad" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Fiery Shrimp Salad</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$120.00</span>
      </div>
    </div>
    <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Fiery Shrimp Salad" class="w-16 h-16 object-cover rounded-lg">
        <span class="text-lg font-semibold">Fiery Shrimp Salad</span>
      </div>
      <div class="flex flex-col items-center space-x-2">
        <span class="text-sm font-medium">Total Sales:</span>
        <span class="text-xl font-bold">$120.00</span>
      </div>
    </div>
    
  </div>
</div>
         
            </div>
          
            <!-- Menu Cards -->
            <div class="space-y-4">
          
              <!-- Card 1 -->

        <div class="bg-white m-4 rounded-xl shadow-2xl p-4">
          <h3 class="font-semibold text-black text-lg mb-4">Order Types</h3>
          <div class="space-y-2">
            <div class="flex justify-between"><span class="text-black">Dine-In</span><span class="text-black">900</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-500 h-2.5 rounded-full" style="width: 45%"></div>
            </div>
            <div class="flex justify-between"><span class="text-black">Takeaway</span><span class="text-black">600</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-400 h-2.5  rounded-full" style="width: 30%"></div>
            </div>
            <div class="flex justify-between"><span class="text-black">Online</span><span class="text-black">500</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-300 h-2.5 rounded-full" style="width: 25%"></div>
            </div>
          </div>
        </div>
              </div>



         <!-- Supplier Comunication -->
<div class="bg-white mt-10 shadow-lg rounded-lg p-6">
  <h2 class="text-2xl font-bold text-black mb-6">Supplier Communication</h2>

  <!-- Recent Communication Stats -->
  <div class="bg-white p-4 rounded-lg shadow-2xl mb-6">
    <h3 class="text-xl font-semibold text-black mb-4">Recent Communication Stats</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
      <div class="bg-blue-100 p-4 rounded-lg text-center">
        <h4 class="text-lg font-semibold text-gray-700">Messages Sent</h4>
        <p class="text-xl font-bold text-blue-600">45</p>
      </div>
      <div class="bg-purple-100 p-4 rounded-lg text-center">
        <h4 class="text-lg font-semibold text-gray-700">Pending Messages</h4>
        <p class="text-xl font-bold text-yellow-600">7</p>
      </div>
      <div class="bg-green-100 p-4 rounded-lg text-center">
        <h4 class="text-lg font-semibold text-gray-700">Messages Responded</h4>
        <p class="text-xl font-bold text-green-600">38</p>
      </div>
    </div>
  </div>

  <!-- Communication with Restaurants -->
<div class="bg-white rounded-lg shadow-lg p-8 mb-6 max-w-3xl mx-auto">
    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Message to Restaurant</h3>
    <form action="#" method="POST" class="space-y-6">
      <!-- Restaurant Selection -->
      <div class="mb-4">
        <label for="restaurant" class="block text-sm font-medium text-gray-700">Select Restaurant</label>
        <select id="restaurant" name="restaurant" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out hover:border-blue-400 focus:outline-none">
          <option value="restaurantA">Restaurant A</option>
          <option value="restaurantB">Restaurant B</option>
          <option value="restaurantC">Restaurant C</option>
        </select>
      </div>

      <!-- Message Input -->
      <div class="mb-4">
        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
        <textarea id="message" name="message" rows="6" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 hover:border-blue-400 focus:outline-none transition duration-300 ease-in-out" placeholder="Enter your message to the restaurant..."></textarea>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-8 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none transition duration-300 ease-in-out transform hover:scale-105">
          Send Message
        </button>
      </div>
    </form>
</div>


  <!-- Helpdesk Section -->
<div class="bg-white rounded-lg shadow-xl p-8 mb-6 max-w-3xl mx-auto">
    <h3 class="text-3xl font-bold text-gray-800 mb-4 ">Need Help? Contact Support </h3>
    <p class="text-sm text-gray-600">Have questions? Our support team is here to help. Reach out anytime during our working hours!</p>
    <br>
    <p class="text-xl text-blue-600 font-semibold">Available 9 AM - 6 PM <i class="fas fa-clock text-yellow-400 text-3xl"></i></p>

    <div class="flex justify-between items-center mt-6">
        <!-- Support Links -->
        <div class="flex space-x-6">
            <!-- Email Support -->
            <a href="mailto:support@yourcompany.com" class="flex items-center space-x-3 bg-blue-600 text-white px-6 py-3 rounded-lg hover:scale-105 hover:bg-blue-700 transform transition duration-300 ease-in-out shadow-lg">
                <i class="fas fa-envelope text-2xl"></i>
                <span class="text-lg font-medium">Email Support</span>
            </a>
            <!-- Call Support -->
            <a href="tel:+1234567890" class="flex items-center space-x-3 bg-gray-600 text-white px-3 py-3 rounded-lg hover:scale-105 hover:bg-green-700 transform transition duration-300 ease-in-out shadow-lg">
                <i class="fas fa-phone-alt text-2xl"></i>
                <span class="text-lg font-medium">Call Support</span>
            </a>
        </div>

   
    </div>
</div>


</div>



      </div>
    </div>
  </div>
@endsection
