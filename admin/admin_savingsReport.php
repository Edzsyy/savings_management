<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Savings Report</h1>

        <!-- Report Generation Filters -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Generate Report</h5>
                 <div class="row g-3 align-items-end">
                    <div class="col-md-2">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                    <div class="col-md-2">
                        <label for="endDate" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                     <div class="col-md-2">
                         <label for="transactionType" class="form-label">Transaction Type</label>
                        <select class="form-select" id="transactionType" name="transactionType">
                           <option value="all">All</option>
                            <option value="deposit">Deposits</option>
                            <option value="withdrawal">Withdrawals</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                          <label for="paymentMethod" class="form-label">Payment Method</label>
                        <select class="form-select" id="paymentMethod" name="paymentMethod">
                            <option value="all">All</option>
                             <option value="bank">Bank Transfer</option>
                            <option value="paypal">PayPal</option>
                             <option value="gcash">Gcash</option>
                         </select>
                     </div>
                      <div class="col-md-4">
                           <label for="userSelect" class="form-label">Select User</label>
                             <select class="form-select" id="userSelect" name="userSelect">
                               <option value="" selected disabled hidden>Choose an Option</option>
                               <option value="all">All Users</option>
                                <option value="specific">Specific User</option>
                             </select>
                          <div id="specificUserInput" class="mt-2">
                            <!-- Input for the username will be placed here using javascript -->
                          </div>
                     </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">Generate Report</button>
                    </div>
                </div>
            </div>
         </div>


        <!-- Report Display Area -->
        <div class="card">
           <div class="card-body">
               <h5 class="card-title">Report Data</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                       <thead>
                           <tr>
                             <th scope="col">Date</th>
                                <th scope="col">Username</th>
                              <th scope="col">Type</th>
                               <th scope="col">Amount</th>
                                 <th scope="col">Payment Method</th>
                              <th scope="col">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td>2024-07-28</td>
                                <td>user1</td>
                                <td>Deposit</td>
                                 <td>$100.00</td>
                                 <td>Paypal</td>
                                <td>$1200.00</td>
                             </tr>
                             <tr>
                                <td>2024-07-27</td>
                                <td>user2</td>
                                 <td>Withdrawal</td>
                                 <td>$50.00</td>
                                  <td>Bank Transfer</td>
                                 <td>$350.00</td>
                            </tr>
                           <tr>
                                 <td>2024-07-26</td>
                                 <td>user3</td>
                                   <td>Deposit</td>
                                    <td>$200.00</td>
                                    <td>Gcash</td>
                                  <td>$5000.00</td>
                           </tr>
                         </tbody>
                     </table>
                 </div>
          </div>
       </div>
    </div>
 <script>
        document.getElementById('userSelect').addEventListener('change', function() {
            const userSelection = this.value;
            const specificUserInput = document.getElementById('specificUserInput');

            specificUserInput.innerHTML = ''; // Clear existing fields
            if(userSelection === 'specific') {
               const specificUser = document.createElement('div');
                 specificUser.innerHTML = `
                  <label for="specificUser" class="form-label">Enter Username</label>
                     <input type="text" class="form-control" id="specificUser" name="specificUser" placeholder="Enter Username">
                   `;
                specificUserInput.appendChild(specificUser);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>