<?php 
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>
<body>
    <!-- Dashboard -->
    <section id="dashboard" class="container my-4">
        <div class="text-center mb-4">
            <h1>Client Dashboard</h1>
        </div>

        <!-- Info Cards -->
        <div class="row g-4">
            <div class="col-12 col-lg-8">
                <div class="row g-4">
                    <!-- Account Balance -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center ">
                            <div class="card-body">
                                <h3 class="card-title">Account Balance</h3>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>5,240.75</p>
                            </div>
                        </div>
                    </div>
                    <!-- Loan Balance -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center ">
                            <div class="card-body">
                                <h3 class="card-title">Loan Balance</h3>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>1,500.00</p>
                            </div>
                        </div>
                    </div>
                     <!-- Monthly Deposit Limit -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center ">
                            <div class="card-body">
                                <h3 class="card-title">Monthly Deposit Limit</h3>
                                <p class="card-text"><span class="currency">₱</span> 0.00 used out of 100,000.00</p>
                                <p class="card-text fw-bold"><span class="currency">₱</span> 100,000.00 left</p>
                            </div>
                        </div>
                    </div>
                    <!-- Monthly Withdrawal Limit -->
                    <div class="col-md-6 col-lg-6">
                         <div class="card shadow-sm text-center">
                            <div class="card-body">
                                <h3 class="card-title">Monthly Withdrawal Limit</h3>
                                <p class="card-text"><span class="currency">₱</span> 0.00 used out of 100,000.00</p>
                                <p class="card-text fw-bold"><span class="currency">₱</span> 100,000.00 left</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h3 class="card-title">Financial Overview</h3>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deposit Overview, Withdrawal Overview, and Recent Transactions -->
        <div class="row g-4 mt-4">
            <!-- Deposit Overview Graph -->
            <div class="col-md-6">
                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <h3 class="card-title text-center">Deposit Overview</h3>
                        <canvas id="depositChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Withdrawal Overview Graph -->
            <div class="col-md-6">
                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <h3 class="card-title text-center">Withdrawal Overview</h3>
                        <canvas id="withdrawalChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions (Table Format) -->
        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card shadow-sm ">
                    <div class="card-body">
                        <h3 class="card-title">Recent Transactions</h3>
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Type of Transaction</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$500.00</td>
                                    <td>Jan 15, 2025</td>
                                </tr>
                                <tr>
                                    <td>Withdrawal</td>
                                    <td>$200.00</td>
                                    <td>Jan 12, 2025</td>
                                </tr>
                                <tr>
                                    <td>Deposit</td>
                                    <td>$1,000.00</td>
                                    <td>Jan 10, 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('depositChart').getContext('2d');
        const depositChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan 1', 'Jan 5', 'Jan 10', 'Jan 15', 'Jan 20'],
                datasets: [{
                    label: 'Deposits',
                    data: [500, 1500, 2000, 2500, 3000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const Withdrawal = document.getElementById('withdrawalChart').getContext('2d');
        const withdrawalChart = new Chart(Withdrawal, {
            type: 'line',
            data: {
                labels: ['Jan 1', 'Jan 5', 'Jan 10', 'Jan 15', 'Jan 20'],
                datasets: [{
                    label: 'Deposits',
                    data: [500, 1500, 2000, 2500, 3000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Deposits', 'Withdrawals', 'Loans'],
                datasets: [{
                    label: 'Financial Distribution',
                    data: [5240.75, 1200.00, 1500.00],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                 responsive: true,
                plugins: {
                     legend: {
                         position: 'bottom',
                         align: 'center',
                         labels: {
                                  usePointStyle: true,
                            }
                     },
                     tooltip: {
                         enabled: true
                     }
                 }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>