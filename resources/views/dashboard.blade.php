<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- links css -->
<link rel="stylesheet" href="{{ asset('styles/orders.css') }}">
    <!-- link font awsome -->
    <script src="https://kit.fontawesome.com/ba715376e0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>OrdersPlus</title>
</head>
<body class="bg-gradient-to-r from-indigo-700 to-purple-800">
  <div class="max-w-screen-xl mx-auto p-6 space-y-12">

    <!-- Monthly Stats Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- No. Buyers Gauge -->
        <div class="bg-gradient-to-r from-green-500 to-blue-500 rounded-xl shadow-xl p-6 text-white">
            <h3 class="text-2xl font-semibold mb-4">No. Buyers</h3>
            
            <!-- Monthly Tabs (Previous and Current Month) -->
            <div class="flex justify-between items-center mb-4">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Previous Month</button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">Current Month</button>
            </div>
            
            <!-- Gauge Display (for No. Buyers) -->
            <div class="flex justify-center items-center mb-6">
                <div class="w-24 h-24 bg-white rounded-full flex justify-center items-center">
                    <span class="text-2xl font-semibold text-green-600">299</span>
                </div>
            </div>

            <!-- Buyers Type -->
            <div class="text-sm flex justify-between text-white">
                <span><span class="bg-green-600 p-2 rounded-full mr-2">●</span> New Buyers</span>
                <span><span class="bg-blue-600 p-2 rounded-full mr-2">●</span> Regular Buyers</span>
            </div>
        </div>

        <!-- Sales Revenue Gauge -->
        <div class="bg-gradient-to-r from-yellow-500 to-red-500 rounded-xl shadow-xl p-6 text-white">
            <h3 class="text-2xl font-semibold mb-4">Sales Revenue</h3>
            
            <!-- Monthly Tabs (Previous and Current Month) -->
            <div class="flex justify-between items-center mb-4">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Previous Month</button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">Current Month</button>
            </div>
            
            <!-- Gauge Display (for Sales Revenue) -->
            <div class="flex justify-center items-center mb-6">
                <div class="w-30 h-32 bg-white rounded-full flex justify-center items-center">
                    <span class="text-2xl font-semibold text-yellow-600">$107,968.00</span>
                </div>
            </div>

            <!-- Sales Revenue Type -->
            <div class="text-sm flex justify-between text-white">
                <span><span class="bg-yellow-600 p-2 rounded-full mr-2">●</span> Sales</span>
                <span><span class="bg-red-600 p-2 rounded-full mr-2">●</span> Returns</span>
            </div>
        </div>

    </div>

    <!-- Month Selector (May) -->
    <div class="flex justify-center items-center space-x-6">
        <button class="bg-purple-700 text-white px-6 py-2 rounded-lg hover:bg-purple-800">Previous</button>
        <span class="text-3xl font-semibold text-white">May</span>
        <button class="bg-purple-700 text-white px-6 py-2 rounded-lg hover:bg-purple-800">Next</button>
    </div>

</div>

   



