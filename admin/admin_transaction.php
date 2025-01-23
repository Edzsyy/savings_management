<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Transaction Management</h1>
            <div class="card mb-4">
                <div class="card-body">
                   <h5 class="card-title">Filter Transactions</h5>
                    <div class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate">
                        </div>
                          <div class="col-md-3">
                            <label for="endDate" class="form-label">End Date</label>
                             <input type="date" class="form-control" id="endDate">
                         </div>
                         <div class="col-md-3">
                            <label for="transactionType" class="form-label">Transaction Type</label>
                            <select class="form-select" id="transactionType">
                                <option value="all">All Transactions</option>
                                <option value="deposit">Deposits</option>
                                <option value="withdrawal">Withdrawals</option>
                            </select>
                         </div>
                         <div class="col-md-3">
                            <label for="searchTransaction" class="form-label">Search</label>
                           <input type="text" class="form-control" id="searchTransaction" placeholder="Enter username or transaction ID">
                      </div>
                      <div class="col-md-2">
                        <button class="btn btn-primary">Filter</button>
                    </div>
                    </div>
                </div>
            </div>

        <!-- Transaction Table -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transactions List</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Transaction ID</th>
                              <th scope="col">User</th>
                              <th scope="col">Type</th>
                              <th scope="col">Payment Method</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                 <th scope="col">Status</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                           </tr>
                        </thead>
                         <tbody>
                         <tr>
                            <td>12345</td>
                            <td>user1</td>
                           <td>Deposit</td>
                            <td>Paypal</td>
                            <td>$100.00</td>
                             <td>2024-07-28</td>
                             <td>Completed</td>
                            <td>Initial Deposit</td>
                              <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionDetailsModal">View</button></td>
                       </tr>
                         <tr>
                            <td>12346</td>
                            <td>user2</td>
                            <td>Withdrawal</td>
                             <td>Bank Transfer</td>
                           <td>$50.00</td>
                             <td>2024-07-27</td>
                             <td>Pending</td>
                            <td>Monthly Withdrawal</td>
                              <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionDetailsModal">View</button></td>
                        </tr>
                         <tr>
                            <td>12347</td>
                            <td>user3</td>
                           <td>Deposit</td>
                            <td>Gcash</td>
                            <td>$200.00</td>
                             <td>2024-07-26</td>
                             <td>Completed</td>
                            <td>Monthly Savings</td>
                            <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionDetailsModal">View</button></td>
                        </tr>
                        <tr>
                            <td>12348</td>
                            <td>user4</td>
                           <td>Withdrawal</td>
                            <td>Paypal</td>
                            <td>$75.00</td>
                             <td>2024-07-25</td>
                              <td>Completed</td>
                            <td>Movie night</td>
                           <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionDetailsModal">View</button></td>
                        </tr>
                            <tr>
                            <td>12349</td>
                             <td>user5</td>
                            <td>Deposit</td>
                             <td>Bank Transfer</td>
                            <td>$2000.00</td>
                              <td>2024-07-20</td>
                              <td>Pending</td>
                            <td>Salary deposit</td>
                              <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionDetailsModal">View</button></td>
                        </tr>
                   </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
     <div class="modal fade" id="transactionDetailsModal" tabindex="-1" aria-labelledby="transactionDetailsModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="transactionDetailsModalLabel">Transaction Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                      <div class="modal-body">
                            <p><strong>Transaction ID:</strong> <span id="modalTransactionId"></span></p>
                            <p><strong>User:</strong><span id="modalUsername"></span></p>
                           <p><strong>Type:</strong> <span id="modalTransactionType"></span></p>
                             <p><strong>Payment Method:</strong> <span id="modalPaymentMethod"></span></p>
                            <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                           <p><strong>Date:</strong> <span id="modalTransactionDate"></span></p>
                          <p><strong>Status:</strong> <span id="modalTransactionStatus"></span></p>
                           <p><strong>Description:</strong> <span id="modalDescription"></span></p>
                        </div>
                     <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
      </div>
  <script>
         const transactionModal = document.getElementById('transactionDetailsModal')
          transactionModal.addEventListener('show.bs.modal', event => {
           const button = event.relatedTarget
            const modalTransactionId = transactionModal.querySelector('#modalTransactionId')
           const modalUsername = transactionModal.querySelector('#modalUsername')
             const modalTransactionType = transactionModal.querySelector('#modalTransactionType')
            const modalPaymentMethod = transactionModal.querySelector('#modalPaymentMethod')
             const modalAmount = transactionModal.querySelector('#modalAmount')
             const modalTransactionDate = transactionModal.querySelector('#modalTransactionDate')
              const modalTransactionStatus = transactionModal.querySelector('#modalTransactionStatus')
             const modalDescription = transactionModal.querySelector('#modalDescription')
           
              // these values should be coming from the server based on what was selected
            modalTransactionId.textContent = "12345"
            modalUsername.textContent = "user1"
             modalTransactionType.textContent = "Deposit"
            modalPaymentMethod.textContent = "Paypal"
            modalAmount.textContent = "$100.00"
            modalTransactionDate.textContent = "2024-07-28"
            modalTransactionStatus.textContent = "Completed"
           modalDescription.textContent = "Initial Deposit"


            })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>