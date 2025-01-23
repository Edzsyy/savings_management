<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Admin Dashboard</h1>

        <div class="row g-4">
            <!-- Statistics Cards -->
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm text-center card-custom-bg">
                            <div class="card-body">
                                <h5 class="card-title">Total Deposits</h5>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>100,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm text-center card-custom-bg">
                            <div class="card-body">
                                <h5 class="card-title">Total Withdrawals</h5>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>30,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                         <div class="card shadow-sm text-center card-custom-bg">
                            <div class="card-body">
                                <h5 class="card-title">Active Users</h5>
                                <p class="card-text display-6 fw-bold">50</p>
                            </div>
                         </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                         <div class="card shadow-sm text-center card-custom-bg">
                             <div class="card-body">
                                <h5 class="card-title">Pending Withdrawals</h5>
                                <p class="card-text display-6 fw-bold">10</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm text-center card-custom-bg">
                           <div class="card-body">
                              <h5 class="card-title">Pending Deposits</h5>
                                <p class="card-text display-6 fw-bold">5</p>
                           </div>
                        </div>
                   </div>
                     <div class="col-sm-6 col-lg-4">
                         <div class="card shadow-sm text-center card-custom-bg">
                             <div class="card-body">
                                <h5 class="card-title">Total Loan Applications</h5>
                                <p class="card-text display-6 fw-bold">100</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Transactions Card-->
        <div class="row g-4 mt-4">
            <div class="col-12">
              <div class="card shadow-sm">
                   <div class="card-body">
                         <h5 class="card-title">Recent Transactions</h5>
                            <ul class="list-unstyled">
                                <li>User A deposited ₱100 on 2024-07-28</li>
                                <li>User B withdrew ₱50 on 2024-07-27</li>
                                <li>User C deposited ₱200 on 2024-07-26</li>
                              </ul>
                      </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <!-- User Actions Table -->
            <div class="col-12 col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Quick User Actions</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>user1</td>
                                <td>user1@example.com</td>
                                <td><a href="edit_user.php" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>user2</td>
                                <td>user2@example.com</td>
                                 <td><a href="edit_user.php" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                             </tr>
                            <tr>
                                <td>user3</td>
                                <td>user3@example.com</td>
                                 <td><a href="edit_user.php" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            <!-- Action Buttons-->
             <div class="col-12 col-md-4">
                   <div class="card shadow-sm">
                      <div class="card-body">
                        <h5 class="card-title">Manage System</h5>
                           <a href="admin_users.php" class="btn btn-primary mb-2 d-block">Manage Users</a>
                         <a href="admin_transactions.php" class="btn btn-primary mb-2 d-block">Manage Transactions</a>
                        <a href="admin_settings.php" class="btn btn-primary d-block">Settings</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>