<div class="stats-section grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
   <!-- New Buyers Comparison -->
   <div class="stat-card   bg-white  shadow-lg rounded-xl p-5">
     <h3 class="text-lg font-semibold pt-16 mb-3 text-center text-gray-700">New Buyers Comparison</h3>
     <canvas  class="pt-10" id="buyersLineChart" height="250"></canvas>
   </div>
 
   <!-- Returned Items -->
   <div class="stat-card  bg-gradient-to-r from-yellow-500 to-red-500  shadow-lg rounded-xl p-5 text-center">
     <h3 class="text-lg font-semibold mb-3 text-2xl text-gray-700">Returned Items</h3>
     <canvas id="returnedPieChart" height="100"></canvas>
     <p class="text-2xl font-bold mt-4">116</p>
   </div>
 
   <!-- Sales Figure Comparison -->
   <div class="stat-card bg-white shadow-lg rounded-xl p-5">
     <h3 class="text-lg font-semibold mb-3 text-center pt-16 text-gray-700">Sales Figure Comparison</h3>
     <canvas class="pt-10" id="salesBarChart" height="250"></canvas>
     <div class=" bg-white  text-center mt-4 p-2 rounded-lg text-blue-800 font-semibold">Sydney</div>
   </div>
 </div>
 
 <script>
   const buyersLineChart = new Chart(document.getElementById("buyersLineChart"), {
     type: "line",
     data: {
       labels: ["Jul", "Aug", "Sep", "Oct"],
       datasets: [
         {
           label: "New Buyers",
           data: [60, 70, 65, 80],
           borderColor: "#0e51a7",
           fill: false
         },
         {
           label: "Returning Buyers",
           data: [40, 50, 48, 55],
           borderColor: "#964B00",
           fill: false
         }
       ]
     }
   });
 
   const returnedPieChart = new Chart(document.getElementById("returnedPieChart"), {
     type: "doughnut",
     data: {
       labels: ["September", "October"],
       datasets: [{
         data: [30, 86],
         backgroundColor: ["#0e51a7", "#964B00"]
       }]
     }
   });
 
   const salesBarChart = new Chart(document.getElementById("salesBarChart"), {
     type: "bar",
     data: {
       labels: ["Jul", "Oct"],
       datasets: [{
         label: "Sales",
         data: [95000, 167000],
         backgroundColor: ["#964B00", "#0e51a7"]
       }]
     }
   });
 
   
 </script>

    <div class="dashboard">

        <div class="card orange">
          <i class="fas fa-box icon"></i>
          <div class="card-title">Total Received Orders</div>
          <div class="card-value">189</div>
        </div>
    
        <div class="card blue">
          <i class="fas fa-truck icon"></i>
          <div class="card-title">Total Delivered Orders</div>
          <div class="card-value">183</div>
        </div>
    
        <div class="card green">
          <i class="fas fa-dollar-sign icon"></i>
          <div class="card-title">Sales Revenue</div>
          <div class="card-value">$391,026</div>
        </div>
    
        <div class="card yellow">
          <i class="fas fa-users icon"></i>
          <div class="card-title">Active Buyers</div>
          <div class="card-value">426</div>
        </div>
    
        <div class="card pink">
          <i class="fas fa-tags icon"></i>
          <div class="card-title">Discount Sales</div>
          <div class="card-value">$45,256</div>
        </div>
    
        <div class="card teal">
          <i class="fas fa-flag icon"></i>
          <div class="card-title">First-time Buyers</div>
          <div class="card-value">13</div>
        </div>
    
        <div class="card red">
          <i class="fas fa-user-slash icon"></i>
          <div class="card-title">Suspended Account</div>
          <div class="card-value">9</div>
        </div>
    
        <div class="card purple">
          <i class="fas fa-exclamation-triangle icon"></i>
          <div class="card-title">Issues & Return</div>
          <div class="card-value">4</div>
        </div>
    
      </div>
       <!-- Category Sales Overview and Monthly Sales Comparison Section --> 
       <div class="max-w-screen-xl mx-auto p-6 space-y-12">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
    
            <!-- Category Sales Overview (Donut Chart and Week Selector) -->
            <div class="bg-gradient-to-r from-purple-700 via-blue-800 to-purple-700 rounded-xl shadow-xl p-6">
                <h3 class="text-2xl font-semibold text-white mb-6">Category Sales Overview</h3>
    
                <div class="flex justify-between items-center mb-6">
                    <div class="text-white">Week 2</div>
                    <div class="flex space-x-4">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Previous</button>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Next</button>
                    </div>
                </div>
    
                <!-- Donut Chart -->
                <div class="w-full h-60">
                    <canvas id="categorySalesChart"></canvas>
                </div>
    
                <div class="mt-6 flex flex-col space-y-2">
                    <div class="text-white text-sm flex justify-between">
                        <span>Restaurants</span>
                        <span class="text-purple-400">40%</span>
                    </div>
                    <div class="text-white text-sm flex justify-between">
                        <span>Pub & Bars</span>
                        <span class="text-blue-400">30%</span>
                    </div>
                    <div class="text-white text-sm flex justify-between">
                        <span>Takeaways</span>
                        <span class="text-yellow-400">20%</span>
                    </div>
                    <div class="text-white text-sm flex justify-between">
                        <span>Catering</span>
                        <span class="text-green-400">10%</span>
                    </div>
                </div>
            </div>
    
            <!-- Monthly Sales Comparison (Bar Chart) -->
            <div class="bg-gradient-to-r lg:grid   from-green-600 to-blue-700 rounded-xl shadow-xl p-6">
                <h3 class="text-2xl font-semibold text-white mb-6">Monthly Sales Comparison</h3>
    
                <!-- Bar Chart -->
                <div class="w-full">
                    <canvas id="monthlySalesChart"></canvas>
                </div>
    
                <div class="flex justify-between mt-6 text-white text-sm">
                    <span class="text-blue-400 text-lg">Previous Month</span>
                    <span class="text-orange-400 text-lg">Current Month</span>
                </div>
            </div>
        </div>
    
    </div>
    
    <!-- Chart.js Initialization -->
    <script>
        // Category Sales Overview Donut Chart
        const categorySalesChart = new Chart(document.getElementById("categorySalesChart"), {
            type: 'doughnut',
            data: {
                labels: ['Restaurants', 'Pubs & Bars', 'Takeaways', 'Catering'],
                datasets: [{
                    data: [40, 30, 20, 10],
                    backgroundColor: ['#9333ea', '#3b82f6', '#facc15', '#10b981'],
                    hoverBackgroundColor: ['#7c3aed', '#2563eb', '#eab308', '#4ade80']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    }
                }
            }
        });
    
        // Monthly Sales Comparison Bar Chart
        const monthlySalesChart = new Chart(document.getElementById("monthlySalesChart"), {
    type: 'bar',
    data: {
        labels: ['Restaurants', 'Bar & Pub', 'Cafe', 'Catering', 'Takeaway', 'Food Retails'],
        datasets: [
            {
                label: 'Previous Month',
                data: [150000, 120000, 90000, 80000, 75000, 70000],
                backgroundColor: '#3b82f6',
                borderRadius: 8,
            },
            {
                label: 'Current Month',
                data: [180000, 140000, 110000, 130000, 85000, 95000],
                backgroundColor: '#f97316',
                borderRadius: 8,
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true,
                ticks: {
                    color: 'white',  // Setting x-axis label text color to white
                }
            },
            y: {
                ticks: {
                    color: 'white',  // Setting y-axis label text color to white
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    color: 'white', // Set legend text color to white
                }
            },
            tooltip: {
                bodyColor: 'white',  // Set tooltip text color to white
            }
        }
    }
});


    </script>
    
    <!-- Business Development Team Section -->
