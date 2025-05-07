@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto p-4">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-10 gap-6 p-6">
      <!-- Left Column -->
      <div class="lg:col-span-7">
        <div class="bg-black text-white p-6">
            <!-- Top Row -->
            <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
              <!-- Left: Welcome and Search -->
              <div class="flex flex-col lg:flex-row items-center gap-6 w-full lg:w-auto">
                <h2 class="text-xl font-semibold">Welcome, <span class="text-yellow-400">Onti 👋</span></h2>
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
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>
                  <span class="absolute -top-1 -right-1 bg-red-500 text-xs rounded-full w-4 h-4 flex items-center justify-center">1</span>
                </button>
                <div class="flex items-center gap-2">
                  <img src="https://i.pravatar.cc/40?img=5" alt="profile" class="w-10 h-10 rounded-full" />
                  <div class="text-sm">
                    <div class="font-semibold">Nausin Onti</div>
                    <div class="text-gray-400 text-xs">Admin</div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
              <!-- Card 1 -->
              <div class="bg-green-400 text-black rounded-xl p-4 flex justify-between items-center">
                <div>
                  <div class="text-lg font-bold">$11,256</div>
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
              <div class="bg-purple-400 text-black rounded-xl p-4 flex justify-between items-center">
                <div>
                  <div class="text-lg font-bold">245</div>
                  <div class="text-sm">Today's Order</div>
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
              <div class="bg-blue-400 text-black rounded-xl p-4 flex justify-between items-center">
                <div>
                  <div class="text-lg font-bold">$6,556</div>
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
              <div class="bg-red-400 text-black rounded-xl p-4 flex justify-between items-center">
                <div>
                  <div class="text-lg font-bold">$4,227</div>
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
          

   

          <div class="max-w-3xl mx-auto grid lg:grid-cols-2  gap-6">
            <!-- Total Revenue Section -->
            <div class="bg-[#7E7E7E] p-6 rounded-lg shadow-md">
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
            <div class="bg-[#7E7E7E] p-6 rounded-lg shadow-md">
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
                    <p><span class="inline-block w-4 h-4 bg-orange-500 rounded-full mr-2"></span>Seafood 30%</p>
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
                            borderColor: '#F97316',
                            backgroundColor: 'rgba(249, 115, 22, 0.1)',
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
                                color: 'white'
                            },
                            grid: {
                    color: 'white' // Change y-axis grid lines to white
                }
                        },
                        x: {
                ticks: {
                    color: 'white' // Change x-axis labels to white
                },
                grid: {
                    color: 'white' // Change y-axis grid lines to white
                }
            }
                    },
                    plugins: {
                        legend: {
                labels: {
                    color: 'white' // Change legend text color to white
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
                        backgroundColor: ['#F97316', '#1F2937', '#E5E7EB', '#9CA3AF'],
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
            <div class="max-w-4xl mx-auto p-6 bg-black rounded-lg shadow-md mt-6">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-white">Development Team Performance</h1>
                    <div class="flex space-x-3">
                        <button class="text-white hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <button class="text-white hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                        </button>
                        <button class="text-white hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
        
                <!-- Team Member 1 -->
                <div class="flex items-center justify-between p-4 bg-[#7E7E7E] rounded-lg mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('assets/orders/images/developer.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Logan Paul</h2>
                            <p class="text-sm text-white">Backend Developer</p>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-white">82%</div>
                    <div class="text-center hidden lg:block ">
                        <div class="progress-ring ">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-90"></div>
                            <span class="progress-ring__value">90%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Animation Skill</p>
                    </div>
                    <div class="text-center hidden lg:block ">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-74"></div>
                            <span class="progress-ring__value">74%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Problem Solving</p>
                    </div>
                    <div class="text-center hidden lg:block ">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-86"></div>
                            <span class="progress-ring__value">86%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Work Consistency</p>
                    </div>
                    <div class="text-center hidden lg:block ">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-78"></div>
                            <span class="progress-ring__value">78%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Team Work</p>
                    </div>
                </div>
        
                <!-- Team Member 2 -->
                <div class="flex items-center justify-between p-4 bg-[#7E7E7E] rounded-lg mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('assets/orders/images/developer.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Logan Paul</h2>
                            <p class="text-sm text-white">Backend Developer</p>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-white">82%</div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-90"></div>
                            <span class="progress-ring__value">90%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Animation Skill</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-74"></div>
                            <span class="progress-ring__value">74%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Problem Solving</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-86"></div>
                            <span class="progress-ring__value">86%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Work Consistency</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-78"></div>
                            <span class="progress-ring__value">78%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Team Work</p>
                    </div>
                </div>
        
                <!-- Team Member 3 -->
                <div class="flex items-center justify-between p-4 bg-[#7E7E7E] rounded-lg mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('assets/orders/images/developer.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Logan Paul</h2>
                            <p class="text-sm text-white">Backend Developer</p>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-white">82%</div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-90"></div>
                            <span class="progress-ring__value">90%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Animation Skill</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-74"></div>
                            <span class="progress-ring__value">74%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Problem Solving</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-86"></div>
                            <span class="progress-ring__value">86%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Work Consistency</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <div class="progress-ring">
                            <div class="progress-ring__background"></div>
                            <div class="progress-ring__fill progress-78"></div>
                            <span class="progress-ring__value">78%</span>
                        </div>
                        <p class="text-sm text-white mt-2">Team Work</p>
                    </div>
                </div>
            </div>
        
            <div class="mr-4 grid lg:grid-cols-[30%_70%] gap-4">
                <!-- Left Portion: Cards (40%) -->
                <div class="grid gap-3 grid-cols-1">
                    <!-- Card 1 -->
                    <div class="bg-purple-400 rounded-xl h-20 p-4 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">1520</h3>
                            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">Orders received</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/cash-on-delivery.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 2 -->
                    <div class="bg-red-400 rounded-xl h-20 p-4 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">1428</h3>
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">Orders served</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/taco-truck.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 3 -->
                    <div class="bg-green-400 rounded-xl p-4 h-20 flex items-center justify-between shadow">
                        <div >
                            <h3 class="text-xl font-bold">30</h3>
                            <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded">Pending orders</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/clock.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                
                    <!-- Card 4 -->
                    <div class="bg-[#FF6200] rounded-xl p-4 h-20 flex items-center justify-between shadow">
                        <div>
                            <h3 class="text-xl font-bold">$105</h3>
                            <span class="bg-pink-500 text-white text-xs px-2 py-1 rounded">First Time Buyer</span>
                        </div>
                        <img src="{{ asset('assets/orders/images/eating.png') }}" class="w-12 h-12" alt="icon" />
                    </div>
                </div>
        
                <!-- R-Monthly Sales Performence -->
                <div class="flex flex-col gap-4">
                    <div class="bg-[#7E7E7E] p-6 rounded-lg shadow-md">
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
                                backgroundColor: '#FF6200',
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
                                    color: '#ffffff',
                                },
                                grid: {
                                    color: '#ffffff',
                                },
                            },
                            x: {
                                ticks: {
                                    color: '#FFFFFF',
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
                                    color: '#FFFFFF',
                                    padding: 20,
                                },
                            },
                        },
                    }
                });
            </script>
        
        <div class="bg-[#7E7E7E] mt-10 shadow-lg rounded-lg p-6">
