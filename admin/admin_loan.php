<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Loan Management</h1>
        <!-- Filter Tabs -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#allLoans">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#approvedLoans">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#pendingLoans">Pending</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#rejectedLoans">Rejected</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="allLoans">
                 <div class="card shadow-sm card-custom-bg">
                <div class="card-body">
                  <h5 class="card-title">Loan List</h5>
                     <div class="table-responsive">
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Loan ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Term (months)</th>
                                 <th scope="col">Date of Application</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                <td>12345</td>
                                <td>user1</td>
                                <td>₱2000.00</td>
                                <td>12</td>
                                 <td>2024-07-20</td>
                                <td>Approved</td>
                                 <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal"  onclick="loadLoanDetails(12345)">View</button></td>
                            </tr>
                            <tr>
                                <td>12346</td>
                                  <td>user2</td>
                                <td>₱500.00</td>
                                <td>6</td>
                                 <td>2024-07-18</td>
                                  <td>Pending</td>
                                 <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="loadLoanDetails(12346)">View</button></td>
                            </tr>
                           <tr>
                                 <td>12347</td>
                                 <td>user3</td>
                                  <td>₱1000.00</td>
                                 <td>12</td>
                                  <td>2024-07-15</td>
                                   <td>Rejected</td>
                                   <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="loadLoanDetails(12347)">View</button></td>
                           </tr>
                                <tr>
                                <td>12348</td>
                                  <td>user4</td>
                                <td>₱1500.00</td>
                                 <td>18</td>
                                 <td>2024-07-10</td>
                                  <td>Approved</td>
                                 <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="loadLoanDetails(12348)">View</button></td>
                            </tr>
                            <tr>
                                 <td>12349</td>
                                <td>user5</td>
                                 <td>₱3000.00</td>
                                  <td>24</td>
                                  <td>2024-07-08</td>
                                  <td>Pending</td>
                                   <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="loadLoanDetails(12349)">View</button></td>
                            </tr>
                       </tbody>
                     </table>
                   </div>
                </div>
            </div>
            <div class="tab-pane fade" id="approvedLoans">
                  <div class="card shadow-sm card-custom-bg">
                       <div class="card-body">
                         <h5 class="card-title">Approved Loans</h5>
                       </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="pendingLoans">
                 <div class="card shadow-sm card-custom-bg">
                      <div class="card-body">
                        <h5 class="card-title">Pending Loans</h5>
                      </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="rejectedLoans">
                 <div class="card shadow-sm card-custom-bg">
                      <div class="card-body">
                          <h5 class="card-title">Rejected Loans</h5>
                      </div>
                 </div>
            </div>
        </div>
    </div>

    <!-- View Registration Modal -->
   <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">View Loan Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                         <div class="col-md-6 text-center">
                            <img id="viewStorePicture" src="../admin/assets/img/user.png" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                          </div>
                            <div class="col-md-6">
                              <p><strong>Loan ID:</strong> <span id="modalLoanID"></span></p>
                               <p><strong>User:</strong> <span id="modalUsername"></span></p>
                                  <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                              <p><strong>Term (months):</strong> <span id="modalTerm"></span></p>
                               <p><strong>Date of Application:</strong> <span id="modalDateofApplication"></span></p>
                                   <p><strong>Status:</strong> <span id="modalDocumentStatus"></span></p>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="updateDocumentStatus('Approved')">Approve</button>
                    <button type="button" class="btn btn-danger" onclick="updateDocumentStatus('Rejected')">Reject</button>
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
      <script>
 const loanModal = document.getElementById('viewModal')
   loanModal.addEventListener('show.bs.modal', event => {
         const button = event.relatedTarget;
           const modalLoanID = loanModal.querySelector('#viewLoanID')
           const modalUsername = loanModal.querySelector('#modalUsername')
             const modalAmount = loanModal.querySelector('#viewAmount')
            const modalTerm = loanModal.querySelector('#viewTerm')
            const modalDateofApplication = loanModal.querySelector('#viewDateofApplication')
             const modalDocumentStatus = loanModal.querySelector('#viewDocumentStatus')


           // these values should be coming from the server based on what was selected
             modalLoanID.textContent = button.closest('tr').cells[0].textContent
             modalUsername.textContent = button.closest('tr').cells[1].textContent
             modalAmount.textContent = button.closest('tr').cells[2].textContent
             modalTerm.textContent = button.closest('tr').cells[3].textContent
              modalDateofApplication.textContent = button.closest('tr').cells[4].textContent
              modalDocumentStatus.textContent = button.closest('tr').cells[5].textContent

    });
  function updateDocumentStatus(status) {
  }
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>