<div class="max-w-screen-xl mx-auto p-6">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Team Section -->
      <div class="bg-[#0e51a7] rounded-xl shadow-xl p-6">
          <h3 class="text-2xl font-semibold text-white mb-6 text-center">Business Development Team</h3>
          <div class="flex justify-center items-center space-x-6">
              <div class="team-member-card">
              <img src="{{ asset('images/example.jpg') }}"  alt="Adam Gibson" class="team-member-img">
                 
                  <p class="team-member-name">Adam Gibson</p>
              </div>
              <div class="team-member-card">
              <img src="{{ asset('images/example.jpg') }}"  alt="Adam Gibson" class="team-member-img">
                  <p class="team-member-name">Angela Ross</p>
              </div>
              <div class="team-member-card">
                  <img src="images/developer.jpg" alt="Casey Alxer" class="team-member-img">
                  <p class="team-member-name">Casey Alxer</p>
              </div>
          </div>
          <div class="flex justify-center items-center space-x-6 mt-6">
              <div class="team-member-card">
              <img src="{{ asset('images/example.jpg') }}"  alt="Adam Gibson" class="team-member-img">
                  <p class="team-member-name">Damon Walker</p>
              </div>
              <div class="team-member-card">
              <img src="{{ asset('images/example.jpg') }}"  alt="Adam Gibson" class="team-member-img">
                  <p class="team-member-name">Kelly Colmen</p>
              </div>
          </div>
      </div>

      <!-- Sales Charts Section -->
      <div class="bg-white p-6 text-white">
          <h3 class="text-2xl font-semibold mb-6 text-center">Sales Person Category Breakdown</h3>
          <canvas id="categoryBreakdownChart" height="250"></canvas>
      </div>
  </div>


