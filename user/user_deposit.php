<?php
include('../user/assets/config/dbconn.php');

include('../user/assets/inc/header.php');

include('../user/assets/inc/sidebar.php');

include('../user/assets/inc/navbar.php');

?>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center g-4">
            <div class="col-12 col-lg-8">
                <div class="row g-4">
                    <!-- Account Balance -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center">
                            <div class="card-body">
                                <h3 class="card-title">Account Balance</h3>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>5,240.75</p>
                            </div>
                        </div>
                    </div>
                    <!-- Loan Balance -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center">
                            <div class="card-body">
                                <h3 class="card-title">Loan Balance</h3>
                                <p class="card-text display-6 fw-bold"><span class="currency">₱</span>1,500.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Monthly Deposit Limit -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-sm text-center">
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
        </div>
    </div>

    <div class="d-flex">
    <div class="flex-grow-1 p-4">
        <div class="mb-4">
            <h1 class="h3">Deposit Money</h1>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Add Deposit</h5>
                  <form id="depositForm">
                      <div class="mb-3">
                         <label for="paymentMethod" class="form-label">Payment Method</label>
                           <select class="form-select" id="paymentMethod" name="paymentMethod">
                               <option value="" selected disabled hidden>Choose a Payment Method</option>
                               <option value="paypal">PayPal</option>
                               <option value="gcash">Gcash</option>
                               <option value="bank">Bank Transfer</option>
                           </select>
                      </div>
                       <div id="paymentAccountFields">
                         <!-- Dynamic payment method input fields will be added here -->
                       </div>
                      <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                    </div>
                       <div class="mb-3">
                        <label for="transactionId" class="form-label">Transaction ID</label>
                        <input type="text" class="form-control" id="transactionId" name="transactionId" placeholder="Enter transaction ID">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description (optional)</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                    </div>
                    <button type="submit" class="btn btn-primary">Proceed to payment</button>
                </form>
            </div>
        </div>
           <!-- Deposit History -->
            <div>
                <h5 class="mb-3">Deposit History</h5>
                <table class="table table-striped">
                     <thead>
                        <tr>
                            <th scope="col">Payment Method</th>
                             <th scope="col">Transaction ID</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                         <!-- Entries will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            const paymentMethod = this.value;
            const paymentAccountFields = document.getElementById('paymentAccountFields');

            paymentAccountFields.innerHTML = ''; // Clear existing fields

            if(paymentMethod === 'bank') {
                const bankAccountInput = document.createElement('div');
                  bankAccountInput.classList.add('mb-3');
                 bankAccountInput.innerHTML = `
                   <label for="bankAccountNumber" class="form-label">Bank Account Number</label>
                   <input type="text" class="form-control" id="bankAccountNumber" name="bankAccountNumber" placeholder="Enter Bank Account Number">
                   `;
                paymentAccountFields.appendChild(bankAccountInput);
            } else if(paymentMethod === 'paypal') {
               const paypalAccountInput = document.createElement('div');
                 paypalAccountInput.classList.add('mb-3');
                  paypalAccountInput.innerHTML = `
                   <label for="paypalEmail" class="form-label">Paypal Email</label>
                   <input type="text" class="form-control" id="paypalEmail" name="paypalEmail" placeholder="Enter Paypal Email">
                   `;
                paymentAccountFields.appendChild(paypalAccountInput);

            } else if (paymentMethod === 'gcash') {
              const gcashAccountInput = document.createElement('div');
              gcashAccountInput.classList.add('mb-3');
                gcashAccountInput.innerHTML = `
                  <label for="gcashNumber" class="form-label">GCash Number</label>
                  <input type="text" class="form-control" id="gcashNumber" name="gcashNumber" placeholder="Enter GCash Number">
                   `;
                paymentAccountFields.appendChild(gcashAccountInput);
            }
        });
    </script>
</body>

</html>