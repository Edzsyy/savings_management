<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>

<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Transaction History</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Filter Transactions</h5>
                <div class="row mb-3 align-items-end">
                    <div class="col-md-3">
                        <label for="startDate" class="form-label">Start Date:</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                     <div class="col-md-3">
                        <label for="endDate" class="form-label">End Date:</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                      <div class="col-md-3">
                        <label for="transactionType" class="form-label">Transaction Type:</label>
                        <select class="form-select" id="transactionType">
                            <option value="all">All</option>
                            <option value="deposit">Deposits</option>
                            <option value="withdrawal">Withdrawals</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                       <button class="btn btn-primary mt-4" onclick="filterTransactions()">Filter</button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody id="transactionTableBody">
                        <!-- Transaction entries will be dynamically inserted here (using JavaScript) -->
                        <tr>
                            <td>Deposit</td>
                            <td>₱500.00</td>
                            <td>Initial deposit</td>
                            <td>2024-07-26</td>
                        </tr>
                        <tr>
                            <td>Withdrawal</td>
                            <td>₱200.00</td>
                            <td>Monthly rent</td>
                            <td>2024-07-25</td>
                         </tr>
                          <tr>
                            <td>Deposit</td>
                            <td>₱200.00</td>
                            <td>Monthly savings deposit</td>
                            <td>2024-07-20</td>
                        </tr>
                          <tr>
                            <td>Withdrawal</td>
                            <td>₱100.00</td>
                            <td>Groceries</td>
                            <td>2024-07-19</td>
                         </tr>
                         <tr>
                            <td>Deposit</td>
                             <td>₱100.00</td>
                             <td>Bonus deposit</td>
                            <td>2024-07-15</td>
                         </tr>
                        <tr>
                            <td>Withdrawal</td>
                             <td>₱300.00</td>
                             <td>Car payment</td>
                            <td>2024-07-14</td>
                         </tr>
                        <tr>
                            <td>Deposit</td>
                            <td>₱300.00</td>
                            <td>Paycheck deposit</td>
                            <td>2024-07-10</td>
                         </tr>
                        <tr>
                            <td>Withdrawal</td>
                             <td>₱50.00</td>
                             <td>Utility bill</td>
                            <td>2024-07-08</td>
                        </tr>
                        <tr>
                             <td>Deposit</td>
                            <td>₱150.00</td>
                            <td>Gift deposit</td>
                           <td>2024-07-05</td>
                        </tr>
                         <tr>
                            <td>Withdrawal</td>
                             <td>₱40.00</td>
                             <td>Dinner with friends</td>
                            <td>2024-07-01</td>
                         </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

 <script>
        function filterTransactions() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
             const transactionType = document.getElementById('transactionType').value;


            const tableBody = document.getElementById('transactionTableBody');
           
            
            // Clear previous results
            tableBody.innerHTML = "";

            // Fetch data from the server (would require a backend call)
            const transactions = [
                   { type: 'Deposit', amount: '₱500.00', description: 'Initial deposit', date: '2024-07-26' },
                { type: 'Withdrawal', amount: '₱200.00', description: 'Monthly rent', date: '2024-07-25' },
                { type: 'Deposit', amount: '₱200.00', description: 'Monthly savings deposit', date: '2024-07-20' },
                { type: 'Withdrawal', amount: '₱100.00', description: 'Groceries', date: '2024-07-19' },
                { type: 'Deposit', amount: '₱100.00', description: 'Bonus deposit', date: '2024-07-15' },
                { type: 'Withdrawal', amount: '₱300.00', description: 'Car payment', date: '2024-07-14' },
                 { type: 'Deposit', amount: '₱300.00', description: 'Paycheck deposit', date: '2024-07-10' },
                { type: 'Withdrawal', amount: '₱50.00', description: 'Utility bill', date: '2024-07-08' },
                  { type: 'Deposit', amount: '₱150.00', description: 'Gift deposit', date: '2024-07-05' },
                { type: 'Withdrawal', amount: '₱40.00', description: 'Dinner with friends', date: '2024-07-01' },

            ];


            transactions.forEach(transaction => {
                 // Check if the transaction date is within the selected range
                 if ((!startDate || !endDate || (transaction.date >= startDate && transaction.date <= endDate)) &&
                     (transactionType === 'all' || transaction.type === transactionType)) {

                const row = document.createElement('tr');
                 row.innerHTML = `
                  <td>${transaction.type}</td>
                    <td>${transaction.amount}</td>
                    <td>${transaction.description}</td>
                    <td>${transaction.date}</td>
                  `;
                  tableBody.appendChild(row);
              }
          });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>