<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');

// Assume we have some way to get the current user's role (e.g., from a session or database)
// For now, let's use a simple placeholder. You'll need to adapt this to your authentication logic.
$userRole = 'admin'; // Options: 'admin' or 'staff'
?>
<main>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Admin Help Center</h1>

         <div class="mb-4">
               <input type="text" class="form-control" placeholder="Search Policies and Procedures" id="helpSearch">
           </div>

           <!-- Admin Controls -->
            <?php if ($userRole === 'admin') : ?>
                <div class="mb-4 d-flex justify-content-end">
                      <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addPolicyModal">Add Policy</button>
                      <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modifyPolicyModal">Modify Policy</button>
                </div>
            <?php endif; ?>

        <!-- Policy and Procedures Sections -->
        <div class="accordion" id="helpAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingAdmissionPolicies">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdmissionPolicies" aria-expanded="true" aria-controls="collapseAdmissionPolicies">
                    Deposit Policies
                    </button>
                </h2>
                <div id="collapseAdmissionPolicies" class="accordion-collapse collapse show" aria-labelledby="headingAdmissionPolicies" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                       <p>
                       Deposits are credited to the user's account within one business day, and will be shown as pending until reviewed by the system administrator, if everything is approved the funds will be fully credited to the user.
                        </p>
                         <p>The system does not allow deposits that exceed the user's maximum deposit limit per month. If a user tries to exceed this limit then it should not go through, and an appropriate message will be displayed.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSchedulingPolicies">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSchedulingPolicies" aria-expanded="false" aria-controls="collapseSchedulingPolicies">
                    Withdrawal Policies
                    </button>
                </h2>
                <div id="collapseSchedulingPolicies" class="accordion-collapse collapse" aria-labelledby="headingSchedulingPolicies" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                       <p>
                       The withdrawal amount must not exceed the current available balance in the user's account.                       </p>
                      <p>
                      Withdrawal requests are processed within two business days. Users will be redirected to the payment provider's website for authorization.                       </p>
                   </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingInventoryProtocol">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInventoryProtocol" aria-expanded="false" aria-controls="collapseInventoryProtocol">
                    User Issue Protocols
                    </button>
                </h2>
                <div id="collapseInventoryProtocol" class="accordion-collapse collapse" aria-labelledby="headingInventoryProtocol" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>
                        When a user reports an issue, follow this procedure: 1. Confirm that you understand the issue. 2. Get the necessary details about the issue, such as the date of transaction, or user details. 3. If the issue is a bug or system failure then report it immediately to the development team. 4. If the issue is a user issue such as password recovery, then help the user.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingBillingProtocol">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBillingProtocol" aria-expanded="false" aria-controls="collapseBillingProtocol">
                    Security Protocols
                    </button>
                </h2>
                 <div id="collapseBillingProtocol" class="accordion-collapse collapse" aria-labelledby="headingBillingProtocol" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>
                        If a user reports a potential security breach then take the following steps. 1. Change the password of the user immediately. 2. If there was a potential transaction breach then immediately freeze the account until the issue has been investigated. 3. Notify the development team so they can patch the issue or correct it.                        </p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
  <!-- Add Policy Modal -->
    <div class="modal fade" id="addPolicyModal" tabindex="-1" aria-labelledby="addPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     <h5 class="modal-title" id="addPolicyModalLabel">Add New Policy</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addPolicyForm" method="post" action="">
                           <div class="mb-3">
                                <label for="policyTitle" class="form-label">Policy Title</label>
                                <input type="text" class="form-control" id="policyTitle" name="policyTitle" required>
                           </div>
                           <div class="mb-3">
                                  <label for="policyContent" class="form-label">Policy Content</label>
                                   <textarea class="form-control" id="policyContent" name="policyContent" rows="5" required></textarea>
                           </div>
                        <button type="submit" class="btn btn-primary">Add Policy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modify Policy Modal -->
   <div class="modal fade" id="modifyPolicyModal" tabindex="-1" aria-labelledby="modifyPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="modifyPolicyModalLabel">Modify Policy</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <form id="modifyPolicyForm" method="post" action="">
                          <div class="mb-3">
                                <label for="modifyPolicySelect" class="form-label">Select Policy</label>
                                <select class="form-select" id="modifyPolicySelect" name="modifyPolicySelect" required>
                                   <!-- You will have to add php code to populate the content of the select-->
                                   <option value="0">Select a policy</option>
                                    <option value="1">Deposit Policies</option>
                                     <option value="2">Withdrawal Policies</option>
                                     <option value="3">User Issue Protocols</option>
                                      <option value="4">Security Protocols</option>
                                </select>
                            </div>
                           <div class="mb-3">
                                  <label for="modifyPolicyContent" class="form-label">New Content</label>
                                   <textarea class="form-control" id="modifyPolicyContent" name="modifyPolicyContent" rows="5" required></textarea>
                           </div>
                        <button type="submit" class="btn btn-primary">Modify Policy</button>
                   </form>
               </div>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Javascript implementation, You will have to implement the save data with php
       document.getElementById('addPolicyForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get the data from the form
        const policyTitle = document.getElementById('policyTitle').value;
         const policyContent = document.getElementById('policyContent').value;

        // Prepare data
         const formData = {
             policyTitle: policyTitle,
            policyContent: policyContent
            };
        console.log(formData);
          // Reset the form
         document.getElementById('addPolicyForm').reset();
        // close modal
        const modal = document.getElementById('addPolicyModal');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();
         // Display a success message or redirect to the patient list page
          alert("New policy added successfully, data logged in the console")
    });
    // Javascript implementation, You will have to implement the modify data with php
    document.getElementById('modifyPolicyForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

          // Get the data from the form
        const modifyPolicySelect = document.getElementById('modifyPolicySelect').value;
         const modifyPolicyContent = document.getElementById('modifyPolicyContent').value;

        // Prepare data
        const formData = {
            modifyPolicySelect: modifyPolicySelect,
            modifyPolicyContent: modifyPolicyContent
            };
        console.log(formData); // for debugging purposes

       // Reset the form
        document.getElementById('modifyPolicyForm').reset();
       // close modal
        const modal = document.getElementById('modifyPolicyModal');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();
      // Display a success message or redirect to the patient list page
       alert("Policy modified successfully, data logged in the console")
    });
 </script>
</body>
</html>