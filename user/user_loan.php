<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>

<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Loan Management</h1>
           <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Apply for a Loan</h5>
                <form id="loanForm">
                    <div class="mb-3">
                        <label for="loanAmount" class="form-label">Loan Amount</label>
                        <input type="text" class="form-control" id="loanAmount" name="loanAmount" placeholder="Enter loan amount">
                    </div>
                    <div class="mb-3">
                        <label for="loanTerm" class="form-label">Loan Term (months)</label>
                        <input type="text" class="form-control" id="loanTerm" name="loanTerm" placeholder="Enter loan term">
                    </div>
                     <div class="mb-3">
                        <label for="reason" class="form-label">Reason</label>
                        <textarea class="form-control" id="reason" name="reason" placeholder="Enter reason for loan application"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Loan History</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Loan ID</th>
                             <th scope="col">Status</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Term (months)</th>
                            <th scope="col">Applied Date</th>
                        </tr>
                    </thead>
                    <tbody id="loanTableBody">
                        <!-- Loan entries will be dynamically inserted here (using JavaScript) -->
                        <tr>
                            <td>12345</td>
                            <td>Approved</td>
                            <td>$2000.00</td>
                            <td>12</td>
                            <td>2024-07-20</td>
                        </tr>
                           <tr>
                            <td>12346</td>
                            <td>Pending</td>
                            <td>$500.00</td>
                            <td>6</td>
                            <td>2024-07-18</td>
                        </tr>
                         <tr>
                            <td>12347</td>
                            <td>Rejected</td>
                            <td>$1000.00</td>
                            <td>12</td>
                             <td>2024-07-15</td>
                        </tr>
                        <tr>
                            <td>12348</td>
                            <td>Approved</td>
                            <td>$1500.00</td>
                             <td>18</td>
                            <td>2024-07-10</td>
                       </tr>
                        <tr>
                            <td>12349</td>
                             <td>Pending</td>
                            <td>$3000.00</td>
                            <td>24</td>
                             <td>2024-07-08</td>
                        </tr>
                         <tr>
                            <td>12350</td>
                             <td>Rejected</td>
                            <td>$4000.00</td>
                             <td>12</td>
                            <td>2024-07-04</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>