<h2 class="text-2xl font-bold text-black-300 mb-6">Recent Online Orders</h2>

    <table class="min-w-full table-auto">
      <thead >
        <tr class="bg-red-400 ">
          <th class=" px-4 py-2 text-left text-sm  text-white ">Order Id</th>
          <th class="  px-4 py-2 text-left text-sm text-white">Customer</th>
          <th class="px-4 py-2 text-left text-sm text-white">Food</th>
          <th class=" px-4 py-2 text-left text-sm text-white">Phone</th>
          <th class="  px-4 py-2 text-left text-sm text-white">Price</th>
          <th class=" px-4 py-2 text-left text-sm text-white">Status</th>
          <th class="px-4 py-2 text-left text-sm text-white">Actions</th>
        </tr>
      </thead>
      <tbody >
        <!-- First Row -->
        <tr class="border-b">
          <td class="px-4 py-2 text-white text-sm">#25896</td>
          <td class="px-4 py-2 text-white text-sm">Jefferson Clay</td>
          <td class="px-4 py-2 text-sm flex items-center space-x-2">
            <img src="{{ asset('assets/orders/images/orange_cake.jpg') }}" alt="Food Image" class="w-10 h-10 object-cover rounded-full">
            <span class="text-white">Chicken Burger</span>
          </td>
          <td class="px-4 py-2 text-white text-sm">+99 256 896 8855</td>
          <td class="px-4 py-2 text-white text-sm">$11.00</td>
          <td class="px-4 py-2 text-base text-green-500">Accepted</td>
          <td class="px-4 py-2 text-sm">
            <button class="bg-green-500 text-white px-6 py-2 mb-2 rounded-lg mr-2">Accept</button>
            <button class="bg-red-500 text-white px-6 py-2 rounded-lg">Decline</button>
          </td>
        </tr>

        <!-- Second Row -->
        <tr class="border-b">
          <td class="px-4 py-2 text-white text-sm">#27856</td>
          <td class="px-4 py-2 text-white text-sm">Langston Lee</td>
          <td class="px-4 py-2 text-sm flex items-center space-x-2">
            <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Food Image" class="w-10 h-10 object-cover rounded-full">
            <span class="text-white">Pizza Chicken Bake</span>
          </td>
          <td class="px-4 py-2 text-white text-sm">+99 963 852 7744</td>
          <td class="px-4 py-2 text-white text-sm">$50.00</td>
          <td class="px-4 py-2 text-base text-yellow-500">Pending</td>
          <td class="px-4 py-2 text-sm">
            <button class="bg-green-500 text-white px-6 mb-2 py-2 rounded-lg mr-2">Accept</button>
            <button class="bg-red-500 text-white px-6 py-2 rounded-lg">Decline</button>
          </td>
        </tr>

        <!-- Third Row -->
        <tr class="border-b">
          <td class="px-4 py-2 text-white text-sm">#23698</td>
          <td class="px-4 py-2 text-white text-sm">Bronson Joe</td>
          <td class="px-4 py-2 text-sm flex items-center space-x-2">
            <img src="{{ asset('assets/orders/images/Tandoori-Chicken-20.jpg') }}" alt="Food Image" class="w-10 h-10 object-cover rounded-full">
            <span class="text-white">Eco Chowmen</span>
          </td>
          <td class="px-4 py-2 text-white text-sm">+99 125 965 8544</td>
          <td class="px-4 py-2 text-white text-sm">$68.00</td>
          <td class="px-4 py-2 text-base text-yellow-500">Pending</td>
          <td class="px-4 py-2 text-sm">
            <button class="bg-green-500 text-white mb-2 px-6 py-2 rounded-lg mr-2">Accept</button>
            <button class="bg-red-500 text-white px-6  py-2 rounded-lg">Decline</button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="px-4 py-2 text-white text-sm">#23698</td>
          <td class="px-4 py-2 text-white text-sm">Bronson Joe</td>
          <td class="px-4 py-2 text-sm flex items-center space-x-2">
            <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Food Image" class="w-10 h-10 object-cover rounded-full">
            <span class="text-white">Eco Chowmen</span>
          </td>
          <td class="px-4 py-2 text-white text-sm">+99 125 965 8544</td>
          <td class="px-4 py-2 text-white text-sm">$68.00</td>
          <td class="px-4 py-2 text-base text-yellow-500">Pending</td>
          <td class="px-4 py-2 text-sm">
            <button class="bg-green-500 text-white mb-2 px-6 py-2 rounded-lg mr-2">Accept</button>
            <button class="bg-red-500 text-white px-6  py-2 rounded-lg">Decline</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
        
      </div>

      <!-- Right Column -->
      <div class="bg-[#7E7E7E] lg:col-span-3">
        <div class="  p-6 w-full max-w-md rounded-lg">
            <!-- Header with title and dropdown -->
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-lg font-semibold">Trending Menus</h2>
              <button class="flex items-center bg-white px-3 py-1 rounded-lg text-sm text-gray-700 shadow-sm">
                This Week
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
            </div>
          
            <!-- Menu Cards -->
            <div class="space-y-4">
          
              <!-- Card 1 -->
              <div class="bg-black rounded-xl p-4 shadow-sm flex flex-col">
                <img src="{{ asset('assets/orders/images/Tandoori-Chicken-20.jpg') }}" alt="Grilled Chicken" class="rounded-lg mb-3 object-cover w-full h-40" />
                <div class="flex justify-between items-start">
                  <div>
                    <h3 class="font-semibold text-white">Grilled Chicken Delight</h3>
                    <p class="text-sm text-white">Chicken</p>
                    <div class="flex items-center text-sm text-gray-600 mt-1 gap-4">
                      <span class="flex items-center text-white gap-1">
                        ⭐ 4.9
                      </span>
                      <span class="text-white">350</span>
                    </div>
                  </div>
                  <div class="text-orange-500 font-semibold text-sm">$18.00</div>
                </div>
              </div>
          
              <!-- Card 2 -->
              <div class="bg-black rounded-xl p-4 shadow-sm flex flex-col">
                <img src="{{ asset('assets/orders/images/orange_cake.jpg') }}" alt="Citrus Cake" class="rounded-lg mb-3 object-cover w-full h-40" />
                <div class="flex justify-between items-start">
                  <div>
                    <h3 class="font-semibold text-white">Sunny Citrus Cake</h3>
                    <p class="text-sm text-gray-500 text-white">Dessert</p>
                    <div class="flex items-center text-sm text-gray-600 mt-1 gap-4">
                      <span class="flex items-center text-white gap-1">
                        ⭐ 4.8
                      </span>
                      <span class="text-white">400</span>
                    </div>
                  </div>
                  <div class="text-orange-500 font-semibold text-sm">$8.50</div>
                </div>
              </div>
          
              <!-- Card 3 -->
              <div class="bg-black rounded-xl p-4 shadow-sm flex flex-col">
                <img src="{{ asset('assets/orders/images/shrimp-avocado-tomato-salad.webp') }}" alt="Shrimp Salad" class="rounded-lg mb-3 object-cover w-full h-40" />
                <div class="flex justify-between items-start">
                  <div>
                    <h3 class="font-semibold text-white">Fiery Shrimp Salad</h3>
                    <p class="text-sm text-gray-500 text-white">Seafood</p>
                    <div class="flex items-center text-sm text-gray-600 mt-1 gap-4">
                      <span class="flex items-center gap-1 text-white">
                        ⭐ 4.7
                      </span>
                      <span class="text-white">270</span>
                    </div>
                  </div>
                  <div class="text-orange-500 font-semibold text-sm">$12.00</div>
                </div>
              </div>
          
            </div>
          </div>
          

        <div class="bg-black m-4 rounded-xl  p-4 shadow">
          <h3 class="font-semibold text-white text-lg mb-4">Order Types</h3>
          <div class="space-y-2">
            <div class="flex justify-between"><span class="text-white">Dine-In</span><span class="text-white">900</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-500 h-2.5 rounded-full" style="width: 45%"></div>
            </div>
            <div class="flex justify-between"><span class="text-white">Takeaway</span><span class="text-white">600</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-400 h-2.5  rounded-full" style="width: 30%"></div>
            </div>
            <div class="flex justify-between"><span class="text-white">Online</span><span class="text-white">500</span></div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="bg-orange-300 h-2.5 rounded-full" style="width: 25%"></div>
            </div>
          </div>
        </div>

        <!-- Customer Review -->
         <!-- Container for all cards -->
  <div class="bg-[#7E7E7E] w-full max-w-4xl p-6 rounded-lg shadow-lg space-y-6">
    <!-- Title -->


    <!-- First Card -->
    <div class="bg-black w-full p-6 rounded-lg shadow-lg">
      <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-2">
          <span class="text-3xl text-red-500">“</span>
          <h2 class="text-xl font-semibold text-white">Customer Review</h2>
        </div>
        <div class="text-red-500 font-bold text-lg">
          5 <span class="text-white">/ 5</span>
        </div>
      </div>

      <p class="text-white text-base mb-4 ">Very tasty food. Staffs are very much friendly and well behaved. Nice ambiance also location is in city center.</p>

      <div class="flex items-center">
        <div class="w-12 h-12 rounded-full overflow-hidden">
          <img src="{{ asset('assets/orders/images/man1.jpg') }}" alt="Customer Photo" class="w-full h-full object-cover">
        </div>
        <div class="ml-4">
          <h3 class="font-semibold text-lg text-white">Afsar Ali</h3>
        </div>
      </div>

      <div class="mt-4 flex items-center space-x-2">
        <div class="flex items-center text-yellow-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" stroke="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M9.049 2.927a1 1 0 011.902 0l1.387 3.062 3.383.495a1 1 0 01.553 1.705l-2.445 2.389.577 3.373a1 1 0 01-1.452 1.053l-3.024-1.592-3.025 1.592a1 1 0 01-1.452-1.053l.577-3.373-2.445-2.389a1 1 0 01.553-1.705l3.383-.495L9.049 2.927z" clip-rule="evenodd" />
          </svg>
          <span class="ml-1">5 Stars</span>
        </div>
      </div>
    </div>

    <!-- Second Card -->
    <div class="bg-black w-full p-6 rounded-lg shadow-lg">
      <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-2">
          <span class="text-3xl text-red-500">“</span>
          <h2 class="text-xl font-semibold text-white">Customer Review</h2>
        </div>
        <div class="text-red-500 font-bold text-lg">
          5 <span class="text-white">/ 5</span>
        </div>
      </div>

      <p class="text-white text-base mb-4">Amazing experience! The food was delicious, and the service was top-notch. Definitely recommend.</p>

      <div class="flex items-center">
        <div class="w-12 h-12 rounded-full overflow-hidden">
          <img src="{{ asset('assets/orders/images/women.jpg') }}" alt="Customer Photo" class="w-full h-full object-cover">
        </div>
        <div class="ml-4">
          <h3 class="font-semibold text-lg text-white">Nausin Onti</h3>
        </div>
      </div>

      <div class="mt-4 flex items-center space-x-2">
        <div class="flex items-center text-yellow-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" stroke="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M9.049 2.927a1 1 0 011.902 0l1.387 3.062 3.383.495a1 1 0 01.553 1.705l-2.445 2.389.577 3.373a1 1 0 01-1.452 1.053l-3.024-1.592-3.025 1.592a1 1 0 01-1.452-1.053l.577-3.373-2.445-2.389a1 1 0 01.553-1.705l3.383-.495L9.049 2.927z" clip-rule="evenodd" />
          </svg>
          <span class="ml-1">5 Stars</span>
        </div>
      </div>
    </div>

    <!-- Third Card -->
    <div class="bg-black w-full p-6 rounded-lg shadow-lg">
      <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-2">
          <span class="text-3xl text-red-500">“</span>
          <h2 class="text-xl font-semibold text-white">Customer Review</h2>
        </div>
        <div class="text-red-500 font-bold text-lg">
          5 <span class="text-white">/ 5</span>
        </div>
      </div>

      <p class="text-white text-base mb-4">Highly recommend this place! Great atmosphere and the food was absolutely delicious!</p>

      <div class="flex items-center">
        <div class="w-12 h-12 rounded-full overflow-hidden">
          <img src="{{ asset('assets/orders/images/man2.jpg') }}" alt="Customer Photo" class="w-full h-full object-cover">
        </div>
        <div class="ml-4">
          <h3 class="font-semibold  text-lg text-white">Sarah Khan</h3>
        </div>
      </div>

      <div class="mt-4 flex items-center space-x-2">
        <div class="flex items-center text-yellow-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" stroke="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M9.049 2.927a1 1 0 011.902 0l1.387 3.062 3.383.495a1 1 0 01.553 1.705l-2.445 2.389.577 3.373a1 1 0 01-1.452 1.053l-3.024-1.592-3.025 1.592a1 1 0 01-1.452-1.053l.577-3.373-2.445-2.389a1 1 0 01.553-1.705l3.383-.495L9.049 2.927z" clip-rule="evenodd" />
          </svg>
          <span class="ml-1">5 Stars</span>
        </div>
      </div>
    </div>

  </div>

      </div>
    </div>
  </div>
@endsection