</div>

<!-- Updated CSS -->


<!-- JavaScript for Chart.js -->
<script>
  // Category Breakdown Chart
  const categoryBreakdownChart = new Chart(document.getElementById('categoryBreakdownChart'), {
      type: 'bar',
      data: {
          labels: ['Adam Gibson', 'Angela Ross', 'Casey Alxer', 'Damon Walker', 'Kelly Colmen'],
          datasets: [
              {
                  label: 'Restaurant',
                  data: [120000, 130000, 100000, 110000, 95000],
                  backgroundColor: '#0e51a7',
              },
              {
                  label: 'Bar & Pub',
                  data: [80000, 90000, 85000, 95000, 78000],
                  backgroundColor: '#f97316',
              },
              {
                  label: 'Cafe',
                  data: [70000, 60000, 75000, 72000, 68000],
                  backgroundColor: '#32CD32',
              },
              {
                  label: 'Catering',
                  data: [90000, 95000, 88000, 91000, 96000],
                  backgroundColor: '#10b981',
              },
              {
                  label: 'Takeaway',
                  data: [100000, 105000, 90000, 115000, 98000],
                  backgroundColor: '#facc15',
              }
          ]
      },
      options: {
          responsive: true,
          scales: {
              x: { beginAtZero: true },
              y: { beginAtZero: true }
          }
      }
  });

  // Weekly Sales Comparison Chart
  const weeklySalesComparisonChart = new Chart(document.getElementById('weeklySalesComparisonChart'), {
      type: 'line',
      data: {
          labels: ['Week 1 Oct', 'Week 2 Oct', 'Week 3 Oct', 'Week 4 Oct'],
          datasets: [
              {
                  label: 'Adam Gibson',
                  data: [120000, 130000, 110000, 115000],
                  borderColor: '#0e51a7',
                  fill: false
              },
              {
                  label: 'Angela Ross',
                  data: [110000, 120000, 105000, 100000],
                  borderColor: '#f97316',
                  fill: false
              },
              {
                  label: 'Casey Alxer',
                  data: [95000, 100000, 98000, 103000],
                  borderColor: '#32CD32',
                  fill: false
              },
              {
                  label: 'Damon Walker',
                  data: [105000, 100000, 110000, 115000],
                  borderColor: '#facc15',
                  fill: false
              },
              {
                  label: 'Kelly Colmen',
                  data: [115000, 125000, 120000, 130000],
                  borderColor: '#10b981',
                  fill: false
              }
          ]
      },
      options: {
          responsive: true,
          scales: {
              x: { beginAtZero: true },
              y: { beginAtZero: true }
          }
      }
  });

  // Product & Buyer Category Sales Chart
  const productBuyerSalesChart = new Chart(document.getElementById('productBuyerSalesChart'), {
      type: 'pie',
      data: {
          labels: ['Restaurant', 'Bar & Pub', 'Cafe', 'Catering', 'Takeaway'],
          datasets: [{
              data: [40, 30, 10, 10, 10],
              backgroundColor: ['#0e51a7', '#f97316', '#32CD32', '#10b981', '#facc15'],
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: {
                  position: 'bottom'
              }
          }
      }
  });
</script>


       <!-- <div class="development_sales">
        <div class="team-section">
          <div>
            <h2>Business Development Team</h2>
        
   
            <div class="member-grid">
              <div class="member-card">
               
            </div>
              <div class="member-card"> <img class="developer_image" src="./images/developer.jpg" alt="">
                <p class="developer_des">Adam Gibson</p> 
              </div>
              <div class="member-card"> <img class="developer_image" src="./images/developer.jpg" alt="">
                <p class="developer_des">Adam Gibson</p> </div>
            </div>
          
            <input type="checkbox" id="toggle">
            <div class="member-grid more-members">
              <div class="member-card">👤 Damon Walker</div>
              <div class="member-card">👤 Kelly Colmen</div>
              <div class="member-card">👤 Emma Stone</div>
              <div class="member-card">👤 Jon Mark</div>
              <div class="member-card">👤 Ryan Smith</div>
            </div>
          
       
            <label for="toggle" class="toggle-label">View All</label>
          </div>

        </div>
        <div class="onti">
<h2>onti</h2>
        </div>
       </div>
       -->

      
    

 
      
          <!-- Dashboard Section -->
          <div class="max-w-screen-xl mx-auto p-6 space-y-12">

            <!-- Top Selling Products and Sales Breakdown (Two Column Layout) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Sales Breakdown Chart -->
                <div class="bg-white rounded-xl shadow-xl p-6">
                    <h3 class="text-2xl font-semibold text-gray-700">Sales Breakdown by Product & Buyer Category</h3>
                    <canvas id="salesBreakdownChart" class="mt-6"></canvas>
                </div>
                <div class="bg-gradient-to-r from-purple-800 via-indigo-700 to-blue-700 rounded-xl shadow-xl p-6 text-white">
                  <h3 class="text-2xl text-center pb-4 font-semibold text-gray-700">Top Selling Products</h3>
                    <div class=" justify-between items-center mb-6">
                        
                        <div class="lg:flex gap:2 space-x-4">
                          <div class="inline-flex  gap-2">
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg focus:outline-none active:bg-purple-700">Current Month</button>
                        <button class="bg-gray-300 text-gray-800 px-4 py-2 rounded-lg focus:outline-none hover:bg-gray-400">Previous Month</button>
                    </div>
                            <!-- Search Input -->
                            <div class="relative">
                                <input type="text" placeholder="Search..." class="w-48 px-4 py-2 rounded-full text-gray-800 focus:outline-none" />
                                <div class="absolute top-2 right-2 text-gray-500">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- apple table -->
                    <div class="overflow-hidden shadow rounded-lg ">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gray-600">
                                <tr>
                                    <th class="py-3 px-6 text-left text-gray-100">Products</th>
                                    <th class="py-3 px-6 text-left text-gray-100">Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-600 transition-all duration-300">
                                    <td class="py-4 px-6 text-gray-100">Apple</td>
                                    <td class="py-4 px-6 text-gray-100">$85,100.00</td>
                                </tr>
                                <tr class="hover:bg-gray-600 transition-all duration-300">
                                    <td class="py-4 px-6 text-gray-100">Banana</td>
                                    <td class="py-4 px-6 text-gray-100">$30,500.00</td>
                                </tr>
                                <tr class="hover:bg-gray-600 transition-all duration-300">
                                    <td class="py-4 px-6 text-gray-100">Chicken Wings</td>
                                    <td class="py-4 px-6 text-gray-100">$25,010.00</td>
                                </tr>
                                <tr class="hover:bg-gray-600 transition-all duration-300">
                                    <td class="py-4 px-6 text-gray-100">Rib Eye</td>
                                    <td class="py-4 px-6 text-gray-100">$22,409.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
                </div>
            </div>
        </div>
        
        <!-- Buyer Performance Card -->
        <div class="max-w-screen-xl mx-auto p-6 space-y-12">

          <!-- Buyer Performance Section -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      
              <!-- Buyer Performance Table -->
              <div class="bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-800 rounded-xl shadow-xl p-6 text-white">
                  <h3 class="text-2xl font-semibold mb-6">Buyer Performance</h3>
      
                  <!-- Month Selector (October) -->
                  <div class="lg:flex gap:2  justify-between items-center mb-4">
                      <div class="flex items-center">
                          <span class="text-lg font-semibold">October</span>
                          <button class="ml-4 text-blue-300 hover:text-white">Change Month</button>
                      </div>
                      <input type="text" placeholder="Search" class="px-4 py-2 rounded-lg bg-gray-700 text-white placeholder-gray-300 focus:outline-none" />
                  </div>
      
                  <!-- Buyer Accounts Table -->
                  <div class="overflow-auto">
                      <table class="min-w-full text-sm">
                          <thead class="bg-gray-600">
                              <tr>
                                  <th class="py-3 px-6 text-left">Buyer Accounts</th>
                                  <th class="py-3 px-6 text-left">Sales</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr class="hover:bg-gray-700 transition-all duration-300">
                                  <td class="py-4 px-6">Mixing Pot</td>
                                  <td class="py-4 px-6">$51,101.00</td>
                              </tr>
                              <tr class="hover:bg-gray-700 transition-all duration-300">
                                  <td class="py-4 px-6">Americano</td>
                                  <td class="py-4 px-6">$30,500.00</td>
                              </tr>
                              <tr class="hover:bg-gray-700 transition-all duration-300">
                                  <td class="py-4 px-6">The Steak Club House</td>
                                  <td class="py-4 px-6">$25,010.00</td>
                              </tr>
                              <tr class="hover:bg-gray-700 transition-all duration-300">
                                  <td class="py-4 px-6">Aria Sydney</td>
                                  <td class="py-4 px-6">$20,499.00</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
      
              <!-- Buyer Performance Monthly View (Bar Chart) -->
              <div class="bg-gradient-to-r from-green-700 via-teal-700 to-blue-700 rounded-xl shadow-xl p-6 text-white">
                  <h3 class="text-2xl font-semibold mb-6">Buyer Performance Monthly View</h3>
      
                  <!-- Month Tabs (July, August, September, October) -->
                  <div class="lg:flex gap:1  space-x-4 mb-6">
                      <button class="text-lg bg-indigo-600 hover:bg-indigo-500 px-5 py-2 rounded-lg">July</button>
                      <button class="text-lg bg-indigo-600 hover:bg-indigo-500 px-5 py-2 rounded-lg">August</button>
                      <button class="text-lg bg-indigo-600 hover:bg-indigo-500 px-5 py-2 rounded-lg">September</button>
                      <button class="text-lg bg-indigo-600 hover:bg-indigo-500 px-5 py-2 rounded-lg">October</button>
                  </div>
      
                  <!-- Monthly Performance Chart -->
                  <div class="w-full">
                      <canvas id="monthlyPerformanceChart"></canvas>
                  </div>
              </div>
      
          </div>
      
      </div>
      

    </div>

    <!-- Chart.js Initialization -->
    <script>
        // Sales Breakdown by Product & Buyer Category Chart
        const salesBreakdownChart = new Chart(document.getElementById("salesBreakdownChart"), {
            type: 'bar',
            data: {
                labels: ['July', 'August', 'September', 'October'],
                datasets: [
                    {
                        label: 'Restaurants',
                        data: [120000, 150000, 130000, 145000],
                        backgroundColor: '#0e51a7',
                    },
                    {
                        label: 'Cafe',
                        data: [90000, 110000, 95000, 105000],
                        backgroundColor: '#964B00',
                    },
                    {
                        label: 'Takeaway',
                        data: [85000, 90000, 80000, 95000],
                        backgroundColor: '#32CD32',
                    },
                    {
                        label: 'Bar & Pub',
                        data: [70000, 80000, 75000, 70000],
                        backgroundColor: '#f59e0b',
                    },
                    {
                        label: 'Catering',
                        data: [60000, 65000, 62000, 69000],
                        backgroundColor: '#ec4899',
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true,
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });

        // Buyer Performance Monthly View Chart
  // Monthly Performance Bar Chart
  const monthlyPerformanceChart = new Chart(document.getElementById("monthlyPerformanceChart"), {
        type: 'bar',
        data: {
            labels: ['Cafe Americano', 'Mixing Pot', 'Hospitality', 'Popeye', 'KFC', 'Pizza Hut', 'Monopole'],
            datasets: [{
                label: 'July',
                data: [7000, 8500, 5500, 6000, 4000, 4500, 3000],
                backgroundColor: '#3b82f6',
                borderRadius: 8,
            }, {
                label: 'August',
                data: [8000, 9000, 7000, 6500, 5000, 5500, 4000],
                backgroundColor: '#10b981',
                borderRadius: 8,
            }, {
                label: 'September',
                data: [7500, 9500, 8000, 7000, 6000, 6000, 4500],
                backgroundColor: '#f97316',
                borderRadius: 8,
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        color: 'white',
                    }
                },
                y: {
                    ticks: {
                        color: 'white',
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white',
                    }
                },
                tooltip: {
                    bodyColor: 'white',
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                }
            }
        }
    });
    </script>

</body>
</html>