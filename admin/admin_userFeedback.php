<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">User Feedback</h1>

        <!-- Feedback Filters -->
         <div class="card mb-4">
           <div class="card-body">
               <h5 class="card-title">Filter Feedback</h5>
                <div class="row g-3 align-items-end">
                   <div class="col-md-2">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                     <div class="col-md-2">
                        <label for="endDate" class="form-label">End Date</label>
                         <input type="date" class="form-control" id="endDate">
                     </div>
                    <div class="col-md-3">
                        <label for="transactionType" class="form-label">Transaction Type</label>
                        <select class="form-select" id="transactionType">
                            <option value="all">All</option>
                            <option value="deposit">Deposit</option>
                            <option value="withdrawal">Withdrawal</option>
                        </select>
                    </div>
                      <div class="col-md-2">
                         <button class="btn btn-primary">Filter</button>
                     </div>
                </div>
            </div>
        </div>

        <!-- Feedback Table -->
        <div class="card">
           <div class="card-body">
                <h5 class="card-title">User Feedback List</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                           <tr>
                                <th scope="col">User</th>
                                <th scope="col">Date</th>
                                 <th scope="col">Transaction Type</th>
                                <th scope="col">Message</th>
                                 <th scope="col">Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                         <tr>
                            <td>user1</td>
                           <td>2024-07-28</td>
                           <td>Deposit</td>
                           <td>I love this app!</td>
                            <td><button class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal">View</button></td>
                         </tr>
                           <tr>
                              <td>user2</td>
                              <td>2024-07-27</td>
                                 <td>Withdrawal</td>
                              <td>The app is a bit slow sometimes.</td>
                               <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal">View</button></td>
                            </tr>
                            <tr>
                                 <td>user3</td>
                                 <td>2024-07-26</td>
                                 <td>Deposit</td>
                                 <td>The design is great.</td>
                                  <td><button class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal">View</button></td>
                            </tr>
                             <tr>
                                 <td>user4</td>
                                 <td>2024-07-26</td>
                                  <td>Deposit</td>
                                 <td>I think you can do better!</td>
                                    <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal">View</button></td>
                             </tr>
                                <tr>
                                   <td>user5</td>
                                    <td>2024-07-20</td>
                                   <td>Withdrawal</td>
                                  <td>I have some great feature suggestions!</td>
                                     <td><button class="btn btn-sm btn-primary"  data-bs-toggle="modal" data-bs-target="#feedbackDetailsModal">View</button></td>
                                </tr>
                        </tbody>
                   </table>
              </div>
          </div>
       </div>
    </div>
      <!-- Modal -->
    <div class="modal fade" id="feedbackDetailsModal" tabindex="-1" aria-labelledby="feedbackDetailsModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="feedbackDetailsModalLabel">Feedback Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                      <div class="modal-body">
                            <p><strong>User:</strong><span id="modalUsername"></span></p>
                            <p><strong>Date:</strong> <span id="modalFeedbackDate"></span></p>
                            <p><strong>Transaction Type:</strong> <span id="modalTransactionType"></span></p>
                           <p><strong>Message:</strong> <span id="modalMessage"></span></p>
                        </div>
                     <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
      </div>
 <script>
 const feedbackModal = document.getElementById('feedbackDetailsModal')
 feedbackModal.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget
   const modalUsername = feedbackModal.querySelector('#modalUsername')
   const modalFeedbackDate = feedbackModal.querySelector('#modalFeedbackDate')
    const modalMessage = feedbackModal.querySelector('#modalMessage')
     const modalTransactionType = feedbackModal.querySelector('#modalTransactionType')


 // these values should be coming from the server based on what was selected
     modalUsername.textContent = "user1"
    modalFeedbackDate.textContent = "2024-07-28"
    modalTransactionType.textContent = "Deposit"
    modalMessage.textContent = "I love this app!"
 })
 </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>