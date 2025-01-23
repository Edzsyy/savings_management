<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Savings Management</h1>

        <!-- Search and Filter -->
         <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Search and Filter Accounts</h5>
                <div class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label for="searchUsername" class="form-label">Search by Username</label>
                         <input type="text" class="form-control" id="searchUsername" placeholder="Enter username">
                    </div>
                    <div class="col-md-3">
                        <label for="filterStatus" class="form-label">Filter by Status</label>
                        <select class="form-select" id="filterStatus">
                            <option value="all">All Accounts</option>
                            <option value="active">Active Accounts</option>
                            <option value="inactive">Inactive Accounts</option>
                        </select>
                    </div>
                      <div class="col-md-3">
                         <label for="filterBalance" class="form-label">Filter by Balance</label>
                           <select class="form-select" id="filterBalance">
                              <option value="all">All Balances</option>
                               <option value="0-1000">0-1000</option>
                              <option value="1000-5000">1000-5000</option>
                             <option value="5000-10000">5000-10000</option>
                             <option value="10000-above">10000 and above</option>
                          </select>
                     </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
         </div>

        <!-- Savings Accounts Table -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Savings Accounts</h5>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                        <tr>
                           <th scope="col">Username</th>
                             <th scope="col">Email</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Status</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                   <tbody>
                      <tr>
                        <td>user1</td>
                         <td>user1@example.com</td>
                         <td>$1200.00</td>
                           <td>Active</td>
                         <td>2024-01-15</td>
                          <td><a href="admin_edit_account.php" class="btn btn-sm btn-outline-secondary">Edit</a> <a href="admin_view_account.php" class="btn btn-sm btn-primary">View</a></td>
                     </tr>
                      <tr>
                           <td>user2</td>
                            <td>user2@example.com</td>
                            <td>$350.00</td>
                            <td>Inactive</td>
                           <td>2024-02-10</td>
                             <td><a href="admin_edit_account.php" class="btn btn-sm btn-outline-secondary">Edit</a> <a href="admin_view_account.php" class="btn btn-sm btn-primary">View</a></td>
                      </tr>
                      <tr>
                            <td>user3</td>
                           <td>user3@example.com</td>
                             <td>$5000.00</td>
                             <td>Active</td>
                            <td>2024-03-20</td>
                              <td><a href="admin_edit_account.php" class="btn btn-sm btn-outline-secondary">Edit</a> <a href="admin_view_account.php" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                      <tr>
                         <td>user4</td>
                         <td>user4@example.com</td>
                           <td>$12000.00</td>
                           <td>Inactive</td>
                           <td>2024-04-21</td>
                             <td><a href="admin_edit_account.php" class="btn btn-sm btn-outline-secondary">Edit</a> <a href="admin_view_account.php" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                       <tr>
                             <td>user5</td>
                             <td>user5@example.com</td>
                           <td>$300.00</td>
                              <td>Active</td>
                              <td>2024-05-15</td>
                                <td><a href="admin_edit_account.php" class="btn btn-sm btn-outline-secondary">Edit</a> <a href="admin_view_account.php" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                   </tbody>
                </table>
             </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>